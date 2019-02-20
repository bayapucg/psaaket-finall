<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  <body style="background:#f5f5f5">
    <style>
    .razorpay-payment-button{
      display:none;
    }
    </style>
    <div class="columns-container">
      <div class="container" id="columns">
        <div class="row">
          <div class="modal-dialog">
            <div class="modal-content box-shadow-site" style="position:absolute;top:50px;width:500px;left:-200px;background:#fff">
              <div class="modal-body">
                <div class="row">
                  <div class="container">
				  <table class="table table-bordered">
    <thead>
      <tr class="text-center">
        <th colspan="2">Confirm Details</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Name</td>
        <td><?php echo $user_data['name'];?></td>
      </tr>
	  <tr>
        <td>Email</td>
      <td><?php echo $user_data['email'];?></td>
      </tr>
	  <tr>
        <td>Phone Number</td>
      <td><?php echo $user_data['phone'];?></td>
      </tr>
	  <tr>
        <td>Roll Number</td>
          <td><?php echo $user_data['roll_number'];?></td>
      </tr>
	  <tr>
        <td>College Name</td>
      <td><?php echo $user_data['college_name'];?></td>
      </tr>


    </tbody>
  </table>
                    <!-- <div id="online_amt_1" style="padding-left:50px;">
                      <form action="<?php echo base_url('seminars/success'); ?>" method="post" onSubmit="return checkvalidation_payment(this.form);">
                       <input type="radio" id="radio1"  name="payment" onclick="payment_type(this.value);" value="2"><span > Cash On Delivery</span>
                        <br>
                        <br>
                        <input type="radio" id="radio2" name="payment" onclick="payment_type(this.value);"  value="3"><span > Swipe on Delivery</span>
                        <br>
                        <br>
                        <input type="text" id="radio3" name="payment"  hidden value="1">
                        <span> Online Payment</span>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success" name="pay_submit">Confirm Payment</button>
                      </form>
                    </div> -->
                    <div id="online_amt" >
                      <form action="<?php echo base_url('seminars/success'); ?>" method="post" onSubmit="return checkvalidation(this.form);">
                        <div class="" >
                          <span id="paymenterrormsg" style="color:red"></span>
                         <!-- <input type="radio" id="radio11"  name="payment" onclick="payment_type(this.value);" value="2"><span > Cash On Delivery</span>
                          <br>
                          <br>
                          <input type="radio" id="radio22" name="payment" onclick="payment_type(this.value);"  value="3"><span > Swipe on Delivery</span>
                          <br> -->
                          <br>
                          <input   type="radio" id="radio33" name="payment"  value="1"  checked hidden>
                        <input type='text'  value=<?php echo $user_data['email'];?> name='email' hidden >
                          <!-- <span> Online Payment</span> -->
                          <br>
                          <br>
                        </div>
                        <script
                        src="https://checkout.razorpay.com/v1/checkout.js"
                        data-key="<?php echo $details['key']?>"
                        data-amount="<?php echo $details['amount']?>"
                        data-currency="INR"
                        data-name="<?php echo $details['name']?>"
                        data-image="<?php echo $details['image']?>"
                        data-description="<?php echo $details['description']?>"
                        data-prefill.name="<?php echo $details['prefill']['name']?>"
                        data-prefill.email="<?php echo $details['prefill']['email']?>"
                        data-prefill.contact="<?php echo $details['prefill']['contact']?>"
                        data-notes.shopping_order_id="3456"
                        data-order_id="<?php echo $details['order_id']?>"
                        <?php if ($details['display_currency'] !== 'INR') { ?> data-display_amount="<?php echo $details['amount']?>" <?php } ?>
                        <?php if ($details['display_currency'] !== 'INR') { ?> data-display_currency="<?php echo $details['display_currency']?>" <?php } ?>
                        >
                        </script>
                        <button type="submit" class="btn btn-success" name="pay_submit">Confirm Payment</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- <script>
    function payment_type(ids){
      $('#paymenterrormsg').html('');
      if(ids==1){
        $('#online_amt').show();
        $('#online_amt_1').hide();
        document.getElementById("radio33").checked = true;
      }else{
        $('#online_amt').hide();
        $('#online_amt_1').show();
        if(ids==1){
          document.getElementById("radio1").checked = true;
          document.getElementById("radio3").checked = false;
        }else if(ids==3){
          document.getElementById("radio2").checked = true;
          document.getElementById("radio3").checked = false;
        }else{
          document.getElementById("radio3").checked = false;
        }
      }
    }
    function checkvalidation(form){
      if ($("#radio11").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }if ($("#radio22").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }if ($("#radio33").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }if ($("#radio1").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }else if ($("#radio2").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }else if ($("#radio3").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }else{
        $('#paymenterrormsg').html('Please select a payment mode method');
        return false;
      }
    }
    function checkvalidation_payment(form){

      if ($("#radio1").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }if ($("#radio11").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }else if ($("#radio2").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }else if ($("#radio22").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }else if ($("#radio3").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }else if ($("#radio33").prop("checked")) {
        $('#paymenterrormsg').html('');
        return true;
      }else{
        $('#paymenterrormsg').html('Please select a payment mode method');
        return false;
      }
    }
    </script> -->
  </body>
  </html>
  </body>
</html>
