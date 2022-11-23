<?php defined("APP") or die() // This file is looped in each instances to show the URL. Please don't edit this fiel if you don't know what you are doing! ?>
<tr class="url-list" id="url-container-<?php echo $url->id ?>" data-id="<?php echo $url->id ?>">
	<td class="center">
		<div class="round-check toggle">
			<input type="checkbox" name="delete-id[]" id="url-select-cbox<?php echo $url->id ?>" value="<?php echo $url->alias.$url->custom ?>">
			<label for="url-select-cbox<?php echo $url->id ?>"><?php echo e("&nbsp;")?></label>
		</div>
	</td>
	<td class="hidden-xs">
		<h3 class="title">
			<img src="<?php echo $this->http ?>://www.google.com/s2/favicons?domain=<?php echo $url->url ?>" alt="Favicon">
			<a href="<?php echo $url->url ?>" target="_blank"><?php echo Main::truncate(empty($url->meta_title)?$url->url:$url->meta_title,37) ?></a>
		</h3>
		<p>
			<?php if (!empty($url->location)): ?>
				&nbsp;&nbsp;&nbsp;
				<span><i class="zmdi zmdi-globe"></i> <?php echo e('Geotargeted')?></span>
			<?php endif ?>
			<?php if (!empty($url->devices)): ?>
				&nbsp;&nbsp;&nbsp;
				<span><i class="zmdi zmdi-smartphone"></i> <?php echo e('Device Targeted')?></span>
			<?php endif ?>				
			<?php if (!empty($url->pass)): ?>
				&nbsp;&nbsp;&nbsp;
				<span><i class="zmdi zmdi-lock"></i> <?php echo e('Protected')?></span>
			<?php endif ?>
			<?php if (!empty($url->expiry)): ?>
				&nbsp;&nbsp;&bullet;&nbsp;&nbsp;
				<a href="#" class="tooltip" data-content="<?php echo e("Expiry on") ?> <?php echo date("d F, Y", strtotime($url->expiry)) ?>"><span><i class='glyphicon glyphicon-calendar'></i></span></a>
			<?php endif ?>				
			<?php if (!empty($url->pixels)): ?>
				&nbsp;&nbsp;&bullet;&nbsp;&nbsp;
				<a href="#" class="tooltip" data-content="<?php echo ucwords(str_replace(",", ", ", $url->pixels)) ?>"><span><i class='glyphicon glyphicon-filter'></i> <?php echo e('Pixels')?></span></a>
			<?php endif ?>				
			<?php if (!empty($url->description)): ?>
				&nbsp;&nbsp;&nbsp;					
				<a href="javascript:void(0)" class="tooltip" data-content="<?php echo $url->description ?>"><strong><?php echo e("View Note") ?></strong></a>
			<?php endif ?>
		</p>
		<ul class="toggle">
			<li class="lock-url-<?php echo $url->id ?>">
				<?php if ($url->public): ?>
					<a href="#private" class="ajax_call" data-id="<?php echo $url->id ?>" data-action="lock" data-class="lock-url-<?php echo $url->id ?>">
						<i class='glyphicon glyphicon-eye-open'></i> <?php echo e('Public')?>
					</a>
				<?php else: ?>
					<a href="#public" class="ajax_call" data-id="<?php echo $url->id ?>" data-action="unlock" data-class="lock-url-<?php echo $url->id ?>">
						<i class='glyphicon glyphicon-eye-close'></i> <?php echo e('Private')?>
					</a>
				<?php endif ?>
			</li>
			<li>
				<span><i class='glyphicon glyphicon-time'></i> <?php echo Main::timeago($url->date) ?></span>
			</li>						
		</ul>
	</td>
	<td class="va-middle">
		<div class="short-url">
			<a href="<?php echo ($url->domain ? $url->domain : $this->config["url"]) ?>/<?php echo $url->alias.$url->custom ?>" target="_blank">
				<span class="url-first-part"><?php echo ($url->domain ? $url->domain : $this->config["url"]) ?></span>/<span class="url-last-part"><?php echo $url->alias.$url->custom ?></span>
			</a>
			<p class="copy matbtn" data-clipboard-text="<?php echo ($url->domain ? $url->domain : $this->config["url"]) ?>/<?php echo $url->alias.$url->custom ?>"><?php echo e("Copy")?></p>												
		</div>
	</td>
	<td class="center">
		<a href="<?php echo $this->config["url"] ?>/<?php echo $url->alias.$url->custom ?>+" target="_blank" class="link-clickz"><?php echo $url->click ?></a>
	</td>
	<td class="center">
		<div class="dropdown In_dropdown">
			<a href="javascript:void(0)" id="urlLabel" class="cusdropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="<?php echo e("Options") ?>">
				<i class="zmdi zmdi-more-vert"></i>
			</a>
			<ul class="dropdown-menu dropdown-menu-right cusdropdown-menu" aria-labelledby="urlLabel">
				<li>
					<a href='<?php echo Main::href("user/edit/{$url->id}")?>'><?php echo e("Edit")?></a>
				</li>
				<li>
					<a href="<?php echo Main::href("user/delete/{$url->id}").Main::nonce("delete_url-{$url->id}") ?>" class="delete"><?php echo e("Delete")?></a>
				</li>
				<li>
					<?php if (!empty($url->bundle)): ?>
					<?php $bundle=$this->db->get("bundle",array("id"=>$url->bundle),array("limit"=>1)) ?>
						<a href="#" class="ajax_call" data-content="<?php echo e("Click to change bundle")?>" data-action="url_bundle_add" data-id="<?php echo $url->id ?>" data-title="<?php echo e("Change Bundle")?>"><?php echo e("Bundle")?>: <?php echo $bundle->name ?></a>
					<?php else:?>
						<a href="#" class="ajax_call" data-content="<?php echo e("Click to add to a bundle")?>" data-action="url_bundle_add" data-id="<?php echo $url->id ?>" data-title="<?php echo e("Add to bundle")?>"><?php echo e("Add to bundle") ?></a>					
					<?php endif ?>
				</li>
				<li>
					<?php if ($url->archived): ?>
						<a href='#unarchive' class='ajax_call' data-action='unarchive' data-id='<?php echo $url->id?>' data-class='return-ajax'><?php echo e("Unarchive")?></a>
					<?php else:?>
						<a href='#archive' class='ajax_call' data-action='archive' data-id='<?php echo $url->id?>' data-class='return-ajax'><?php echo e("Archive")?></a>
					<?php endif ?>
				</li>
				<?php if($this->config["sharing"]): ?>
				<li>
					<a href="https://www.facebook.com/sharer.php?u=<?php echo ($url->domain ? $url->domain : $this->config["url"]) ?>/<?php echo $url->alias.$url->custom ?>" class="u_share"><?php echo e("Share on") ?> Facebook</a>
					<a href="https://twitter.com/share?url=<?php echo ($url->domain ? $url->domain : $this->config["url"]) ?>/<?php echo $url->alias.$url->custom ?>&amp;text=Check+out+this+url" class="u_share"><?php echo e("Share on") ?> Twitter</a>
				</li>
				<?php endif ?>
			</ul>
		</div>
	</td>
</tr><!-- /.url-list -->		