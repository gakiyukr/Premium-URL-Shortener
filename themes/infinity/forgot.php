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
			<form role="form" class="live_form" method="post" action="<?php echo Main::href("user/forgot/{$this->id}")?>">
				<div class="form-group">
					<input type="password" class="form-control" id="pass1" placeholder="<?php echo e("Password")?>" name="password">
					<i class="zmdi zmdi-dialpad"></i>					
				</div>        
				<div class="form-group">
					<input type="password" class="form-control" id="pass2" placeholder="<?php echo e("Confirm Password")?>" name="cpassword">
					<i class="zmdi zmdi-dialpad"></i>
				</div>
				<?php echo Main::csrf_token(TRUE) ?>
				<button type="submit" class="mdbtn btn btn-primary"><?php echo e("Reset Password")?></button>        
			</form>        
		</div>
	</div>
</section>