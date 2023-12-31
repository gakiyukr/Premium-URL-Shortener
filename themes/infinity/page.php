<?php defined("APP") or die() ?>
<section class="dark under-head-cont" id="infinity-breadcrumb">
	<div class="container">
		<h2><?php echo e($page->name) ?></h2>
		<ol class="breadcrumb">
		  <li><a href="<?php echo Main::href("") ?>"><?php echo e("Home") ?></a></li>
		  <li class="active"><?php echo e($page->name) ?></li>
		</ol>
	</div>
</section>
<section class="breadcrumb-section">
	<div class="container content">
		<div class="row main-content">
			<div class="col-md-8">				
				<div class="panel panel-body panel-default">
					<h3><?php echo e($page->name) ?></h3>
					<?php echo $this->page_replace($page->content) ?>
				</div>
				<?php echo $this->ads(728,0) ?>	
			</div>
			<div class="col-md-4">
				<?php echo $this->ads(300,0) ?>
				<?php echo $this->widgets("social_count") ?>
			</div>
		</div>		
	</div>
</section>