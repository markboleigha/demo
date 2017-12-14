<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="row ">

  <div class="col-md-8 col-md-offset-2 right-content">

    <!--Contact Tab-->
    <section class="bgWhite">

      <!--Contact -->
      <div class="contact">

        <div class="main-title">
          <h1>Personnel Details</h1>
          <div class="divider">
            <div class="zigzag large clearfix "  data-svg-drawing="yes" >
              <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
              <path d="M1.357,12.26 10.807,2.81 20.328,12.332
              29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
              </svg>
            </div>
          </div>
        </div>
        <!--End main title-->




        <!--Content-->
        <div class="content">

          <!--Block content-->
          <div class="block-content ">

            <!--Contact-->
            <div class="block-contact margBSSmall">

              <!--Row-->
              <div class="row">

                <div class="col-md-12">

                  <?php $attributes = array("class" => "contact-form", "id" => "regForm");
                  echo form_open('register', $attributes) ?>

                  <?php echo $this->session->flashdata('reg_err');?>
                    <!--Input columns-->
                    <div class="input-columns clearfix">

                      <div class="column1">
                        <div class="column-inner">
                          <input type="text" placeholder="First Name" value="<?php echo set_value('first_name') ?>" id="first_name" name="first_name">
                          <?php echo form_error('first_name'); ?>
                        </div>
                      </div>

                      <!--Column-->
                      <div class="column2">
                        <div class="column-inner">
                          <input type="text" placeholder="Last Name" value="<?php echo set_value('last_name') ?>" id="last_name" name="last_name">
                          <?php echo form_error('last_name'); ?>
                        </div>
                      </div>
                      <!--End column-->

                    </div>

                    <!--Input columns-->
                    <div class="input-columns clearfix">

                      <div class="column1">
                        <div class="column-inner">
                          <input type="text" placeholder="Other Names" value="<?php echo set_value('other_name');?>" id="other_name" name="other_name">
                          <?php echo form_error('other_name'); ?>
                        </div>
                      </div>

                      <!--Column-->
                      <div class="column2">
                        <div class="column-inner">
                          <input type="text" placeholder="Email" value="<?php echo set_value('email') ?>" id="email" name="email">
                          <?php echo form_error('email'); ?>
                        </div>
                      </div>
                      <!--End column-->

                    </div>

                    <div class="input-columns clearfix">

                      <div class="column1">
                        <div class="column-inner">
                          <input type="password" placeholder="Password" value="<?php echo set_value('password') ?>" id="password" name="password">
                          <?php echo form_error('password'); ?>
                        </div>
                      </div>

                      <!--Column-->
                      <div class="column2">
                        <div class="column-inner">
                          <input type="password" placeholder="Confirm Password" value="<?php echo set_value('password2') ?>" id="password2" name="password2">
                          <?php echo form_error('password2'); ?>
                        </div>
                      </div>
                      <!--End column-->

                    </div>


                    <!--Input columns-->
                    <div class="input-columns clearfix">

                      <div class="column1">
                        <div class="column-inner">
                          <input type="text" placeholder="Phone" value="<?php echo set_value('phone') ?>" id="phone" name="phone">
                          <?php echo form_error('phone'); ?>
                        </div>
                      </div>

                      <!--Column-->
                      <div class="column2">
                        <div class="column-inner">
                          <select class="form-control selectpicker" id="sex" name="sex">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                          <?php echo form_error('sex'); ?>
                        </div>
                      </div>
                      <!--End column-->

                    </div>

                    <!--Input columns-->
                    <div class="input-columns clearfix">

                      <div class="column1">
                        <div class="column-inner">
                          <input type="text" placeholder="Service No" value="<?php echo set_value('service_no') ?>" id="service_no" name="service_no">
                          <?php echo form_error('service_no'); ?>
                        </div>
                      </div>

                      <!--Column-->
                      <div class="column2">
                        <div class="column-inner">
                          <input class="datepicker" type="text" placeholder="Date of birth" value="<?php echo set_value('dob');?>" id="dob" name="dob">
                          <?php echo form_error('other_name'); ?>
                        </div>
                      </div>
                      <!--End column-->

                    </div>

                    <div class="input-columns clearfix">

                      <div class="column1">
                        <div class="column-inner">
                          <input type="text" placeholder="Rank" value="<?php echo set_value('rank') ?>" id="rank" name="rank">
                          <?php echo form_error('rank'); ?>
                        </div>
                      </div>

                      <!--Column-->
                      <div class="column2">
                        <div class="column-inner">
                          <input type="text" placeholder="Seniority on current rank" value="<?php echo set_value('seniority');?>" id="seniority" name="seniority">
                          <?php echo form_error('seniority'); ?>
                        </div>
                      </div>
                      <!--End column-->

                    </div>

                    <div class="input-columns clearfix">

                      <div class="column1">
                        <div class="column-inner">
                          <input class="datepicker" type="text" placeholder="Enlistment Date" value="<?php echo set_value('enlistment_date');?>" id="enlistment_date" name="enlistment_date">
                          <?php echo form_error('enlistment_date'); ?>
                        </div>
                      </div>

                      <!--Column-->
                      <div class="column2">
                        <div class="column-inner">
                          <input class="datepicker" type="text" placeholder="Commission Date" value="<?php echo set_value('commission_date')?>" id="commission_date" name="commission_date">
                          <?php echo form_error('commission_date'); ?>
                        </div>
                      </div>
                      <!--End column-->

                    </div>

                    <div class="input-columns clearfix">

                      <div class="column1">
                        <div class="column-inner">
                          <input type="text" placeholder="Commission Type" value="<?php echo set_value('commission_type')?>" id="commision_type" name="commission_type">
                          <?php echo form_error('commision_type'); ?>
                        </div>
                      </div>

                      <!--Column-->
                      <div class="column2">
                        <div class="column-inner">
                          <input class="datepicker" type="text" placeholder="Last Promotion" value="<?php echo set_value('last_promotion');?>" id="last_promotion" name="last_promotion">
                          <?php echo form_error('last_promotion'); ?>
                        </div>
                      </div>
                      <!--End column-->

                    </div>

                    <div class="input-columns clearfix">

                      <div class="column1">
                        <div class="column-inner">
                          <input type="text" placeholder="ROD" value="<?php echo set_value('rod') ?>" id="rod" name="rod">
                          <?php echo form_error('rod'); ?>
                        </div>
                      </div>

                      <!--Column-->
                      <div class="column2">
                        <div class="column-inner">
                          <input type="text" placeholder="Command" value="<?php echo set_value('command');?>" id="command" name="command">
                          <?php echo form_error('command'); ?>
                        </div>
                      </div>
                      <!--End column-->

                    </div>

                    <div class="input-columns clearfix">

                      <input type="text" placeholder="Unit" value="<?php echo set_value('unit');?>" id="unit" name="unit">
                      <?php echo form_error('unit'); ?>
                    </div>


                    <div class="form-group">
                      <input type="submit" class="but opc-2 submit" value="SUBMIT">
                    </div>
                  <?php echo form_close() ?>


                </div>


              </div>
              <!--End row-->

            </div>
          </div>


        </div>
      </div>
      <!--Content-->
    </section>
    <!--End contact tab-->
  </div>
</div>

<script type="text/javascript">
  $(function(){
    $("#regForm").validate({
      rules: {
        last_name: {
          required: true
        },
        first_name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          minlength: 6
        },
        password2: {
          required: true,
          equalTo: password
        },
        phone: {
          required: true,
          maxlength: 11,
          minlength: 11
        },
        sex: {
          required: true
        },
        service_no: {
          required: true
        },
        dob: {
          required: true,
          date: true
        },
        rank: {
          required: true
        },
        seniority: {
          required: true
        },
        enlistment_date: {
          required: true,
          date: true
        },
        commision_date: {
          required: true
        },
        commission_type: {
          required: true
        },
        last_promotion: {
          required: true,
          date: true
        },
        rod: {
          required: true
        },
        command: {
          required: true
        },
        unit: {
          required: true
        }

      },
      messages: {
        password2: {
          equalTo: 'Password do not match'
        }
      },
      submitHandler: function(form){
        return true;
      }
    });
  });
  // remote: {
  //   url: "request/check_email",
  //   data: {
  //     type : 'users'
  //   },
  //   type: "get"
  // }
</script>
