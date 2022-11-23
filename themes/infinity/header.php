<?php defined("APP") or die() ?>
<!DOCTYPE html>
<html lang="<?php if($this->lang != ""){ echo $this->lang; }else{ echo "en"; } ?>" prefix="og: http://ogp.me/ns#">
  <head>       
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" />  
    <meta name="description" content="<?php echo Main::description() ?>" />
    <meta name="keywords" content="<?php echo $this->config["keywords"] ?>" />
	<link rel="shortcut icon" type="image/png" href="<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/img/favicon.png"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <!-- Open Graph Tags -->
    <?php echo Main::ogp(); ?> 

    <title><?php echo Main::title() ?></title> 
        
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->config["url"] ?>/static/css/bootstrap.min.css" rel="stylesheet">
    <!-- Component CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/css/snackbar.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config["url"] ?>/static/css/components.min.css">
    <!-- Required Javascript Files -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
    <script type="text/javascript">
      var appurl="<?php echo $this->config["url"] ?>";
      var token="<?php echo $this->config["public_token"] ?>";
    </script>  
	<?php Main::enqueue() // Add scripts when needed ?>
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>@font-face {font-family: 'Material-Design-Iconic-Font';src: url('<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/fonts/Material-Design-Iconic-Font.woff2?v=2.2.0') format('woff2'), url('<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/fonts/Material-Design-Iconic-Font.woff?v=2.2.0') format('woff'), url('<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/fonts/Material-Design-Iconic-Font.ttf?v=2.2.0') format('truetype');font-weight: normal;font-style: normal;}</style>
  </head>
  <div id="focus-overlay" style="display: none"></div>
  <body<?php echo Main::body_class() ?> id="body">
    <a href="#body" id="back-to-top"><i class="zmdi zmdi-chevron-up"></i></a>
    <?php if($this->isUser): // Show header for logged user ?>
      <header class="app activeheadmenu">
        <div class="navbar" role="navigation">
          <div class="container container-fluid">
            <div class="row">
              <div class="col-md-2">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="zmdi zmdi-more-vert"></i>
                  </button>
				  <button type="button" class="navbar-toggle pull-left quicklinks-toggle__btn">
                    <i class="zmdi zmdi-menu"></i>
                  </button>
                  <a class="navbar-brand" href="<?php echo $this->config["url"] ?>">
                    <?php if (!empty($this->config["logo"])): ?>
                    <img src="<?php echo $this->config["url"] ?>/content/<?php echo $this->config["logo"] ?>" alt="<?php echo $this->config["title"] ?>">
                    <?php else: ?>
                      <?php echo $this->config["title"] ?>
                    <?php endif ?>
                  </a>
                </div>            
              </div>
                <?php echo $this->menu() ?>       
            </div>
          </div>
        </div>     
      </header>
      <section class="under-head-cont">
        <div class="container-fluid">          
          <div class="row">
            <div class="col-md-2 sidebar">
				<div id="offnavmenu">
					<ul class="nav nav-sidebar nav-sidebarz">
						<li>
							<a href="<?php echo Main::href("user") ?>">
								<span class="zmdi-hc-stack zmdi-hc-lg">
									<i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #8BC34A;"></i><i class="zmdi zmdi-home zmdi-hc-stack-1x zmdi-hc-inverse"></i>
								</span>
								<?php echo e('Dashboard')?>
							</a>
						</li>
						<li>
							<a href="<?php echo Main::href("user/archive") ?>">
								<span class="zmdi-hc-stack zmdi-hc-lg">
									<i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #fac539;"></i><i class="zmdi zmdi-archive zmdi-hc-stack-1x zmdi-hc-inverse"></i>
								</span>
								<?php echo e('Archive')?>
							</a>
						</li>
						<li>
							<a href="<?php echo Main::href("user/expired") ?>">
								<span class="zmdi-hc-stack zmdi-hc-lg">
									<i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #ed8d00;"></i><i class="zmdi zmdi-calendar zmdi-hc-stack-1x zmdi-hc-inverse"></i>
								</span>
								<?php echo e('Expired Links')?>
							</a>
						</li>
						<li>
							<a href="<?php echo Main::href("user/bundles") ?>">
								<span class="zmdi-hc-stack zmdi-hc-lg">
									<i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #03A9F4;"></i><i class="zmdi zmdi-layers zmdi-hc-stack-1x zmdi-hc-inverse"></i>
								</span>
								<?php echo e('Bundles')?>
							</a>
						</li>
						<hr>
						<li<?php echo (!$this->pro() ? ' class="locked"': '') ?>>
							<a href="<?php echo Main::href("user/splash") ?>">
								<span class="zmdi-hc-stack zmdi-hc-lg">
									<i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #f35d4d;"></i><i class="zmdi zmdi-open-in-browser zmdi-hc-stack-1x zmdi-hc-inverse"></i>
								</span>
								<?php echo e('Splash Pages')?>
								<?php echo (!$this->pro() ? '<span class="label label-secondary pull-right">'.e('Pro').'</span>': '') ?>
							</a>
						</li>
						<li<?php echo (!$this->pro() ? ' class="locked"': '') ?>>
							<a href="<?php echo Main::href("user/overlay") ?>">
								<span class="zmdi-hc-stack zmdi-hc-lg">
									<i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #6a7f9a;"></i><i class="zmdi zmdi-view-web zmdi-hc-stack-1x zmdi-hc-inverse"></i>
								</span>
								<?php echo e('Overlay Pages')?>
								<?php echo (!$this->pro() ? '<span class="label label-secondary pull-right">'.e('Pro').'</span>': '') ?>
							</a>
						</li>
						<li<?php echo (!$this->pro() ? ' class="locked"': '') ?>>
							<a href="<?php echo Main::href("user/pixels") ?>">
								<span class="zmdi-hc-stack zmdi-hc-lg">
									<i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #795548;"></i><i class="zmdi zmdi-flare zmdi-hc-stack-1x zmdi-hc-inverse"></i>
								</span>
								<?php echo e('Tracking Pixels')?>
								<?php echo (!$this->pro() ? '<span class="label label-secondary pull-right">'.e('Pro').'</span>': '') ?>
							</a>
						</li>
			
						<?php
						$public = $this->user->public ?"<span class='label label-primary pull-right'>".e("Online")."</span>"  : "<span class='label label-danger pull-right'>".e("Offline")."</span>";
						?>
						<hr>
						<li>
							<a href="<?php echo Main::href("profile/{$this->user->username}") ?>">
								<span class="zmdi-hc-stack zmdi-hc-lg">
									<i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #8d73cc;"></i><i class="zmdi zmdi-face zmdi-hc-stack-1x zmdi-hc-inverse"></i>
								</span>
								<?php echo e('Public Profile')?><?php echo $public?>
							</a>
						</li>
						
						<?php
						if($this->config["api"]){
							echo '<li><a href="'.Main::href("user/tools").'"><span class="zmdi-hc-stack zmdi-hc-lg"><i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #4caf50;"></i><i class="zmdi zmdi-wrench zmdi-hc-stack-1x zmdi-hc-inverse"></i></span> '.e('Tools').'</a></li>';
						}
						?>
						
						<li>
							<a href="<?php echo Main::href("user/settings") ?>">
								<span class="zmdi-hc-stack zmdi-hc-lg">
									<i class="zmdi zmdi-circle zmdi-hc-stack-2x" style="color: #6eceba;"></i><i class="zmdi zmdi-settings zmdi-hc-stack-1x zmdi-hc-inverse"></i>
								</span>
								<?php echo e('Settings')?>
							</a>
						</li>
						<hr>
						<?php
						if(!empty($option) && is_array($option)){
							foreach ($option as $item) {
								if(isset($item["href"]) && isset($item["text"])){
									 echo '<li><a href="'.Main::clean($item["href"],3,TRUE).'" rel="custom"> '.Main::clean($item["text"],3,TRUE).' </a></li>';
								}
							}
						}
						?>				
					</ul>
					
					<h3><?php echo e("Account info")?>
					<?php
					if (!$this->config["pro"] || $this->pro()){
						echo '<span class="label label-primary pull-right">'.e("Pro").'</span>';
					}else{
						echo '<span class="label label-primary pull-right">'.e("Free").'</span>';
					}	 
					?>            	
					</h3>
					<div class="side-stats side-statz">
						<p><i class="zmdi zmdi-link"></i> <span><?php echo $this->count("user_urls")?></span> <br><?php echo e('URLs')?></p>
						<p><i class="zmdi zmdi-mouse"></i> <span><?php echo $this->count("user_clicks")?></span> <br><?php echo e('Clicks')?></p>    
						<p><i class="zmdi zmdi-layers"></i> <span><?php echo $this->count("user_bundles")?></span> <br><?php echo e('Bundles')?></p>			         
						<p><i class="zmdi zmdi-eye"></i> <span><?php echo $this->db->count("bundle","userid='{$this->userid}'","view")?></span> <br><?php echo e('Bundles Views')?></p>
					</div>
					
					<?php
					if($this->pro()){
					$sp = $this->db->count("splash","userid='{$this->userid}'") / $this->max_splash *100;
					echo "<h3>".e("Splash Pages")."</h3>";
					echo '<div class="progress side-stats">
							  <div class="progress-bar'.($sp >= 80?' progress-bar-danger':'').'" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$sp.'%;">
							  </div>
						  </div>';								
					}
					
					if($this->pro() && $this->config["pro"]){
					$p = $this->db->count("splash","userid='{$this->userid}'") / $this->max_splash *100;
					echo "<h3>".e("Next Payment")."</h3>";
					echo '<div class="side-stats"><p><b><i class="zmdi zmdi-calendar"></i></b><span>'.date("F d, Y",strtotime($this->user->expiration)).'</span> </p></div>';								
					}
					?>
				</div>
            </div> 
            <div class="col-md-10 content">     
    <?php else: ?>
      <?php if($this->headerShow): // Show header ?>    
        <header class="activeheadmenu other-header">
          <div class="navbar" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" onclick="In_headerFunction()">
                  <i class="zmdi zmdi-menu"></i>
                </button>
                <a class="navbar-brand" href="<?php echo $this->config["url"] ?>">
                  <?php if (!empty($this->config["logo"])): ?>
                  <img src="<?php echo $this->config["url"] ?>/content/<?php echo $this->config["logo"] ?>" alt="<?php echo $this->config["title"] ?>">
                  <?php else: ?>
                    <?php echo $this->config["title"] ?>
                  <?php endif ?>
                </a>
              </div>
                <?php echo $this->menu() ?>
            </div>
          </div>    
        </header>      
      <?php endif ?>      
    <?php endif ?>