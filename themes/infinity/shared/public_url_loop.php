<?php defined("APP") or die() // This file is looped in each instances to show the URL. Please don't edit this fiel if you don't know what you are doing! ?>
<div class="url-list fix" id="url-container-<?php echo $url->id ?>" data-id="<?php echo $url->id ?>">
	<div class="row">
		<div class="col-sm-10 url-info">
			<h3 class="title">
				<a href="<?php echo $user->domain ?>/<?php echo $url->alias.$url->custom ?>" target="_blank"><?php echo Main::truncate(empty($url->meta_title)?$url->url:$url->meta_title,50) ?></a>
			</h3>
			<p class="description"><?php echo $url->meta_description ?></p>
			<div class="short-url">
				<i class="zmdi zmdi-link"></i> <a href="<?php echo $user->domain ?>/<?php echo $url->alias.$url->custom ?>" target="_blank"><?php echo $user->domain ?>/<?php echo $url->alias.$url->custom ?></a>							
				&nbsp;&nbsp;&bullet;&nbsp;&nbsp;<i class="zmdi zmdi-time"></i><?php echo Main::timeago($url->date) ?>
			</div>
		</div>
		<div class="col-sm-2 url-stats">
			<a href="<?php echo $user->domain ?>/<?php echo $url->alias.$url->custom ?>+" target="_blank" class=""><i class="zmdi zmdi-mouse"></i><span><?php echo $url->click ?></span> <?php echo e("Clicks") ?></a>
		</div>
	</div>
</div><!-- /.url-list -->