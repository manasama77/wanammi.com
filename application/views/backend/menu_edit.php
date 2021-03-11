<div class="container-fluid">

  <!-- Page Content -->
  <h2>Menu</h2>
  <hr>
  <div class="card">
    <div class="card-header">Edit Menu</div>
    <div class="card-body">
      <form id="form_create">
        <div class="alert alert-info" role="alert">
          Recommended size <strong>1366 x 768 px</strong>
        </div>
        <input type="hidden" class="form-control" id="id_menu" name="id_menu" value="<?=$id_menu;?>" readonly>
        <div class="form-group"> 
          <label for="picture">Picture</label>
          <input type="file" class="form-control" id="picture" name="picture">
          <label id="picture-error" class="error text-danger" for="picture" style="display:none;"></label>
          <div class="progress">
            <div id="bar" class="progress-bar progress-bar-striped progress-bar-animated" style="width:0%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <img src="<?=base_url('assets/img/menu/'.$picture);?>" width="150px" alt="picture" class="img-thumbnail">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" name="description"><?=$description;?></textarea>
          <label id="description-error" class="error text-danger" for="description" style="display:none;"></label>
        </div>
        <div class="form-group">
          <a href="<?=site_url('b_menu');?>" class="btn btn-dark mr-2">Cancel</a>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<script type="text/javascript">
$(document).ready(function(){

  $('#description').summernote({
    height: 200,
  });

  // FORM VALIDATE
  $('#form_create').validate({
    debug: true,
    rules:{
      picture:{
        required: false,
        extension: "gif|jpg|png"
      },
      description:{
        required:true
      }
    },
    submitHandler: function( form ) {
      $.ajax({
        url         : '<?=site_url('update_menu');?>',
        method      : 'POST',
        data        : new FormData($('#form_create')[0]),
        processData : false,
        contentType : false,
        dataType    : 'JSON',
        beforeSend  : function(){
          $.blockUI({ message: '<h5>Please Wait...</h5>' });
          var percentVal = '0%';
          $('#bar').width(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
          var percentVal = percentComplete + '%';
          $('#bar').width(percentVal);
        },
        complete: function(){
          var percentVal = '100%';
          $('#bar').width(percentVal);
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
            console.log("PROCESS UPDATE START");
            $.unblockUI();
            window.location.replace('<?=site_url('b_menu');?>');
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
</script>