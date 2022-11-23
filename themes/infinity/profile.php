<?php defined("APP") or die() // Public Profile ?>
<section class="under-head-cont">
<div class="infinity-profile">
	<div class="infinity-profile-nav">
		<div class="container">
			<div class="text-center">
				<div class="col-md-2"></div>
				<div class="col-md-8">			
					<div class="avatar-holder row">
						<img src="<?php echo $user->avatar ?>" alt="<?php echo $user->username ?>'s Avatar" class="avatar pull-left">
						<div class="infoz">
							<strong title="<?php echo $user->username ?>"><?php echo $user->username ?></strong>
							<a href="<?php echo Main::href("profile/{$user->username}") ?>" class="btn mdbtn btn-primary pull-right pro-mdbtn"><?php echo e("View Profile") ?></a>
							<br>
							<span><?php echo e("Since") ?> <?php echo date("F, Y",strtotime($user->date)) ?></span>
						</div>
						<div class="btn-group">
							<a href="<?php echo Main::href("profile/{$user->username}") ?>" class="btn mdbtn btn-primary pro-mdbtn mobile-btn" style="display:none"><?php echo e("View Profile") ?></a>
							<a href="#" class="btn btn-primary mdbtn ajax_call" data-class="return-ajax" data-id="<?php echo base64_encode(Main::strrand(3).$user->id) ?>" data-active="active" data-action="bundles"><?php echo e("View Bundles") ?></a>										
						</div>
					</div>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-12">
					<div class="row clearfix">
						<div class="nav-item">
							<h2><?php echo $this->count("user_public_urls",$user->id) ?></h2>
							<strong><?php echo e("Public URLs") ?></strong>
						</div>
						<div class="nav-item">
							<h2><?php echo $this->count("user_public_bundles",$user->id) ?></h2>
							<strong><?php echo e("Public Bundles") ?></strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<div class="container content addmargin">
		<div class="row" id="user-content">
			<div class="col-md-8 no-padding-right">
				<?php echo $this->ads(728,0) ?>
				<div class="panel panel-default panel-body return-ajax" id="data-container">
					<h3><?php echo $heading ?></h3>
						<?php foreach ($urls as $url): ?>
							<?php include(TEMPLATE."/shared/public_url_loop.php") ?>
						<?php endforeach ?>
						
						<?php if (count($url) == 0) { ?>
						<div class="center"><span class="zmdi-hc-stack zmdi-hc-lg" style="-webkit-filter: drop-shadow(0px 9px 7px rgba(195, 116, 74, 0.49));filter: drop-shadow(0px 9px 7px rgba(195, 116, 74, 0.49));width: 5em;height: 5em;line-height: 5em;margin-bottom: 19px;"><i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #e06c2c;font-size: 5em;"></i><i class="zmdi zmdi-cloud-off zmdi-hc-stack-1x zmdi-hc-inverse" style="font-size: 33px;"></i></span><br>
							<h3><?php if($this->lang == "de"){
								echo "Geen openbare URL gevonden"; 
							}
							else if ($this->lang == "es"){
								echo "No se encontró una URL pública"; 
							}
							else if ($this->lang == "fr"){
								echo "Aucune URL publique trouvée"; 
							}
							else if ($this->lang == "po"){
								echo "Não foi encontrada nenhuma URL pública"; 
							}
							else if ($this->lang == "ru"){
								echo "Нет открытого URL-адреса"; 
							}
							else if ($this->lang == "th"){
								echo "ไม่พบ URL สาธารณะ"; 
							}
							else if ($this->lang == "ar"){
								echo "لم يتم العثور على عنوان ورل عام"; 
							}
							else{
								echo "No Public URL Found"; 
							} ?></h3>
						</div> 
						<?php } ?>
						
						<?php echo $pagination ?>
				</div>	
			</div>
			<div class="col-md-4">
				<?php echo $this->widgets("social_count") ?>
				<?php echo $this->ads(300,0) ?>
			</div>
		</div>
	</div>
</section>