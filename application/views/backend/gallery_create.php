<div class="container-fluid">

  <!-- Page Content -->
  <h2>Gallery</h2>
  <hr>
  <div class="card">
    <div class="card-header">Upload New Picture</div>
    <div class="card-body">
      <form id="form_create">
        <div class="alert alert-info" role="alert">
          Recommended size <strong>1366 x 768 px</strong>
        </div>
        <div class="form-group"> 
          <label for="path">Picture</label>
          <input type="file" class="form-control" id="path" name="path">
          <label id="path-error" class="error text-danger" for="path" style="display:none;"></label>
          <div class="progress">
            <div id="bar" class="progress-bar progress-bar-striped progress-bar-animated" style="width:0%;" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="form-group">
          <a href="<?=site_url('b_gallery');?>" class="btn btn-dark mr-2">Cancel</a>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<script type="text/javascript">
$(document).ready(function(){
  // FORM VALIDATE
  $('#form_create').validate({
    debug: true,
    rules:{
      path:{
        required:true,
        extension: "gif|jpg|png"
      }
    },
    submitHandler: function( form ) {
      $.ajax({
        url         : '<?=site_url('store_gallery');?>',
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
            console.log("PROCESS CREATE START");
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
  // END FORM VALIDATE
});
</script>