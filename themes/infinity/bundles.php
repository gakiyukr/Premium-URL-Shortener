<?php defined("APP") or die() ?>
<div id="user-content">
	<?php echo Main::message() ?>  	
	<div class="row">
		<div class="col-md-12">
			<h3 class="bundleh3"><?php echo e("Manage your bundles") ?> 
			<?php
				if (count($bundles) == 0) {
					}
				else{
				echo '<a href="" class="btn mdbtn btn-primary ajax_call pull-right" data-action="bundle_create" data-title="'. e("Create Bundle") .'">'. e("Create Bundle").'</a>';
				}
			?>
			</h3>
		</div>
		<div class="main-content col-md-5 url-bundle no-padding-right">
			<div class="panel panel-default panel-body">
				<ul class="list-group bundles">
				<?php foreach ($bundles as $bundle): ?>
					<li class="list-group-item">
						<div class="dropdown In_dropdown pull-right">
							<a href="javascript:void(0)" id="bundleLabel" class="cusdropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="<?php echo e("Options") ?>">
								<i class="zmdi zmdi-more-vert"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-right cusdropdown-menu" aria-labelledby="bundleLabel">
								<li>
									<a href='#edit' class='ajax_call' data-title="<?php echo e("Edit Bundle")?>" data-action='bundle_edit' data-id='<?php echo $bundle->id ?>'><?php echo e("Edit")?></a>
								</li>
								<li>
									<a href="<?php echo Main::href("user/delete/{$bundle->id}").Main::nonce("delete_bundle-{$bundle->id}") ?>" class="delete"><?php echo e("Delete")?></a>
								</li>
							</ul>
						</div>

						<a href="#" class="ajax_call" data-class="return-ajax" data-id="<?php echo $bundle->id ?>" data-active="active" data-action="bundle_urls"><h4 class="list-group-item-heading"><?php echo $bundle->name ?></h4></a>
						<p><?php echo $this->config["url"]."/profile/{$this->user->username}/".Main::slug($bundle->name)."-{$bundle->id}"; ?> <a href="#" class="copy inline-copy" data-value="<?php echo $this->config["url"]."/profile/{$this->user->username}/".Main::slug($bundle->name)."-{$bundle->id}"; ?>"><?php echo e("Copy") ?></a></p>
				    <p class="list-group-item-text">
				    	<?php echo $bundle->view ?> <?php echo e("Views") ?> &nbsp;&nbsp;&bullet;&nbsp;&nbsp; 
				    	<?php echo $this->count("user_bundle_urls",$bundle->id) ?> <?php echo e("URLs") ?> &nbsp;&nbsp;&bullet;&nbsp;&nbsp;
				    	<?php echo e(ucfirst($bundle->access)) ?>				
				    	&nbsp;&nbsp;&bullet;&nbsp;&nbsp;	
							<?php echo Main::timeago($bundle->date) ?>
				    </p>					
					</li>					
				<?php endforeach ?>
				
				<?php
					if (count($bundle) == 0) {
						echo '<div class="center"><span class="zmdi-hc-stack zmdi-hc-lg" style="-webkit-filter: drop-shadow(0px 9px 7px rgba(195, 116, 74, 0.49));filter: drop-shadow(0px 9px 7px rgba(195, 116, 74, 0.49));width: 5em;height: 5em;line-height: 5em;margin-bottom: 19px;"><i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #e06c2c;font-size: 5em;"></i><i class="zmdi zmdi-layers-off zmdi-hc-stack-1x zmdi-hc-inverse" style="font-size: 33px;"></i></span><br><a href="" class="btn btn-primary ajax_call" data-action="bundle_create" data-title="'. e("Create Bundle").'"><i class="zmdi zmdi-plus"></i>'. e("Create Bundle").'</a></div>';
					}    
		        ?>
				</ul>
				<?php echo $pagination ?>				
			</div>
		</div>
		<div class="main-content col-md-7">
			<div class="panel panel-default panel-body">
				<div id="data-container">
					<div class="btn-group btn-group-sm pull-right">
						<a href="#" class="btn" id="selectall"><i class="zmdi zmdi-check-all"></i><?php echo e("Select All")?></a>
						<a href="#" class="btn btn-outline-danger" id="deleteall"><i class="zmdi zmdi-delete"></i><?php echo e("Delete All")?></a>
					</div>
					<form action="<?php echo Main::href("user/delete") ?>" method="post" id="delete-all-urls">				
						<div class="url-container">
							<div>
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
									<tbody class="return-ajax">
										<td></td>
										<td class="center"><?php echo e("Please select a bundle from the left.") ?></td>
										<td></td>
										<td></td>
										<td></td>
									</tbody>
								</table>
							</div><!-- /.return-ajax -->							
						</div>
						<?php echo Main::csrf_token(TRUE) ?>
					</form>
				</div><!-- /#data-container -->	  					
			</div>		
		</div>
	</div>
</div>