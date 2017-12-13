<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style type="text/css">
  body {
background: url(http://bsnscb.com/data/out/134/39380451-navy-wallpapers.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}

.panel-default {
opacity: 0.9;
margin-top:30px;
}
.form-group.last { margin-bottom:0px; }
</style>
<div class="container">
  <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <span class="glyphicon glyphicon-lock"></span> Login
              </div>
              <div class="panel-body">
                <?php $attributes = array("class" => "form-horizontal");
                  echo form_open('login', $attributes) ?>
                    <?php echo $this->session->flashdata('login_err');?>

                  <div class="form-group">
                      <label for="username" class="col-sm-3 control-label">
                          Email</label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control" name="username" id="username" placeholder="User ID" value="<?php echo set_value('username');?>" required>
                          <?php echo form_error('username'); ?>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="password" class="col-sm-3 control-label">
                          Password</label>
                      <div class="col-sm-9">
                          <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="<?php echo set_value('password');?>" required>
                          <?php echo form_error('password');?>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-sm-offset-3 col-sm-9">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox"/>
                                  Remember me
                              </label>
                          </div>
                      </div>
                  </div>
                  <div class="form-group last">
                      <div class="col-sm-offset-3 col-sm-9">
                          <button type="submit" class="btn btn-success btn-sm">
                              Sign in</button>
                               <button type="reset" class="btn btn-default btn-sm">
                              Reset</button>
                      </div>
                  </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
