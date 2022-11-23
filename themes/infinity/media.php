<?php defined("APP") or die() // Media Page ?>
<section class="under-head-cont">
	<div class="container media">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default panel-body">
					<div class="embed" style="margin: -15px;">
						<?php echo $url->embed ?>
					</div>
					<div class="row info">
						<div class="col-sm-12">
							<h3><?php echo $url->meta_title ?></h3>
							<p><i class="zmdi zmdi-eye"></i><span><?php echo $url->click+1 ?></span>
							<?php echo e("Views") ?></p>
						</div>					
					</div>
					<p class="description margin0">
						<?php echo $url->meta_description ?>				
					</p>					
				</div>
				<?php echo $this->ads(728) ?>
				<?php echo $this->comment() // Uses facebook system. Add your appid to activate it ?>
			</div>
			<div class="col-md-4">
				<?php echo $this->ads(300) ?>	
				<div class="panel panel-default panel-body">
					<h3><?php echo e("Short URL") ?></h3>
					<div style="display: flex;"><input type="text" class="form-control" value="<?php echo $url->shorturl ?>" readonly>
					<a href="#copy" class="btn btn-primary copy" data-clipboard-text="<?php echo $url->shorturl ?>"><?php echo e("Copy") ?></a></div>
					<?php if($this->config["sharing"]): ?>
						<hr>
					<h3><?php echo e("Share on") ?></h3>
						<p class="center media-share">
							<a href="https://www.facebook.com/sharer.php?u=<?php echo $this->user->domain ?>/<?php echo $url->alias.$url->custom ?>" class="btn btn-facebook u_share"><i class="zmdi zmdi-facebook"></i></a>
							<a href="https://twitter.com/share?url=<?php echo $this->user->domain ?>/<?php echo $url->alias.$url->custom ?>" class="btn btn-twitter u_share"><i class="zmdi zmdi-twitter"></i></a>
							<a href="https://plus.google.com/share?url=<?php echo $this->user->domain ?>/<?php echo $url->alias.$url->custom ?>" target="_blank" class="btn btn-danger u_share" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a>
							<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $this->user->domain ?>/<?php echo $url->alias.$url->custom ?>" target="_blank" class="btn btn-linkedin u_share" title="LinkedIn"><i class="zmdi zmdi-linkedin"></i></a>
							<a href="https://pinterest.com/pin/create/button/?url=<?php echo $this->user->domain ?>/<?php echo $url->alias.$url->custom ?>" target="_blank" class="btn btn-pinterest u_share" title="Pinterest"><i class="zmdi zmdi-pinterest"></i></a>
						</p>
					<?php endif ?>					
				</div>
			</div>				
		</div>
	</div>
</section>