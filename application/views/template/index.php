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

  <title>SB Admin - Dashboard</title>

  <!-- FONT AWESOME -->
  <link href="<?=base_url('vendor/fortawesome/font-awesome/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <!--link href="<?=base_url('vendor/sbadmin2/css/all.min.css');?>" rel="stylesheet"-->

  <!-- Page level plugin CSS-->
  <link href="<?=base_url('vendor/sbadmin2/css/dataTables.bootstrap4.min.css');?>" rel="stylesheet">

  <!-- TOAST CSS -->
  <link href="<?=base_url('vendor/toast/dist/jquery.toast.min.css');?>" rel="stylesheet">

  <!-- SB ADMIN2 CSS -->
  <link href="<?=base_url('vendor/sbadmin2/css/sb-admin.css');?>" rel="stylesheet">

  <!-- PACE CSS -->
  <link href="<?=base_url('vendor/pace/themes/blue/pace-theme-minimal.css');?>" rel="stylesheet">

  <!-- FANCYBOX CSS -->
  <link href="<?=base_url('vendor/fancybox/jquery.fancybox.css');?>" rel="stylesheet">

  <!-- SELECT2 CSS -->
  <link href="<?=base_url('vendor/select2/select2.min.css');?>" rel="stylesheet">

  <!-- BOOTSTRAP SUMMERNOTE CSS -->
  <link href="<?=base_url('vendor/bootstrap-summernote/summernote.css');?>" rel="stylesheet">
  

  <!-- Core JavaScript-->
  <script src="<?=base_url('vendor/components/jquery/jquery.min.js');?>"></script>
  <script src="<?=base_url('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js');?>"></script>

</head>

<body id="page-top">
  <input type="hidden" id="first" value="<?=$this->session->userdata('first');?>">
  <input type="hidden" id="first" value="<?=$this->session->userdata('username');?>">
  <input type="hidden" id="first" value="<?=$this->session->userdata('full_name');?>">

  <?php $this->load->view('template/header'); ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('template/sidebar'); ?>

    <div id="content-wrapper">

      <div class="container-fluid">

      <!-- CONTENT -->
      <?php $this->load->view('backend/'.$content); ?>

      <!-- Sticky Footer -->
      <?php $this->load->view('template/footer'); ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Addition plugin JavaScript-->
  <script src="<?=base_url('vendor/components/jquery-easing/jquery.easing.min.js');?>"></script>
  <script src="<?=base_url('vendor/fortawesome/font-awesome/js/all.min.js');?>"></script>
  <script src="<?=base_url('vendor/jqueryvalidation/jquery.validate.min.js');?>"></script>
  <script src="<?=base_url('vendor/jqueryvalidation/additional-methods.min.js');?>"></script>
  <script src="<?=base_url('vendor/blockui/jquery.blockUI.js');?>"></script>
  <script src="<?=base_url('vendor/toast/dist/jquery.toast.min.js');?>"></script>
  <script src="<?=base_url('vendor/pace/pace.min.js');?>"></script>
  <script src="<?=base_url('vendor/sweetalert/sweetalert.min.js');?>"></script>
  <script src="<?=base_url('vendor/fancybox/jquery.fancybox.pack.js');?>"></script>
  <script src="<?=base_url('vendor/fancybox/jquery.mousewheel.pack.js');?>"></script>
  <script src="<?=base_url('vendor/select2/select2.full.min.js');?>"></script>
  <script src="<?=base_url('vendor/bootstrap-summernote/summernote.min.js');?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?=base_url('vendor/sbadmin2/js/jquery.dataTables.js');?>"></script>
  <script src="<?=base_url('vendor/sbadmin2/js/dataTables.bootstrap4.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url('vendor/sbadmin2/js/sb-admin.min.js');?>"></script>

</body>

</html>

<script>
$(document).ready(function(){
  var first     = $('#first').val();
  /*var username  = $('#username').val();
  var full_name = $('#full_name').val();*/

  if(first == "true"){
    generateToast('Success', 'Login Success.', 'success');  
  }

  /*if( username == "" || full_name == "" ){
    window.location.replace('<?=site_url('logout');?>');
  }*/
});

////////////////////////////////////////////////////////////////////////////////// RED LINE

function generateToast(heading, message, color){
  $.toast({
    text: message,
    heading: heading,
    icon: color,
    showHideTransition: 'slide',
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