<?php defined("APP") or die() ?>
<div class="overlaylink">
	<div class="link-shared" id="modal">
		<!-- close trigger -->
		<div class="closelink">
			<span><i class="zmdi zmdi-close"></i></span>
		</div>
		<!-- modal content -->
		<div class="modal-contentlink">
		</div>
	</div>
</div>
<div class="share-this"></div>
<div class="ajax"></div>
<div class="p-relative">
<form action="<?php echo Main::href("shorten") ?>" id="main-form" role="form" method="post">
	<div class="main-form">
		<div class="row" id="single">
			<div class="col-md-9 shortfieldz">
				<i class="zmdi zmdi-link"></i>
				<input type="text" class="form-control main-input" onclick="In_ShowPosInfo()" name="url" value="<?php if(isset($_GET["url"])) echo Main::clean($_GET["url"]) ?>" placeholder="<?php echo e("Paste a long url") ?>" /> 
				<?php if($option["advanced"]): ?>
					<a href="#" class="advanced short-adv-sett" data-toggle="tooltip" title="<?php echo e("Advanced Options") ?>"><i class="zmdi zmdi-settings"></i></a>
				<?php endif; ?>		  
			</div>
			<div class="col-md-3 shortbtnz">
				<button class="btn btn-default btn-block main-button" id="shortenurl" type="submit"><?php echo e("Shorten") ?></button>
				<!--<button class="btn btn-primary btn-block main-button" id="copyurl" type="button"><?php echo e("Copy") ?></button>-->
			</div>
		</div>
		<?php if($option["multiple"]): ?>
			<div id="multiple" style="display: none">
				<div class="form-group">
					<textarea class="form-control main-textarea" name="urls" rows="5" placeholder="<?php echo e("Paste up to 10 long urls. One URL per line.") ?>" style="resize: vertical;"></textarea>
				</div> 
				<button class="btn btn-primary main-button" id="shortenurl" type="submit" style="border-radius: 0;padding: 0px 40px;"><?php echo e("Shorten") ?></button>         
			</div>        
		<?php endif; ?>
	</div>
	<!-- /.main-form -->
	<div class="main-options clearfix">
		<?php echo $this->shortener_option() ?>
	</div><!-- /.main-options -->
	<div id="captcha" style="display:none">
		<?php echo Main::captcha() ?>
	</div>
	<?php if($option["advanced"]): ?>    
    <div class="main-advanced<?php if($option["autohide"]) echo " slideup" ?>">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h3><?php echo e("Custom Alias")?></h3>
          <p><?php echo e('If you need a custom alias, you can enter it below.')?></p>
          <div class="input-group">
            <span class="input-group-addon"><i class="zmdi zmdi-edit"></i></span>
            <input type="text" class="form-control" name="custom" placeholder="<?php echo e("Type your custom alias here")?>" >
          </div>                  
        </div>
		<!-- /.col-md-6 -->
        <div class="col-md-6 col-sm-6">
          <h3><?php echo e("Link Expiration")?></h3>
          <p><?php echo e('Set an expiration date to disable the URL after this date.')?></p>                  
          <div class="input-group">
            <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
            <input type="text" class="form-control" data-toggle="datepicker" name="expiry" id="expiry" placeholder="<?php echo e("MM/DD/YYYY")?>">
          </div>                  
        </div>
        <!-- /.col-md-6 -->
        <div class="col-md-6 col-sm-6" style="margin-top: 20px;">
          <h3><?php echo e("Password Protect")?></h3>
          <p><?php echo e('By adding a password, you can restrict the access of statistics.')?></p>                  
          <div class="input-group">
            <span class="input-group-addon"><i class="zmdi zmdi-dialpad"></i></span>
            <input type="text" class="form-control" name="password" id="pass" placeholder="<?php echo e("Type your password here")?>">
          </div>                  
        </div>
        <!-- /.col-md-6 -->
        <div class="col-md-6 col-sm-6" style="margin-top: 20px;">
          <h3><?php echo e("Description")?></h3>
          <p><?php echo e('This can be used to identify URLs on your account.')?></p>                  
          <div class="input-group">
            <span class="input-group-addon"><i class="zmdi zmdi-info"></i></span>
            <input type="text" class="form-control" name="description" placeholder="<?php echo e("Type your description here")?>">
          </div>                  
        </div>
        <!-- /.col-md-6 -->
      </div><!--/.row -->
      <?php if($this->config["geotarget"]):?>
      <div class="row geotarget" id="geo">
        <div class="col-md-12 geo-input">
          <h3><?php echo e("Geotargeting")?> <a href="#" class="btn btn-xs btn-primary pull-right add_geo" data-home="true"><?php echo e("Add more locations")?></a></h3>
          <p><?php echo e('If you have different pages for different countries then it is possible to redirect users to that page using the same URL. Simply choose the country and enter the URL.')?></p>           
          <div class="row country">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="zmdi zmdi-globe"></i></span>
                <select name="location[]">
                  <?php echo Main::countries() ?>
                </select>
              </div>              
            </div><!-- /.col-md-6 -->  
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="zmdi zmdi-link"></i></span>
                <input type="text" name="target[]" class="form-control" placeholder="<?php echo e("Type the url to redirect user to.")?>">
              </div>
            </div><!-- /.col-md-6 -->  
          </div><!-- /.row -->
        </div><!-- /.geo-input -->
      </div><!-- /.row -->            
      <?php endif; ?>
      <?php if($this->config["devicetarget"]):?>
      <hr>  
      <div class="row devicetarget" id="device">        
        <div class="col-md-12 device-input">
          <h3><?php echo e("Device Targeting")?> <a href="#" class="btn btn-xs btn-primary pull-right add_device" data-home="true"><?php echo e("Add more device")?></a></h3>
          <p><?php echo e('If you have different pages for different devices (such as mobile, tablet etc) then it is possible to redirect users to that page using the same short URL. Simply choose the device and enter the URL.')?></p>           
          <div class="row devices">
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="zmdi zmdi-smartphone-iphone"></i></span>
                <select name="device[]">
                  <?php echo Main::devices() ?>
                </select>
              </div>              
            </div><!-- /.col-md-6 -->  
            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-addon"><i class="zmdi zmdi-link"></i></span>
                <input type="text" name="dtarget[]" class="form-control" placeholder="<?php echo e("Type the url to redirect user to.")?>">
              </div>
            </div><!-- /.col-md-6 -->  
          </div><!-- /.row -->
        </div><!-- /.device-input -->
      </div><!-- /.row -->            
      <?php endif; ?>
		<?php if ($this->pro()): ?>
        <hr>
        <div class="row" id="pixels">
          <div class="col-md-12">
            <h3><?php echo e("Targeting Pixels")?></h3>
            <p><?php echo e('Add your targeting pixels below from the list. Please make sure to enable them in the pixels settings.')?></p>           
            <div class="row devices">
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon"><i class="zmdi zmdi-filter-list"></i></span>
                  <select name="pixels[]" data-placeholder="Your Pixels" multiple>
                    <option value="facebook"><?php echo e("Facebook Pixel") ?></option>
                    <option value="adwords"><?php echo e("Adwords Pixel") ?></option>
                    <option value="linkedin"><?php echo e("LinkedIn Pixel") ?></option>
                  </select>
                </div>              
              </div><!-- /.col-md-6 -->  
            </div><!-- /.row -->
          </div><!-- /.device-input -->
        </div><!-- /.row -->              
      <?php endif ?> 	  
    </div><!-- /.main-advanced -->  
  <?php endif ?>
  <input type="hidden" value="0" name="multiple" id="multiple-form">
  <input type="hidden" value="<?php echo md5($this->config["public_token"]) ?>">
</form><!--/.form-->  
<?php if($option["multiple"]): ?>
<ul class="form_opt short-multi-option" data-id="multiple-form" data-callback="form_switch">
  <li><a href="" class="last" data-value="1"><?php echo e("Multiple")?></a></li>
  <li><a href="" class="first current" data-value="0"><?php echo e("Single")?></a></li>
</ul>
<?php endif ?>
</div>