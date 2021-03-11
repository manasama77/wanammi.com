  <!-- Page Content -->
  <h2>Manage Account</h2>
  <hr>
  <div class="row">
    <div class="col-md-8 col-xs-12 mb-3">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-12">
              <label class="label-title font-weight-bold">List Account</label>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="table">
              <thead>
                <tr>
                  <th width="170px" class="text-center"><i class="fas fa-cogs"></i></th>
                  <th width="50px;" class="text-center">#</th>
                  <th>Username</th>
                  <th>Full Name</th>
                  <th class="text-center" width="80px;">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($arr as $key) {
                  echo '<tr>';
                  echo '<td class="text-center">';
                  echo '<button type="button" onClick="modalReset(\''.$key->id_admin.'\')" class="btn btn-info btn-sm" title="Reset Password"><i class="fas fa-key"></i></button> ';
                  
                  if($key->username != "admin"){
                    echo '<button type="button" onClick="destroy(\''.$key->id_admin.'\');" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete Account"><i class="fas fa-trash"></i></a> ';
                  }
                  
                  echo '</td>';
                  echo '<td class="text-center">';
                  echo $key->id_admin;
                  echo '</td>';
                  echo '<td>';
                  echo $key->username;
                  echo '</td>';
                  echo '<td>';
                  echo $key->full_name;
                  echo '</td>';
                  echo '<td class="text-center">';

                  if($key->status == 1){
                    if($key->username == "admin"){
                      $onclick = '';
                    }else{
                      $onclick = 'onClick="updateStatus('.$key->id_admin.');"';
                    }
                    $status_icon = '<button '.$onclick.' class="btn btn-success btn-sm">Active</button>';
                  }else{
                    if($key->username == "admin"){
                      $onclick = '';
                    }else{
                      $onclick = 'onClick="updateStatus('.$key->id_admin.');"';
                    }
                    $status_icon = '<button '.$onclick.' class="btn btn-danger btn-sm">Not Active</button>';
                  }

                  echo $status_icon;
                  echo '</td>';
                  echo '</tr>';
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-xs-12 mb-3">
      <div class="card">
        <form id="form_create">
          <div class="card-header">
            <div class="row">
              <div class="col-12">
                <label class="label-title font-weight-bold">Create New Account</label>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="c_username">Username</label>
              <input type="text" class="form-control" id="c_username" name="c_username">
              <label id="c_username-error" class="error text-danger" for="c_username" style="display:none;"></label>
            </div>
            <div class="form-group">
              <label for="c_password">Password</label>
              <input type="password" class="form-control" id="c_password" name="c_password" autocomplete="new-password">
              <label id="c_password-error" class="error text-danger" for="c_password" style="display:none;"></label>
            </div>
            <div class="form-group">
              <label for="c_full_name">Full Name</label>
              <input type="text" class="form-control" id="c_full_name" name="c_full_name">
              <label id="c_full_name-error" class="error text-danger" for="c_full_name" style="display:none;"></label>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Create</button>
          </div>
        </form>
      </div>
    </div>

  </div>


<!-- Modal -->
<form id="form_reset_password">
  <div class="modal fade" tabindex="-1" role="dialog" id="modal_reset">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Reset Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fas fa-times"></i></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="new_password">New Password</label>
            <input type="text" class="form-control" id="new_password" name="new_password">
            <label id="new_password-error" class="error text-danger" for="new_password" style="display:none;"></label>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" class="form-control" id="id_admin" name="id_admin" readonly>
          <button type="submit" class="btn btn-primary">Reset Password</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- /.Modal -->

<script>
$(document).ready(function () {

  /*$('#modal_reset').on('shown.bs.modal', function () {
    $('#new_password').trigger('focus')
  })*/

  $('#table').dataTable({
    order: [[1, "desc"]],
    columnDefs: [
      { 
        searchable: false, 
        orderable: false, 
        targets: 0 
      }
    ]
  });

  // FORM VALIDATE RESET PASSWORD
  $('#form_reset_password').validate({
    debug: true,
    rules:{
      new_password:{
        required:true
      }
    },
    submitHandler: function( form ) {
      swal({
        title: "Are you sure?",
        text: "Once reset, this account password will change!",
        icon: "info",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
            url         : '<?=site_url('reset_password');?>',
            method      : 'POST',
            data        : $('#form_reset_password').serialize(),
            dataType    : 'JSON',
            beforeSend  : function(){
              $.blockUI({ message: '<h5>Please Wait...</h5>' });
            },
            statusCode  : {
              404: function() {
                $.unblockUI();
                generateToast('Warning', 'Page Not Found.', 'error');
              },
              500: function() {
                $.unblockUI();
                generateToast('Warning', 'Not connect with databasae.', 'error');
              }
            }
          })
          .done(function(result){
            console.log(result);

            if(result.code == 400){
              generateToast('Something Wrong', result.description, 'info');
              $.unblockUI();
            }else if(result.code == 200){
              //generateToast('Success', result.description, 'success');
              swal(result.description, { 
                icon: "success"
              });
              setTimeout(function(){
                console.log("PROCESS CREATE START");
                window.location.replace('<?=site_url('manage');?>');
                $.unblockUI();
              }, 2000);

            }else if(result.code == 500){
              generateToast('Warning', result.description, 'warning');
              $.unblockUI();
            }
          });

        } 
      });
    }
  });
  // END FORM VALIDATE RESET PASSWORD


  // FORM VALIDATE
  $('#form_create').validate({
    debug: true,
    rules:{
      c_username:{
        required:true
      },
      c_password:{
        required:true
      },
      c_full_name:{
        required:true
      }
    },
    submitHandler: function( form ) {
      $.ajax({
        url         : '<?=site_url('store_manage');?>',
        method      : 'POST',
        data        : $('#form_create').serialize(),
        dataType    : 'JSON',
        beforeSend  : function(){
          $.blockUI({ message: '<h5>Please Wait...</h5>' });
        },
        statusCode  : {
          404: function() {
            $.unblockUI();
            generateToast('Warning', 'Page Not Found.', 'error');
          },
          500: function() {
            $.unblockUI();
            generateToast('Warning', 'Not connect with databasae.', 'error');
          }
        }
      })
      .done(function(result){
        console.log(result);

        if(result.code == 400){
          generateToast('Something Wrong', result.description, 'info');
          $.unblockUI();
        }else if(result.code == 200){
          generateToast('Success', result.description, 'success');
          setTimeout(function(){
            console.log("PROCESS CREATE START");
            $.unblockUI();
            window.location.replace('<?=site_url('manage');?>');
          }, 2000);

        }else if(result.code == 500){
          generateToast('Warning', result.description, 'warning');
          $.unblockUI();
        }
      });
    }
  });
  // END FORM VALIDATE
});

