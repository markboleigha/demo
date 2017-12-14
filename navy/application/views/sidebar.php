<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!--Left content-->

<div class="col-md-3 nopr left-content">

  <!--Header-->
  <header id="header">
    <!--Main header-->
    <div class="main-header">

      <!--Profile image-->
      <figure class="img-profile">
        <img src="<?php echo base_url(). 'assets/uploads/avatars/'.$user->service_no.'.png' ?>" alt=""/>

        <figcaption class="name-profile">
          <span><?php echo $user->last_name ." ".$user->first_name;?></span>
        </figcaption>

      </figure>
      <!--End profile image-->



      <!--Main navigation-->
      <nav id="main-nav" class="main-nav clearfix tabbed">

        <ul>
          <li><a href="dashboard"><i class="icon-user"></i>dashboard</a></li>
          <li><a  href="evaluation"><i class="icon-clipboard"></i>evaluation</a></li>
          <li><a  href="messages"><i class="icon-chat"></i>messages</a></li>
          <li><a  href="logout"><i class="icon-logout"></i>Logout</a></li>
        </ul>

      </nav>
      <!--End main navigation-->

    </div>
    <!--End main header-->

    <div class="bottom-header bgWhite ofsTSmall ofsBSmall tCenter">
      <ul class="social">
        <!-- <li><a href="#"><i class="icon-facebook"></i></a></li>
        <li><a href="#"><i class="icon-twitter"></i></a></li>
        <li><a href="#"><i class="icon-linkedin"></i></a></li> -->


      </ul>

      <p>&copy; 2017 Nigerian Navy.</p>

    </div>

  </header>
  <!--End  header-->

</div>
<!--End left content-->
