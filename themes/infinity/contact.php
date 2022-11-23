<?php defined("APP") or die() ?>
<section class="under-head-cont">
	<div class="container">    
		<div class="centered form" style="max-width: 600px;">      
      <?php echo Main::message() ?>
      <form role="form" class="live_form" method="post" action="<?php echo Main::href("contact")?>" style="width: 600px;">
      	<h3><?php echo e("Contact us") ?></h3>
      	<p><?php echo e("If you have any questions, feel free to contact us on this page."); ?></p>
      	<hr>
        <div class="form-group">
          <label><?php echo e("Name") ?></label>
          <input type="text" class="form-control" name="name" value="<?php ($this->logged() ? $this->user->name : "") ?>">	   
			<i class="zmdi zmdi-face"></i>
        </div>
        <div class="form-group">
          <label><?php echo e("Email") ?> (<?php echo e("Required") ?>)</label>
          <input type="email" class="form-control" name="email" value="<?php ($this->logged() ? $this->user->email : "") ?>" required>	
			<i class="zmdi zmdi-email"></i>
        </div>  
        <div class="form-group">
          <label><?php echo e("Message") ?> (<?php echo e("Required") ?>)</label>
          <textarea name="message" class="form-control" rows="10" required></textarea>	            
        </div>          
				<div id="captcha" class="display">
					<?php echo Main::captcha() ?>				
				</div>	        
        <?php echo Main::csrf_token(TRUE) ?>
        <button type="submit" class="mdbtn btn btn-primary"><?php echo e("Send") ?></button>        
      </form>        
		</div>
	</div>
</section>