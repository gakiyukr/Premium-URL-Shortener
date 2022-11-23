<?php if(!defined('APP')) die(); ?>
<section class="under-head-cont">
	<div class="container">
		<div class="custom-splash panel panel-default" id="splash">
		<div id="infinity-custom-splash">
			<div class="col-md-8">
				<div class="banner"><a href="<?php echo $data->product ?>" rel="nofollow" target="_blank"><img src="<?php echo $data->banner ?>"></a></div><!-- /.banner -->
			</div>
			<div class="col-md-4">
				<div class="custom-message">
					<div class="c-avatar"><img src="<?php echo $data->avatar ?>"></div><!-- /.avatar -->
					<div class="c-message">
						<h2><?php echo $data->title ?></h2>
						<?php echo $data->message ?>
						<div class="c-countdown"><span><?php echo $this->config["timer"] ?></span><?php echo e("seconds") ?></div><!-- /.c-countdown -->
					</div><!-- /.messsage -->
				</div>
				<a href="<?php echo $data->product ?>" rel="nofollow" target="_blank" class="btn mdbtn btn-primary"> <i class="zmdi zmdi-open-in-browser"></i>
<?php echo e("View site") ?></a>
				<!-- /.custom-message -->
			</div>
		</div>
		</div><!-- /.custom-splash -->	
	</div><!-- /.container -->
</section>