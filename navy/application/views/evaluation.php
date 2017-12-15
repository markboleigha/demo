<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>

<div class="row ">

  <?php $this->load->view('sidebar'); ?>

  <!--Right content-->
  <div class="col-md-9 right-content">
    <?php //$this->load->view('test_view'); ?>
    <!--Portfolio Tab-->
    <section id="portfolio" class="bgWhite ofsInBottom">
      <!--Portfolio -->
      <div class="portfolio">
        <div class="main-title">
          <h1>Personnel Evaluation</h1>
            <div class="divider">
              <div class="zigzag large clearfix "  data-svg-drawing="yes" >
                <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                  <path d="M1.357,12.26 10.807,2.81 20.328,12.332 29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
                </svg>
              </div>
            </div>
        </div>

        <!--Content-->
        <div class="content">

          <!--Block content-->
          <div class="block-content">

            <!--Works-->
            <div class="works">

              <!--Row-->
              <div class="row">

                <div class="block-filter tCenter">
                  <ul id="category" class="filter nav nav-tabs">
                    <li><a href="#tab-1" data-toggle="tab" class="">officer particulars</a></li>
                    <li><a href="#tab-2" data-toggle="tab" class="">Evaluation Data</a></li>
                    <li><a href="#tab-3" data-toggle="tab" class="">Other Data 1</a></li>
                    <li><a href="#tab-4" data-toggle="tab" class="">Other Data 2</a></li>
                  </ul>



                </div>


              </div>
                <div class="row tab-content">
                  <?php if(empty($particulars) || isset($_GET['edit'])) { ?>
                  <!--TAB 1-->
                  <div class="tab-pane fade in active" id="tab-1">
                    <div class="row">
                      <div class="divider-m tCenter margTSSmall clearfix">
                        <div class="col-md-12">
                          <!-- progressbar -->
                          <ul id="progressbar">
                            <li class="active">Personal & Family Details</li>
                            <li>Appointments</li>
                            <li>Courses Attended</li>
                            <li>Awards & Decorations</li>
                          </ul>
                          <!-- fieldsets -->
                        </div>
                      </div>
                    </div>
                    <div class="row col-lg-12">
                      <?php
                      $attributes = array('id'=> 'msform', 'role' => 'form');
                      echo form_open('', $attributes); ?>

                      <!-- fieldsets -->
                      <fieldset id="step-0">

                        <div class="form-group">
                          <div class="col-md-6">
                            <label for="state_of_origin">State of Orgin:</label>
                            <select class="selectpicker form-control" data-live-search="true" name="state_of_origin" id="state_of_origin">

                            </select>
                          </div>

                          <div class="col-md-6">
                            <label for="lga">Local Govt:</label>
                            <select class="form-control" data-live-search="true" id="lga" name="lga">

                            </select>
                          </div>

                          <div class="clearfix"></div>
                        </div>

                        <div class="form-group">

                          <div class="col-md-6">
                            <label for="state_of_origin">Marital Status:</label>
                            <select class="form-control" id="marital_status" name="marital_status">
                              <option value="single">Single</option>
                              <option value="married">Married</option>
                              <option value="divorced">Divorced</option>
                              <option value="widowed">Widow(er)</option>
                            </select>
                          </div>
                          <div class="col-md-6">
                            <label for="religion" >Religion:</label>
      											<input type="text" class="form-control" name="religion" id="religion">
                          </div>

                          <div class="clearfix"></div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-6">
                            <label for="no_of_children">Number of Children</label>
                            <input type="text" class="form-control" name="no_of_children" id="no_of_children">

                          </div>
                          <div class="clearfix"></div>
                        </div>

                        <hr>

                        <div class="form-group">
                          <div class="col-md-12">
                            <h4>Next of Kin Details</h4>
                          </div>

                          <div class="col-md-6">
        											<label for="nok_name">Name of Next of kin:</label>
        											<input type="text" class="form-control" name="nok_name" id="nok_name">
                          </div>

                          <div class="col-md-6">
                            <label for="nok_relationship">Relationship:</label>
                            <input type="text" class="form-control" name="nok_relationship" id="nok_relationship">
                          </div>
                          <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-6">
                            <label for="nok_phone">Next of Kin Phone</label>
                            <input type="text" class="form-control" name="nok_phone" id="nok_phone">
                          </div>

                          <div class="col-md-6">
                            <label for="nok_email">Next of Kin Email</label>
                            <input type="text" class="form-control" name="nok_email" id="nok_email">
                          </div>
                          <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-6">
                            <label for="nok_address">Next of Kin Address</label>
                            <input type="text" class="form-control" name="nok_address" id="nok_address">
                          </div>
                          <div class="clearfix"></div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <div class="col-md-12">
                            <h4>Medical Information</h4>
                          </div>
                          <div class="col-md-6">
                            <label for ="medical_state">Medical State</label>
                            <input type="text" class="form-control" name="medical_state" id="medical_state">
                          </div>

                          <div class="col-md-6">
                            <label for="last_medical">Last Medical Examination</label>
                            <input type="text" class="form-control datepicker" name="medical_date" id="medical_date">

                          </div>
                          <div class="clearfix"></div>
                        </div>

                        <div class="form-group">

                          <div class="col-md-6">
                            <label for="doctor_name">Rank & Name of Doctor</label>
                            <input type="text" class="form-control" name="doctor_name" id="doctor_name">
                          </div>

                          <div class="col-md-6">
                            <label for="doctor_unit">Unit (of Doctor)</label>
                            <input type="text" class="form-control" name="doctor_unit" id="doctor_unit">
                          </div>
                          <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-6">
                            <label for="fitness_state">Fitness State</label>
                            <input type="text" class="form-control" name="fitness_state" id="fitness_state">
                          </div>
                          <div class="col-md-6">
                            <label for="fitness_date">Date</label>
                            <input type="text" class="form-control datepicker" name="fitness_date" id="fitness_date">
                          </div>
                          <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-6">
                            <label for="fitness_officer">Rank & Name of PT Officer</label>
                            <input type="text" class="form-control" name="fitness_officer" id="fitness_officer">
                          </div>

                          <div class="col-md-6">
                            <label for="fitness_unit">PT Officer Unit</label>
                            <input type="text" class="form-control" name="fitness_unit" id="fitness_unit">
                          </div>
                          <div class="clearfix"></div>

                        </div>
                        <hr>
                        <div class="col-md-12">
                          <button type="button" class="next but opc-3 pull-right" data-step="0">Next <i class="fa icon-right-circled"></i></button>
                        </div>
                        <div class="clearfix"></div>

                      </fieldset>


                      <fieldset id="step-1">




                      </fieldset>


                    </div>



                    <!-- <div class="form-group">
                      <label for="current_appointment">Current Appointment:</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" name="current_appointment" id="current_appointment">
                      </div>
                    </div> -->

                  </div>
                <?php }else{ ?>




              <?php  } ?>

                  <!--TAB 2-->
                  <div class="tab-pane fade" id="tab-2">
                      <h3><i class="fa hearseicon-"></i> Evaluation</h3>

              <div class="row">
                <div class="divider-m tCenter margTSSmall margBSmall clearfix">
                  <div class="col-md-12">
                    <div class="zigzag medium clearfix "  data-svg-drawing="yes" >
                      <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="45" height="5" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                      <path d="M1.357,12.26 10.807,2.81 20.328,12.332
                      29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>

              <!--Row-->
              <div class="row">

                <div class="tab-content">

                  <!--TAB 1-->
                  <div class="tab-pane fade in active" id="tab-1">
                      <h3><i class="fa hearseicon-"></i> Particulars</h3>
>>>>>>> cfa58e83e3f870868e0d2488f0f582f68b204999
                      <div class="col-md-12">
                          Lorem ipsum dolot
                      </div>
                      Lorem ipsum dolot

<<<<<<< HEAD

                  </div>

                </div>
=======
                  </div>
>>>>>>> cfa58e83e3f870868e0d2488f0f582f68b204999

                  <!--TAB 2-->
                  <div class="tab-pane fade" id="tab-2">
                      <h3><i class="fa hearseicon-"></i> Evaluation</h3>
                      <div class="col-md-12">
                          Lorem ipsum dolot
                      </div>
                      Lorem ipsum dolot


                  </div>

                </div>



              </div>

            </div>

          </div>
        </div>


      </div>


    </section>

  </div>


</div>

<script type="text/javascript" src="<?php echo base_url('assets/js/evaluation.js');?>">


</script>
