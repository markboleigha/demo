<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>


    <div class="row ">
        <?php $this->load->view('sidebar'); ?>

        <!--Right content-->
  			<div class="col-md-9 right-content">

          <!--About Tab-->
          <section id="about" class="bgWhite ofsInBottom">
            <!--About -->
						<div class="about">

              <div class="main-title">
                <h1>Officer Data</h1>
                <div class="divider">
                  <div class="zigzag large clearfix "  data-svg-drawing="yes" >
                    <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <path d="M1.357,12.26 10.807,2.81 20.328,12.332
                    29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793"  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
                    </svg>
                  </div>
                </div>
              </div>


              <!--Content-->
  						<div class="content">
                <!--Block content-->


                <div class="block-content">
                  <div class="info">
                    <!--Row-->
  									<div class="row">
                      <div class="col-md-6">

  											<ul class="info-list clearfix">
  												<li><span class="inf">First Name </span>  <span class="value"><?php echo $user->first_name ?></span></li>
  												<li><span class="inf">Last Name</span>  <span class="value"><?php echo $user->last_name ?></span></li>
  												<li><span class="inf">Other Names</span>  <span class="value"> <?php echo $user->other_name ?></span></li>

  												<li><span class="inf">Email </span>  <span class="value"><?php echo $user->email ?></span></li>
  												<li><span class="inf">Phone</span>  <span class="value"> <?php echo $user->phone ?></span></li>
  												<li><span class="inf">Sex</span>  <span class="value"> <?php echo $user->sex ?></span></li>

  												<li><span class="inf">Date of birth</span>  <span class="value"> <?php echo date('F j, Y', $user->dob) ?> </span></li>

  											</ul>

  										</div>


                      <div class="col-md-6">

  											<ul class="info-list">
  												<li><span class="inf">Service No</span>  <span class="value"><?php echo $user->service_no ?></span></li>
  												<li><span class="inf">Rank</span>  <span class="value"> <?php echo ucwords($user->rank) ?></span></li>
  												<li><span class="inf">Seniority</span>  <span class="value"><?php echo $user->seniority ?></span></li>

  												<li><span class="inf">Elistment Date</span>  <span class="value"><?php echo date("F j, Y", $user->enlistment_date) ?></span></li>
  												<li><span class="inf">Commission Date</span>  <span class="value"><?php echo date("F j, Y", $user->commission_date) ?></span></li>
  												<li><span class="inf">Commission Type</span>  <span class="value"><?php echo ucwords($user->commission_type) ?></span></li>
  												<li><span class="inf">Last Promotion</span>  <span class="value"><?php echo date("F j, Y", $user->last_promotion) ?></span></li>
  											</ul>

  										</div>

                    </div>
                    <!--END ROW-->

                    <div style="margin-top: 20px" class="row">
                      <div class="col-md-12">
                        <ul class="info-list clearfix">

                          <li><span class="inf">ROD</span>  <span class="value"><?php echo $user->rod ?></span></li>
                          <li><span class="inf">command</span>  <span class="value"> <?php echo ucwords($user->command)	?></span></li>
                          <li><span class="inf">Unit</span>  <span class="value"><?php echo ucwords($user->unit) ?></span></li>
                        </ul>
                      </div>
                    </div>



                  </div>



                </div>


              </div>

            </div>

          </section>

        </div>

    </div>
