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
                            <li class="active">Personal Details</li>
                            <li>Appointments</li>
                            <li>Courses Attended</li>
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
                      <fieldset>

                        <div class="form-group">
                          <div class="col-md-6">
                            <label for="state_of_origin">State of Orgin:</label>
                            <select class="selectpicker form-control" data-live-search="true" name="state_of_origin" id="state_of_origin">

                            </select>
                          </div>
                          <div class="col-md-6">
                            <label for="state_of_origin">Marital Status:</label>
                            <select class="form-control" id="marital_status" name="marital_status">
                              <option value="single">Single</option>
                              <option value="married">Married</option>
                              <option value="divorced">Divorced</option>
                              <option value="widowed">Widow(er)</option>
                            </select>
                          </div>

                        </div>

                        <div class="form-group">
                          <div class="col-md-6">
        											<label class="control-label col-md-2">Local Govt:</label>
        											<div class="col-md-8">
        												<input type="text" class="form-control" name="lga" id="lga">
        											</div>
                          </div>
                          <div class="col-md-6">


                          </div>

                        </div>

                          <!-- <input type="button" name="next" class="next action-button" value="Next"/> -->
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

<script type="text/javascript">
$(function(){





  $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
      localStorage.setItem('activeTab', $(e.target).attr('href'));
  });
  $('a[data-toggle="tab"]').click(function(){
    $('a[data-toggle="tab"]').removeClass('active');
    $(this).addClass('active');
    $(this).focus();

  });

  var activeTab = localStorage.getItem('activeTab');
  if(activeTab){
      $('#category a[href="' + activeTab + '"]').tab('show');
      $('#category a[href="' + activeTab + '"]').addClass('active');
  }



  //jQuery time
  var current_fs, next_fs, previous_fs; //fieldsets
  var left, opacity, scale; //fieldset properties which we will animate
  var animating; //flag to prevent quick multi-click glitches

  $(".next").click(function(){
  	if(animating) return false;
  	animating = true;

  	current_fs = $(this).parent();
  	next_fs = $(this).parent().next();

  	//activate next step on progressbar using the index of next_fs
  	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  	//show the next fieldset
  	next_fs.show();
  	//hide the current fieldset with style
  	current_fs.animate({opacity: 0}, {
  		step: function(now, mx) {
  			//as the opacity of current_fs reduces to 0 - stored in "now"
  			//1. scale current_fs down to 80%
  			scale = 1 - (1 - now) * 0.2;
  			//2. bring next_fs from the right(50%)
  			left = (now * 50)+"%";
  			//3. increase opacity of next_fs to 1 as it moves in
  			opacity = 1 - now;
  			current_fs.css({
          'transform': 'scale('+scale+')',
          'position': 'absolute'
        });
  			next_fs.css({'left': left, 'opacity': opacity});
  		},
  		duration: 800,
  		complete: function(){
  			current_fs.hide();
  			animating = false;
  		},
  		//this comes from the custom easing plugin
  		easing: 'easeInOutBack'
  	});
  });

  $(".previous").click(function(){
  	if(animating) return false;
  	animating = true;

  	current_fs = $(this).parent();
  	previous_fs = $(this).parent().prev();

  	//de-activate current step on progressbar
  	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

  	//show the previous fieldset
  	previous_fs.show();
  	//hide the current fieldset with style
  	current_fs.animate({opacity: 0}, {
  		step: function(now, mx) {
  			//as the opacity of current_fs reduces to 0 - stored in "now"
  			//1. scale previous_fs from 80% to 100%
  			scale = 0.8 + (1 - now) * 0.2;
  			//2. take current_fs to the right(50%) - from 0%
  			left = ((1-now) * 50)+"%";
  			//3. increase opacity of previous_fs to 1 as it moves in
  			opacity = 1 - now;
  			current_fs.css({'left': left});
  			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
  		},
  		duration: 800,
  		complete: function(){
  			current_fs.hide();
  			animating = false;
  		},
  		//this comes from the custom easing plugin
  		easing: 'easeInOutBack'
  	});
  });

  $(".submit").click(function(){
  	return false;
  });


  var state_list = {"states": [
  "Abia",
  "Adamawa",
  "Anambra",
  "Akwa Ibom",
  "Bauchi",
  "Bayelsa",
  "Benue",
  "Borno",
  "Cross River",
  "Delta",
  "Ebonyi",
  "Enugu",
  "Edo",
  "Ekiti",
  "FCT - Abuja",
  "Gombe",
  "Imo",
  "Jigawa",
  "Kaduna",
  "Kano",
  "Katsina",
  "Kebbi",
  "Kogi",
  "Kwara",
  "Lagos",
  "Nasarawa",
  "Niger",
  "Ogun",
  "Ondo",
  "Osun",
  "Oyo",
  "Plateau",
  "Rivers",
  "Sokoto",
  "Taraba",
  "Yobe",
  "Zamfara"
]};
for (var i = 0; i < state_list.states.length; i++) {
  $("#state_of_origin").append($('<option></option>').attr('value', state_list.states[i]).text(state_list.states[i]));
}
});


</script>
