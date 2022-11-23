<?php defined("APP") or die() // Main User Page ?>
<div class="row">	
  <div id="user-content" class="col-md-8 no-padding-right">  	
		<?php echo Main::message() ?>  	

  	<!-- Shortener Form -->
  	<?php $this->shortener() ?>

  	<?php echo $this->ads(728) ?>
		<div class="main-content panel panel-default">
			<div class="toolbox">
				<div class="postprogress" id="loading_indicator">
					<div class="indeterminate"></div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-5">
						<form action="<?php echo Main::href("user/search") ?>" id="search">
							<div class="search-group">
								<input type="text" name="q" class="form-control" placeholder="<?php echo e('Enter keyword and press enter.')?>">
								<i class="zmdi zmdi-search"></i>
							</div>
						</form>
					</div>
					<div class="col-md-3 col-sm-3">
						<select name="sort" class="filter" data-key="sort">
							<option value="newest"<?php if(!isset($_GET["sort"])) echo " selected"?>><?php echo e("Newest") ?></option>
								<option value="oldest"<?php if(Main::is_set("sort","oldest")) echo " selected"?>><?php echo e("Oldest") ?></option>
								<option value="popular"<?php if(Main::is_set("sort","popular")) echo " selected"?>><?php echo e("Popular") ?></option>
						</select>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="btn-group btn-group-sm">
							<a href="#" class="btn" id="selectall"><i class="zmdi zmdi-check-all"></i><?php echo e("Select All")?></a>
							<a href="#" class="btn btn-outline-danger" id="deleteall"><i class="zmdi zmdi-delete"></i><?php echo e("Delete All")?></a>
						</div>					
					</div>					
				</div><!--/.row-->
			</div><!-- /.toolbox -->			
			<div id="data-container">
				
				<form action="<?php echo Main::href("user/delete") ?>" method="post" id="delete-all-urls">				
					<div class="return-ajax" style="display:none">
						<table id="urls-table" class="table urls-table table-striped table-bordered table-advance table-hover">
							<thead>
								<tr>
									<th></th>
									<th class="hidden-xs"><?php echo e("Link") ?></th>
									<th><?php echo e("Short link") ?></th>
									<th><?php echo e("Clicks") ?></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div><!-- /.return-ajax -->
					<div class="url-container">
						<table id="urls-table" class="table urls-table table-striped table-bordered table-advance table-hover">
							<thead>
								<tr>
									<th></th>
									<th class="hidden-xs"><?php echo e("Link") ?></th>
									<th><?php echo e("Short link") ?></th>
									<th><?php echo e("Clicks") ?></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($urls as $url): ?>
							<?php include(TEMPLATE."/shared/url_loop.php") ?>
							<?php endforeach ?>
							</tbody>
						</table>
						<?php echo Main::csrf_token(TRUE) ?>
						<?php echo $pagination ?>
					</div><!-- /.url-conainer -->
				</form>
			</div><!-- /#data-container -->
		</div><!-- /.main-content -->
  </div><!--/#user-content-->
  <div id="widgets" class="col-md-4">
  	<?php echo $this->sidebar() ?>
		<?php echo $this->widgets('news') ?>
  	<?php echo $this->widgets('countries') ?>
    <?php echo $this->widgets('activities') ?> 
    <?php echo $this->widgets('top_urls') ?>
  </div><!--/#widgets-->
</div><!--/.row-->