<?php defined("APP") or die() // Settings Page ?>
<div class="row">	
	<div id="user-content" class="col-md-8 no-padding-right">  	
		<?php echo $this->ads(728) ?>
		<?php echo Main::message() ?>  			
		<div class="main-content panel panel-default panel-body">
			<h3><?php echo e("Account Settings") ?></h3>

			<?php if(!empty($this->user->auth)): ?>
				<div class="alert alert-warning"><?php echo e("You have used a social network to login. Please note that in this case you don't have a password set.") ?></div>
			<?php endif ?>
			
			<?php if(empty($this->user->username)): ?>
				<div class="alert alert-warning"><?php echo e("You have used a social network to login. You will need to choose a username.") ?></div>
			<?php endif ?>

			<form action="<?php echo Main::href("user/settings") ?>" role="form" class="form-horizontal" method="post">
				<div class="setting-panel row">
					<?php if(!empty($this->user->auth)){ ?>
					<?php } else { ?>
						<div class="avatar-holder row">
							<img src="<?php echo $this->user->avatar ?>" alt="<?php echo $this->user->username ?>'s Avatar" class="avatar pull-left">
							<div class="infoz pull-left">
								<strong title="<?php echo $this->user->username ?>"><?php echo $this->user->username ?></strong>
								<a href="https://gravatar.com/" target="_blank" class="chavatlink">
									<?php if($this->lang == "de"){
										echo "Verander Avatar"; 
									}
									else if ($this->lang == "es"){
										echo "Cambiar avatar"; 
									}
									else if ($this->lang == "fr"){
										echo "Changer d'avatar"; 
									}
									else if ($this->lang == "po"){
										echo "Mudar Avatar"; 
									}
									else if ($this->lang == "ru"){
										echo "Сменить аватар"; 
									}
									else if ($this->lang == "th"){
										echo "เปลี่ยน Avatar"; 
									}
									else if ($this->lang == "ar"){
										echo "تغيير الصورة الرمزية"; 
									}
									else{
										echo "Change Avatar"; 
									} ?>
								</a>
							</div>
						</div>
					<hr>
					<?php } ?>
					<div class="form-group col-lg-6">
						<label class="col-md-12 control-label"><?php echo e("Email")?></label>			
						<div class="col-md-12">
							<input type="text" value="<?php echo $this->user->email?>" name="email" class="form-control" />
							<?php if($this->config["user_activate"]): ?>
								<p class="help-block"><?php echo e("Please note that if you change your email, you will need to activate your account again.") ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="form-group col-lg-6">
						<label class="col-md-12 control-label"><?php echo e("Username")?></label>			
						<div class="col-md-12">
							<input type="text" value="<?php echo $this->user->username?>" name="username" class="form-control"<?php echo (empty($this->user->username)?"":" disabled")?>/>
							<p class="help-block"><?php echo e("A username is required for your public profile to be visible.") ?></p>
						</div>
					</div>
				</div>
		
				<div class="setting-panel row">
					<h2><?php echo e("Password")?></h2>
					<hr>
					<div class="form-group col-lg-6">
						<label class="col-md-12 control-label"><?php echo e("Password")?></label>
						<div class="col-md-12">
							<input type="password" value="" name="password" class="form-control" />
							<p class="help-block"><?php echo ucfirst(e("leave blank to keep current one")) ?>.</p>
						</div>
					</div>
					<div class="form-group col-lg-6">
						<label class="col-md-12 control-label"><?php echo e("Confirm Password")?></label>
						<div class="col-md-12">
							<input type="password" value="" name="cpassword" class="form-control" />
							<p class="help-block"><?php echo ucfirst(e("leave blank to keep current one")) ?>.</p>
						</div>
					</div>
				</div>
				
				<div class="setting-panel">
					<?php if($this->pro()): ?>
						<div class="form-group col-lg-12">
							<label for="description" class="col-md-12"><?php echo e("Default Redirection") ?></label>
							<div class="col-md-12">
								<select name="defaulttype">
									<option value="direct" <?php echo ($this->user->defaulttype == "direct" || $this->user->defaulttype== "" ?" selected":"") ?>> <?php echo e('Direct') ?></option>
									<option value="frame" <?php echo ($this->user->defaulttype == "frame"?" selected":"") ?>> <?php echo e('Frame') ?></option>
									<option value="splash" <?php echo ($this->user->defaulttype == "splash"?" selected":"") ?>> <?php echo e('Splash') ?></option>
									<option value="overlay" <?php echo ($this->user->defaulttype == "overlay"?" selected":"") ?>> <?php echo e("Overlay") ?></option>
								</select>		              
							</div>
						</div>			      
					<?php endif; ?>
					
					<ul class="form_opt" data-id="public">
						<li class="text-label"><?php echo e("Profile Access")?>
							<small><?php echo e("Public profile will be activated only when this option is public. Username is required.")?></small>
						</li>
						<li><a href="" class="last<?php echo (!$this->user->public?" current":"")?>" data-value="0"><?php echo e("Private")?></a></li>
						<li><a href="" class="first<?php echo ($this->user->public?" current":"")?>" data-value="1"><?php echo e("Public")?></a></li>
					</ul>
					<input type="hidden" name="public" id="public" value="<?php echo $this->user->public ?>">

					<ul class="form_opt" data-id="media">
						<li class="text-label"><?php echo e("Media Gateway")?>
							<small><?php echo e("If enabled, special pages will be automatically created for your media URLs")?> (e.g. youtube, vimeo, dailymotion...)</small>
						</li>
						<li><a href="" class="last<?php echo (!$this->user->media?" current":"")?>" data-value="0"><?php echo e("Disabled")?></a></li>
						<li><a href="" class="first<?php echo ($this->user->media?" current":"")?>" data-value="1"><?php echo e("Enabled")?></a></li>
					</ul>
					<input type="hidden" name="media" id="media" value="<?php echo $this->user->media?>">
				</div>
				<?php echo Main::csrf_token(TRUE) ?>
				<div class="text-center"><button type="submit" class="btn btn-primary setting-panel-mdbtn"><i class="zmdi zmdi-check-circle"></i> <?php echo e("Update")?></button></div>			   
			</form>
		</div>	
		<?php echo $this->last_payments() ?>
	</div><!--/#user-content-->
	<div id="widgets" class="col-md-4">
  	<?php echo $this->sidebar() ?>
		<?php echo $this->widgets("tools") ?>
		<?php echo $this->widgets("export") ?>
		<?php if($this->config["api"]): ?>
			<div class="panel panel-default panel-body">
				<h3><?php echo e("Developers") ?><i class="zmdi zmdi-code" style="color: #ff5722;"></i></h3>
				<p><?php echo e("We provide an API system that you can use to shorten URLs from your own applications and save them in your account in the process. You can also use the API to fetch data about a URL, provided that you have the permission to do so. You can find out more information below.") ?></p>
				<p><strong><?php echo e("Your API Key") ?>: <?php echo $this->user->api ?></strong></p>
				<p><a class="btn btn-primary btn-xs" href="<?php echo Main::href("page/developer") ?>"><?php echo e("Learn more") ?></a></p>
			</div>
		<?php endif ?>
	</div><!--/#widgets-->
</div><!--/.row-->