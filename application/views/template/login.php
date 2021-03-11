<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Company Profile">
  <meta name="author" content="Adam PM">
  <link rel="apple-touch-icon" href="<?=base_url('apple_touch_web_icon.png');?>">
  <link rel="shortcut icon" type="image/ico" href="<?=base_url('webicon.png');?>">

  <title>Login Area - <?=NAMA_WEB;?></title>

  <!-- FONT AWESOME -->
  <link href="<?=base_url('vendor/fortawesome/font-awesome/css/all.min.css');?>" rel="stylesheet" type="text/css">

  <!-- SB ADMIN2 CSS -->
  <link href="<?=base_url('vendor/sbadmin2/css/sb-admin.css');?>" rel="stylesheet">

  <!-- TOAST CSS -->
  <link href="<?=base_url('vendor/toast/dist/jquery.toast.min.css');?>" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin Area</div>
      <div class="card-body">
        <div class="card-title text-center">
          <a href="<?=site_url();?>">
            <img src="<?=base_url('assets/img/apmwebdev_logo.png');?>">
          </a>
        </div>
        <form id="form_login">
          <input type="hidden" class="form-control" id="logout" value="<?=$this->session->flashdata('logout');?>">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="username" name="username" class="form-control" placeholder="Username" autofocus="autofocus" data-error="username_error">
              <label for="username">Username</label>
            </div>
            <label id="username-error" class="error text-danger" for="username" style="display:none;"></label>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="new-password" data-error="#password_error">
              <label for="inputPassword">Password</label>
            </div>
            <label id="password-error" class="error text-danger" for="password" style="display:none;"></label>
          </div>
          <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Login</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('vendor/components/jquery/jquery.min.js');?>"></script>
  <script src="<?=base_url('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('vendor/components/jquery-easing/jquery.easing.min.js');?>"></script>
  <script src="<?=base_url('vendor/fortawesome/font-awesome/js/all.min.js');?>"></script>
  <script src="<?=base_url('vendor/jqueryvalidation/jquery.validate.min.js');?>"></script>
  <script src="<?=base_url('vendor/jqueryvalidation/additional-methods.min.js');?>"></script>
  <script src="<?=base_url('vendor/blockui/jquery.blockUI.js');?>"></script>
  <script src="<?=base_url('vendor/toast/dist/jquery.toast.min.js');?>"></script>

</body>

</html>

<script>
$(document).ready(function(){
  var logout = $('#logout').val()

  if(logout == "true"){
    generateToast('Success', 'Logout Success.', 'success');  
  }
  
  // FORM VALIDATE
  $('#form_login').validate({
    debug: true,
    rules:{
      username:{
        required:true
      },
      password:{
        required:true
      }
    },
    submitHandler: function( form ) {
      $.ajax({
        url         : '<?=site_url('check_login');?>',
        method      : 'POST',
        data        : $('#form_login').serialize(),
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
            console.log("PROCESS SIGNIN START");
            $.unblockUI();
            window.location.replace('<?=site_url('admin_dashboard');?>');
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

function generateToast(heading, message, color){
  $.toast({
    text: message,
    heading: heading,
    icon: color,
    showHideTransition: 'fade',
    allowToastClose: true,
    hideAfter: 10000,
    stack: 5,
    position: 'top-left',
    textAlign: 'left',
    loader: true,
    loaderBg: '#9EC600',    
  });
}
</script>