////////////////////////////////////////////////////////////////////////////////// RED LINE

function modalReset(id)
{
  $('#modal_reset').modal();
  $('#modal_reset').on('shown.bs.modal', function () {
    $('#new_password').trigger('focus');
  })
  $('#id_admin').val(id);
}

function destroy(id)
{

  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this data!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
        url         : '<?=site_url('destroy_account');?>',
        method      : 'GET',
        data        : { id:id },
        dataType    : 'JSON',
        beforeSend  : function(){
          $.blockUI({ message: '<h5>Please Wait...</h5>' });
        },
        statusCode  : {
          404: function() {
            $.unblockUI();
            generateToast('Warning', 'Page Not Found.', 'error');
          },
          500: function() {
            $.unblockUI();
            generateToast('Warning', 'Not connect with databasae.', 'error');
          }
        }
      })
      .done(function(result){
        console.log(result);

        if(result.code == 400){
          generateToast('Something Wrong', result.description, 'info');
          $.unblockUI();
        }else if(result.code == 200){
          //generateToast('Success', result.description, 'success');
          swal(result.description, { 
            icon: "success"
          });
          setTimeout(function(){
            console.log("PROCESS DESTROY START");
            $.unblockUI();
            window.location.replace('<?=site_url('manage');?>');
          }, 2000);

        }else if(result.code == 500){
          generateToast('Warning', result.description, 'warning');
          $.unblockUI();
        }
      }); 

    } 
  });

}

function updateStatus(id)
{

  swal({
    title: "Are you sure?",
    text: "Do you want to change Account Status ?",
    icon: "warning",
    buttons: true,
    dangerMode: false,
  })
  .then((willDelete) => {
    if (willDelete) {
      $.ajax({
        url         : '<?=site_url('update_status_account');?>',
        method      : 'GET',
        data        : { id:id },
        dataType    : 'JSON',
        beforeSend  : function(){
          $.blockUI({ message: '<h5>Please Wait...</h5>' });
        },
        statusCode  : {
          404: function() {
            $.unblockUI();
            generateToast('Warning', 'Page Not Found.', 'error');
          },
          500: function() {
            $.unblockUI();
            generateToast('Warning', 'Not connect with databasae.', 'error');
          }
        }
      })
      .done(function(result){
        console.log(result);

        if(result.code == 400){
          generateToast('Something Wrong', result.description, 'info');
          $.unblockUI();
        }else if(result.code == 200){
          //generateToast('Success', result.description, 'success');
          swal(result.description, { 
            icon: "success"
          });
          setTimeout(function(){
            console.log("PROCESS DESTROY START");
            $.unblockUI();
            window.location.replace('<?=site_url('manage');?>');
          }, 2000);

        }else if(result.code == 500){
          generateToast('Warning', result.description, 'warning');
          $.unblockUI();
        }
      }); 

    } 
  });

}
</script>