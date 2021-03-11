<!-- Page Content -->
<h2>Contact Page</h2>
<hr>
<div class="card mb-3">
  <div class="card-header">Update Contact</div>
  <div class="card-body">
    <form id="form_update">
      <input type="hidden" class="form-control" id="db_id_province" name="db_id_province" value="<?=$id_province;?>" readonly>
      <input type="hidden" class="form-control" id="db_id_city" name="db_id_city" value="<?=$id_city;?>" readonly>
      <div class="form-group"> 
        <label for="company_name">Company Name</label>
        <input type="text" class="form-control" id="company_name" name="company_name" value="<?=$company_name;?>">
        <label id="company_name-error" class="error text-danger" for="company_name" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?=$phone;?>">
        <label id="phone-error" class="error text-danger" for="phone" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="fax">Fax</label>
        <input type="text" class="form-control" id="fax" name="fax" value="<?=$fax;?>">
        <label id="fax-error" class="error text-danger" for="fax" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="whatsapp">Whatsapp</label>
        <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="<?=$whatsapp;?>">
        <label id="whatsapp-error" class="error text-danger" for="whatsapp" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="facebook">Facebook</label>
        <input type="text" class="form-control" id="facebook" name="facebook" value="<?=$facebook;?>">
        <label id="facebook-error" class="error text-danger" for="facebook" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="twitter">Twitter</label>
        <input type="text" class="form-control" id="twitter" name="twitter" value="<?=$twitter;?>">
        <label id="twitter-error" class="error text-danger" for="twitter" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="google_plus">Google Plus</label>
        <input type="text" class="form-control" id="google_plus" name="google_plus" value="<?=$google_plus;?>">
        <label id="google_plus-error" class="error text-danger" for="google_plus" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?=$email;?>">
        <label id="email-error" class="error text-danger" for="email" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="<?=$address;?>">
        <label id="address-error" class="error text-danger" for="address" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="postal_code">Postal Code</label>
        <input type="number" class="form-control" id="postal_code" name="postal_code" value="<?=$postal_code;?>">
        <label id="postal_code-error" class="error text-danger" for="postal_code" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="id_province">Province</label>
        <select class="form-control" id="id_province" name="id_province" style="width:100%;">
          <option value=""></option>
        <?php
        foreach ($arr_province as $key) {
          echo '<option value="'.$key->id_province.'">'.$key->province.'</option>';
        }
        ?>
        </select>
        <label id="id_province-error" class="error text-danger" for="id_province" style="display:none;"></label>
      </div>
      <div class="form-group">
        <label for="id_city">City</label>
        <select class="form-control" id="id_city" name="id_city" style="width:100%;">
          <option value=""></option>
        </select>
        <label id="id_city-error" class="error text-danger" for="id_city" style="display:none;"></label>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('#id_province').select2({
    theme: "classic",
    placeholder: "Select Province"
  });
  $('#id_city').select2({
    theme: "classic",
    placeholder: "Select City"
  });

  // TRIGGER
  $('#id_province').on('change', function(){
    getListCity();
  });
  // END TRIGGER
  
  // INITIATE
  var db_id_province = $('#db_id_province').val();
  $('#id_province').val(db_id_province).trigger('change');

  setTimeout(function(){
    var db_id_city = $('#db_id_city').val();
    $('#id_city').val(db_id_city).trigger('change');
  }, 500);
  
  // END INITIATE
  
  // FORM VALIDATE
  $('#form_update').validate({
    debug: true,
    rules:{
      company_name:{
        required:true
      },
      phone:{
        required:true
      },
      email:{
        required:true,
        email:true
      },
      address:{
        required:true
      },
      id_province:{
        required:true
      },
      id_city:{
        required:true
      },
      postal_code:{
        required:true,
        min:10000,
        max:99999
      }
    },
    submitHandler: function( form ) {
      $.ajax({
        url         : '<?=site_url('update_contact');?>',
        method      : 'POST',
        data        : $('#form_update').serialize(),
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
            console.log("PROCESS UPDATE START");
            $.unblockUI();
            window.location.replace('<?=site_url('b_contact');?>');
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

function getListCity()
{
  var id_province = $('#id_province').val();
  if(id_province == null || id_province == ""){
    $('#id_city').html('<option value=""></option>');
  }else{
    $.ajax({
      url         : '<?=site_url('get_list_city');?>',
      method      : 'GET',
      data        : { id_province:id_province },
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
        
        $('#id_city').html('<option value=""></option>');
        $.each(result.data, function(i,k){
          $('#id_city').append('<option value="'+k.id_city+'">'+k.type+' '+k.city_name+'</option>');
        });

        $.unblockUI();

      }else if(result.code == 500){
        generateToast('Warning', result.description, 'warning');
        $.unblockUI();
      }
    });
  }
  
}

</script>