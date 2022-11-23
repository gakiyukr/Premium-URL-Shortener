<?php defined("APP") or die() // Main Page ?>
<?php if($this->headerShow): // Show header ?>
<style>.other-header{display:none}</style>    
<header>
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
<section class="under-head-cont main-index-top" style="background-image:url(<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/img/back.jpg);">

<svg id="wave" viewBox="0 0 100 15" style="position: absolute;bottom: 0;z-index: 0;"><path fill="#fff" opacity="0.5" d="M0 30 V15 Q30 3 60 15 V30z"></path><path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z"></path></svg>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="promo">
          <h1>
            <?php echo $this->config["title"] ?>            
          </h1>
		  <span><?php echo $this->config["description"] ?></span>
        </div>
        <?php echo Main::message() ?>
        <?php echo $this->shortener(array("multiple"=>FALSE)) ?>
        <div class="call-to-action">
          <a href="<?php echo Main::href("user/register") ?>" class="mdbtn btn btn-primary btn-lg"><?php echo e("Get Started") ?></a>
          <a href="#more" class="learn-more-index"><?php echo e("Learn More") ?></a>
        </div>
      </div>
    </div>
  </div>  
</section>
<?php if($this->history()): ?>
  <?php // If anon user has history show it otherwise show landing page ?>
<?php else: ?>
<section class="light">
    <div class="container">
      <div class="row featurette">
	  <h2 class="center">
		<?php echo e("One short link, infinite possibilities.") ?>
	  </h2>
	  <p class="text-center featureP">
        <?php echo e("A short link is a powerful marketing tool when you use it carefully. It is not just a link but a medium between your customer and their destination. A short link allows you to collect so much data about your customers and their behaviors.") ?>
      </p>
        <div class="col-sm-4">
          <div class="feature-img" style="background-image:url(<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/img/lock.png)"></div>
          <h3><?php echo e("Password Protect") ?></h3>
          <p><?php echo e("Set a password to protect your links from unauthorized access.") ?></p>
        </div>
        <div class="col-sm-4">
          <div class="feature-img" style="background-image:url(<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/img/globe.png)"></div>
          <h3><?php echo e("Geotarget") ?></h3>
          <p><?php echo e("Geotarget your links to redirect visitors to specialized pages and increase your conversion.") ?></p>
        </div>      
        <div class="col-sm-4">
          <div class="feature-img" style="background-image:url(<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/img/case.png)"></div>
          <h3><?php echo e("Bundle") ?></h3>
          <p><?php echo e("Bundle your links for easy access and share them with the public on your public profile.") ?></p>
        </div>
      </div>    
    </div>
  </section>
  <section id="more">
    <div class="container">
      <div class="row feature" id="infinity-feature">
        <div class="col-sm-7 image">
          <img src="<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/img/stats.png" alt="<?php echo e("Complete Analytics") ?>">
        </div>
        <div class="col-sm-5 info">
          <h2>
            <small><?php echo e("Complete Analytics") ?></small>
            <?php echo e("Track each and every user who clicks a link.") ?>
          </h2>
		  <div class="feature-border"></div>
          <p>
            <?php echo e("Our system allows you to track everything. Whether it is the amount of clicks, the country or the referrer, the data is there.") ?>
          </p>
        </div>      
      </div>      
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row feature" id="infinity-feature">
        <div class="col-sm-5 info">
          <h2>
            <small><?php echo e("Powerful Dashboard") ?></small>
            <?php echo e("One dashboard to manage everything.") ?>
          </h2>
		  <div class="feature-border"></div>
          <p>
            <?php echo e("Our dashboard lets you control everything. Manage your URLs, create bundles, manage your splash pages and your settings, all from the same dashboard.") ?>
          </p>
        </div>
        <div class="col-sm-7 image">
          <img src="<?php echo $this->config["url"] ?>/themes/<?php echo $this->config["theme"] ?>/img/dashboard.png" alt="<?php echo e("Powerful Dashboard") ?>">
        </div>
      </div>         
    </div> 
  </section>
<?php endif; ?>
<?php $this->public_list() ?>
<section class="infinity-stats">
  <div class="container">
    <div class="row stats">
      <div class="col-xs-4">
		<div class="infinity-facts">
			<i class="zmdi zmdi-link"></i>
			<p><?php echo e("URLs Created") ?></p>
			<h3><?php echo $this->count("urls") ?></h3>
		</div>
      </div>
      <div class="col-xs-4">
		<div class="infinity-facts">
			<i class="zmdi zmdi-mouse"></i>
			<p><?php echo e("Clicks Served") ?></p>
			<h3><?php echo $this->count("clicks") ?></h3>
		</div>
      </div>
      <div class="col-xs-4">
		<div class="infinity-facts">
			<i class="zmdi zmdi-account"></i>
			<p><?php echo e("Users Registered") ?></p>
			<h3><?php echo $this->count("users") ?></h3>
		</div>
      </div>
    </div>
  </div>
</section>
<section class="infinity-cta">
	<div class="container">
		<div class="row stats">
			<h2 class="center">
			<?php if($this->lang == "de"){
			echo "De ultieme URL-verkorter die eenvoudig is,<br>krachtig en gemakkelijk."; 
			}
			else if ($this->lang == "es"){
				echo "The Ultimate URL Shortener que es simple,<br>poderoso y fácil."; 
			}
			else if ($this->lang == "fr"){
				echo "Le raccourci Ultimate URL est simple,<br>puissant et facile."; 
			}
			else if ($this->lang == "po"){
				echo "The Ultimate URL Shortener é simples,<br>poderoso e fácil."; 
			}
			else if ($this->lang == "ru"){
				echo "Ultimate URL Shortener, который прост,<br>мощным и легким."; 
			}
			else if ($this->lang == "th"){
				echo "URL Shortener ขั้นสุดท้ายที่ง่าย,<br>มีประสิทธิภาพและใช้งานง่าย"; 
			}
			else if ($this->lang == "ar"){
				echo "في نهاية المطاف ورل شورتينر هذا بسيط،<br>قوية وسهلة."; 
			}
			else{
			echo "The Ultimate URL Shortener that's simple,<br>powerful, and easy."; 
			} ?>
			</h2>
			<p>
			<?php if($this->lang == "de"){
			echo "Laat de kracht van de link los"; 
			}
			else if ($this->lang == "es"){
				echo "Libera el poder del enlace"; 
			}
			else if ($this->lang == "fr"){
				echo "Libérez la puissance du lien"; 
			}
			else if ($this->lang == "po"){
				echo "Liberte o Poder do Link"; 
			}
			else if ($this->lang == "ru"){
				echo "Раскрыть силу ссылки"; 
			}
			else if ($this->lang == "th"){
				echo "ปลดปล่อยพลังของลิงก์"; 
			}
			else if ($this->lang == "ar"){
				echo "إطلاق العنان للقوة من الارتباط"; 
			}
			else{
			echo "Unleash the Power of the Link"; 
			} ?>
			</p>
			<div class="col-md-12">
				<a href="<?php echo Main::href("user/register") ?>" class="infbtn"><?php echo e("Get Started") ?></a>
			</div>
		</div>
	</div>
</section>