<?php defined("APP") or die() ?>
<header class="activeheadmenu">
	<div class="navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<i class="zmdi zmdi-menu"></i>
                </button>
                <a class="navbar-brand" href="<?php echo $this->config["url"] ?>">
                  <?php if (!empty($this->config["logo"])): ?>
                  <img src="<?php echo $this->config["url"] ?>/content/<?php echo $this->config["logo"] ?>" alt="<?php echo $this->config["title"] ?>">
                  <?php else: ?>
                    <?php echo $this->config["title"] ?>
                  <?php endif ?>
                </a>
			</div>
				<?php echo $this->menu() ?>
		</div>
	</div>
</header>
<section class="under-head-cont">
	<div class="container">
		<div class="centered form">      
			<?php echo Main::message() ?>      
			<form role="form" class="live_form" id="login_form" method="post" action="<?php echo Main::href("user/register")?>">
				<p class="title"><?php echo e("Get Started")?></p>
				<div class="form-group">
					<input type="text" class="form-control" id="name" placeholder="<?php echo e("Username") ?>" name="username" autofocus>
					<i class="zmdi zmdi-account"></i>
				</div>        
				<div class="form-group">
					<input type="email" class="form-control" id="email" placeholder="<?php echo e("Email address")?>" name="email">
					<i class="zmdi zmdi-email"></i>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="pass" placeholder="<?php echo e("Password")?>" name="password">
					<i class="zmdi zmdi-dialpad"></i>
				</div>     
				<div class="form-group">
					<input type="password" class="form-control" id="pass2" placeholder="<?php echo e("Confirm Password")?>" name="cpassword">
					<i class="zmdi zmdi-dialpad"></i>
				</div>  
				<?php echo Main::captcha() ?>            
				<div class="form-group">
					<div class="round-check">
						<input type="checkbox" name="terms" value="1" id="round-checkbox"> 
						<label for="round-checkbox"><?php echo e("I agree to the")?> <a href="<?php echo $this->config["url"] ?>/page/terms" target="_blank"><?php echo e("terms and conditions")?></a>.</label>
					</div>
				</div>          
				<?php echo Main::csrf_token(TRUE) ?>
				<button type="submit" class="mdbtn btn btn-primary width100"><?php echo e("Create account")?></button>
				<?php if(!$this->config["private"] && $this->config["user"] &&  ($this->config["fb_connect"] || $this->config["tw_connect"] || $this->config["gl_connect"])):?>
				<hr>
				<div class="social">
					<h3><?php echo e("Login using a social network") ?></h3>
					<?php if($this->config["fb_connect"]):?>
					<a href="<?php echo $this->config["url"]?>/user/login/facebook" class="btn btn-facebook" title="<?php echo e('Login with Facebook')?>"><i class="zmdi zmdi-facebook"></i></a>
					<?php endif;?>
					<?php if($this->config["tw_connect"]):?>
					<a href="<?php echo $this->config["url"]?>/user/login/twitter" class="btn btn-twitter" title="<?php echo e('Login with Twitter')?>"><i class="zmdi zmdi-twitter"></i></a>
					<?php endif;?>
					<?php if($this->config["gl_connect"]):?>
					<a href="<?php echo $this->config["url"]?>/user/login/google" class="btn btn-google" title="<?php echo e('Login with Google')?>"><i class="zmdi zmdi-google"></i></a>
					<?php endif;?>          
				</div>
				<?php endif;?> 
			</form>        
		</div>
	</div>
</section>