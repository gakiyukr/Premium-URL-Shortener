<?php defined("APP") or die() // Media Page ?>
<section class="under-head-cont">
	<div class="container splash">
		<?php echo $this->ads(728,FALSE) ?>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default panel-body" id="infinity-splash">
					<div class="thumb col-md-4">
						<img src="<?php echo $url->short ?>/i">
					</div>
					<div class="col-md-8">
					<h2><img src="<?php echo $this->http ?>://www.google.com/s2/favicons?domain=<?php echo $url->url ?>" alt="Favicon">
						<?php if (!empty($url->meta_title)): ?>
							<?php echo $url->meta_title ?>
						<?php else: ?>
							<?php echo e("You are about to be redirected to another page.") ?>
						<?php endif ?>
					</h2>
					<p class="description">
						<?php if (!empty($url->meta_description)): ?>
							<?php echo $url->meta_description ?>
						<?php endif ?>
					</p>
					<br>
					<div class="row">
						<div class="col-sm-6">
							<a href="<?php echo $url->url ?>" class="splash-mdbtn splash-mdbtn-blue btn btn-primary btn-block redirect" rel="nofollow"><i class="zmdi zmdi-shuffle"></i> <?php echo e("Redirect me"); ?></a>
						</div>
						<div class="col-sm-6">
							<a href="<?php echo $this->config["url"] ?>" class="splash-mdbtn splash-mdbtn-black btn btn-default btn-block" rel="nofollow"><i class="zmdi zmdi-home"></i> <?php echo e("Take me to your homepage") ?></a></a>
						</div>
					</div>
					<hr>
					<p class="disclaimer">
						<?php echo e("You are about to be redirected to another page. We are not responisible for the content of that page or the consequences it may have on you.") ?>
					</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>