<?php defined("APP") or die() ?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>       
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" />  
    <meta name="description" content="<?php echo Main::description() ?>" />
    <!-- Open Graph Tags -->
    <?php echo Main::ogp(); ?> 

    <title><?php echo Main::title() ?></title> 
        
    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->config["url"] ?>/static/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/css/material-design-iconic-font.min.css">
    <style>body{background: transparent;}#frame{height: 60px;background: #28353d;color: #fff;box-shadow: 0 1px 3px rgba(0, 0, 0, 0.28);}.navbar-brand img {max-height: 45px;margin-top: -5px;width: 140px;}.navbar-brand span{color: #fff;text-decoration: none;font-size: 18px;padding-left: 10px;line-height: 30px;}.btn-group{margin: 12px 15px 0 0}.btn-facebook{background: #3B5998;color: #fff;}.btn-twitter{background: #409DD5;color: #fff;}.btn-close{color: #fff;font-size: 24px;padding: 0px 10px;}.u_share {border-radius: 50%;margin: 0px 5px;width: 33px;height: 33px;padding: 3px 0px;font-size: 18px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.16);}@font-face {font-family: 'Material-Design-Iconic-Font';src: url('<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/fonts/Material-Design-Iconic-Font.woff2?v=2.2.0') format('woff2'), url('<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/fonts/Material-Design-Iconic-Font.woff?v=2.2.0') format('woff'), url('<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/fonts/Material-Design-Iconic-Font.ttf?v=2.2.0') format('truetype');font-weight: normal;font-style: normal;}</style>
    <!-- Required Javascript Files -->
    <script type="text/javascript" src="<?php echo $this->config["url"] ?>/static/js/jquery.min.js?v=1.11.0"></script>
    <script type="text/javascript">
      var appurl="<?php echo $this->config["url"] ?>";
      var token="<?php echo $this->config["public_token"] ?>";
    </script>
    <?php Main::enqueue() // Add scripts when needed ?>    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body<?php echo Main::body_class() ?> id="body" style="overflow:hidden">
		<section>
			<div id="frame">
				<div class="row">
					<div class="col-sm-4">
						<a class="navbar-brand" href="<?php echo $this->config["url"] ?>">
							<?php if (!empty($this->config["logo"])): ?>
								<img src="<?php echo $this->config["url"] ?>/content/<?php echo $this->config["logo"] ?>" alt="<?php echo $this->config["title"] ?>">
							<?php else: ?>
								<span><?php echo $this->config["title"] ?></span>
							<?php endif ?>
						</a>
					</div>
					<div class="col-sm-4 hidden-xs">
						<?php echo $this->ads(468,FALSE) ?>
					</div>
					<div class="col-sm-4">
						<div class="btn-group btn-group-sm pull-right">
							<p><?php echo e("Share") ?>:
							<a href="https://www.facebook.com/sharer.php?u=<?php echo $this->user->domain ?>/<?php echo $url->alias.$url->custom ?>" class="btn u_share btn-facebook" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
							<a href="https://twitter.com/share?url=<?php echo $this->user->domain ?>/<?php echo $url->alias.$url->custom ?>&amp;text=Check+out+this+url" class="btn u_share btn-twitter" target="_blank"><i class="zmdi zmdi-twitter"></i></a>
							<a href="<?php echo $url->url ?>" class="btn btn-close" title="<?php echo e("Close") ?>"><i class="zmdi zmdi-close"></i></a>
							</p>
						</div>
					</div>         
				</div><!-- /.row -->
			</div><!-- /#frame -->
			<iframe id="site" src="<?php echo $url->url;?>" frameborder="0" style="border: 0; width: 100%; height: 100%" scrolling="yes"></iframe>
		</section>
    <script type="text/javascript">
       $("iframe#site").height($(document).height()-$("#frame").height());
    </script>
    <?php Main::enqueue('footer') ?>  
  </body>
</html>  