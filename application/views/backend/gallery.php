<!-- Page Content -->
<h2>Gallery</h2>
<hr>
<div class="card mb-3">
  <div class="card-header">
    <div class="row">
      <div class="col-md-9 col-xs-12">
        <label class="label-title font-weight-bold">List Gallery</label>
      </div>
      <div class="col-md-3 col-xs-12 text-right">
        <a href="<?=site_url('create_gallery');?>" class="btn btn-primary btn-block">
          <i class="fas fa-plus"></i> Upload New Picture
        </a>
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
            <th>Picture</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($arr as $key) {
            echo '<tr>';
            echo '<td class="text-center">';
            //echo '<a href="'.site_url($key->id_gallery).'" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</a> ';
            echo '<button type="button" onClick="destroy(\''.$key->id_gallery.'\', \''.$key->path.'\');" class="btn btn-danger btn-sm"><small><i class="fas fa-trash"></i> Delete</small></a> ';
            echo '</td>';
            echo '<td class="text-center">';
            echo $key->id_gallery;
            echo '</td>';
            echo '<td>';
            echo '<a rel="gallery" class="fancybox" href="'.base_url('assets/img/gallery/'.$key->path).'">';
            echo '<img src="'.base_url('assets/img/gallery/'.$key->path).'" width="150px" alt="picture">';
            echo '</a>';
            echo '</td>';
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $(".fancybox").fancybox({
    beforeShow: function () {
      /* Disable right click */
      $.fancybox.wrap.bind("contextmenu", function (e) {
        return false; 
      });
    }
  });


  $('#table').dataTable({
    order: [[1, "desc"]],
    dom: 'tip',
    columnDefs: [
      { 
        searchable: false, 
        orderable: false, 
        targets: [0,2]
      }
    ]
  });
});

////////////////////////////////////////////////////////////////////////////////// RED LINE

function destroy(id, path)
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
        url         : '<?=site_url('destroy_gallery');?>',
        method      : 'POST',
        data        : { id:id, path:path },
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
            window.location.replace('<?=site_url('b_gallery');?>');
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