<!-- Page Content -->
<h2>Profile Page</h2>
<hr>
<div class="card mb-3">
  <div class="card-header">Update Profile Page <?=ANIMAL[2];?></div>
  <div class="card-body">
    <form id="form_profile" enctype="multipart/form-data">
      <div class="form-group"> 
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?=$title;?>">
        <label id="title-error" class="error text-danger" for="title" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" rows="8"><?=$isi;?></textarea>
        <label id="content-error" class="error text-danger" for="content" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="path">Logo</label>
        <div class="alert alert-info" role="alert">
          Recommended Width <strong>400 px</strong>
        </div>
        <input type="file" class="form-control" id="path" name="path">
        <label id="path-error" class="error text-danger" for="path" style="display:none;"></label>
        <br>
        <img src="<?=base_url('assets/img/profile/'.$path);?>" alt="thumbnail-image" width="200px" class="img-thumbnail">
      </div>
      <div class="form-group">
        <label for="submit" class="sr-only">Update</label>
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $("#path").change(function() {
    readURL(this);
  });

  // FORM VALIDATE
  $('#form_profile').validate({
    debug: true,
    rules:{
      title:{
        required:true
      },
      content:{
        required:true
      },
      picture:{
        extension: "gif|jpg|png"
      }
    },
    submitHandler: function( form ) {
      $.ajax({
        url         : '<?=site_url('update_profile');?>',
        method      : 'POST',
        data        : new FormData($('#form_profile')[0]),
        processData : false,
        contentType : false,
        cache       : false,
        dataType    : 'JSON',
        beforeSend  : function(){
          //$.blockUI({ message: '<h5>Please Wait...</h5>' });
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
          //$.unblockUI();
        }else if(result.code == 200){
          generateToast('Success', result.description, 'success');
          setTimeout(function(){
            console.log("PROCESS UPDATE START");
            $.unblockUI();
            window.location.replace('<?=site_url('b_profile');?>');
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


function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.img-thumbnail').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}
</script>