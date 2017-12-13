<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>

<div class="row ">

  <?php $this->load->view('sidebar'); ?>

  <!--Right content-->
  <div class="col-md-9 right-content">

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
          <div class="block-content ">

            <!--Works-->
            <div class="works">

              <!--Row-->
              <div class="row">

                <div class="block-filter tCenter">
                  <ul id="category" class="filter nav nav-tabs">
                    <li><a href="#tab-1" data-toggle="tab" class="">officer particulars</a></li>
                    <li><a href="#tab-2" data-toggle="tab" class="">Web design</a></li>
                    <li><a href="#tab-3" data-toggle="tab" class="">Graphic design</a></li>
                    <li><a href="#tab-4" data-toggle="tab" class="">Motion Graphic</a></li>
                  </ul>

                </div>


              </div>
              <!--End row-->



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
      $(this).addClass('active');
  });
  var activeTab = localStorage.getItem('activeTab');
  if(activeTab){
      $('#category a[href="' + activeTab + '"]').tab('show');
      $('#category a[href="' + activeTab + '"]').addClass('active');
  }
});


</script>
