<style>
.alert {
  padding: 20px;
  background-color: #f7182e;
  color: white;
  width: 100%;
  margin-left:auto;

}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="<?php echo base_url();?>/assets/pages/img/logo-big.png" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="<?php echo site_url('login/login'); ?>" method="post">
                <h3 class="form-title font-green">Silahkan Login</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Masukkan Username dan Password anda!!! </span>
                </div>
                <?php if ($this->session->flashdata('msg') == TRUE): ?>
                   <div class="alert col-md-12">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <?php echo $this->session->flashdata('msg');?>
                   </div>
                  <?php endif;?>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control form-control-solid placeholder-no-fix" name="username" type="text" autocomplete="off" placeholder="Username" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" name="password" type="password" autocomplete="off" placeholder="Password" /> </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase" style="margin-left:250px;">Login</button>
                </div>
                <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>