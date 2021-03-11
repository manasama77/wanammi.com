<div class="container-fluid">

  <!-- Page Content -->
  <h2>F.A.Q</h2>
  <hr>
  <div class="card">
    <div class="card-header">Edit F.A.Q</div>
    <div class="card-body">
      <form id="form_create">
        <input type="hidden" class="form-control" id="id_faq" name="id_faq" value="<?=$id_faq;?>" readonly>
        <div class="form-group"> 
          <label for="question">Question</label>
          <input type="text" class="form-control" id="question" name="question" value="<?=$question;?>">
          <label id="question-error" class="error text-danger" for="question" style="display:none;"></label>
        </div>
        <div class="form-group">
          <label for="content">Answer</label>
          <input type="text" class="form-control" id="answer" name="answer" value="<?=$answer;?>">
          <label id="answer-error" class="error text-danger" for="answer" style="display:none;"></label>
        </div>
        <div class="form-group">
          <a href="<?=site_url('b_faq');?>" class="btn btn-dark mr-2">Cancel</a>
          <button type="submit" class="btn btn-primary">Update</button>
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
      question:{
        required:true
      },
      answer:{
        required:true
      }
    },
    submitHandler: function( form ) {
      $.ajax({
        url         : '<?=site_url('update_faq');?>',
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
            window.location.replace('<?=site_url('b_faq');?>');
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