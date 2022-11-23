<?php defined("APP") or die() // Footer ?>
  <?php if ($this->isUser): // Show user page footer ?>
            <footer class="main nousrfoot" style="margin: 0px -15px;padding: 45px 20px 100px;">
                <div class="row">
                  <div class="col-md-5">
                    <?php echo date("Y") ?> &copy; <?php echo $this->config["title"] ?>.
                  </div>
                  <div class="col-md-7 text-right">                                      
                    <?php foreach ($pages as $page):?>        
                      <a href='<?php echo $this->config["url"]?>/page/<?php echo $page->seo ?>' title='<?php echo e($page->name)?>'><?php echo e($page->name)?></a>
                    <?php endforeach; ?>
                    <a href='<?php echo $this->config["url"]?>/contact' title='<?php echo e("Contact")?>'><?php echo e("Contact")?></a> 
                    <div class="languages">
                      <a href="#lang" class="active" id="show-language"><i class="zmdi zmdi-globe"></i> <?php echo e("Language") ?></a>
                      <div class="langs">
                        <?php echo $this->lang(0) ?>
                      </div>          
                    </div>                      
                  </div>
                </div>
            </footer>  
          </div><!--/.content-->
        </div><!--/.row-->
      </div><!--/.container-->      
    </section>
  <?php else: // Show general footer ?>
    <?php if ($this->footerShow): ?>
      <footer class="main nousrfoot">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <?php echo date("Y") ?> &copy; <?php echo $this->config["title"] ?>.
            </div>
            <div class="col-md-7 text-right">
              <?php foreach ($pages as $page):?>        
                <a href='<?php echo $this->config["url"]?>/page/<?php echo $page->seo ?>' title='<?php echo e($page->name)?>'><?php echo e($page->name)?></a>
              <?php endforeach; ?>
              <a href='<?php echo $this->config["url"]?>/contact' title='<?php echo e("Contact")?>'><?php echo e("Contact")?></a>
              <div class="languages">
                <a href="#lang" class="active" id="show-language"><i class="zmdi zmdi-globe"></i> <?php echo e("Language") ?></a>
                <div class="langs">
                  <?php echo $this->lang(0) ?>
                </div>          
              </div>                            
            </div>
          </div>
        </div>
      </footer>      
    <?php endif ?>
  <?php endif ?>   
  <script type="text/javascript">
    <?php 
      $js_lang = array(
        "del" => e("Delete"),
        "url" => e("URL"),
        "count" => e("Country"),
        "copied"  =>  e("Copied"),
        "geo" => e("Geotargeting data for"),
        "error" => e('Please enter a valid URL.'),
        "success" => e('URL has been successfully shortened. Click Copy or CRTL+C to Copy it.'),
        "stats" => e('You can access the statistic page via this link'),
        "copy" => e('Copied to clipboard.'),
        "from" => e('Redirect from'),
        "to" => e('Redirect to'),
        "share" => e('Share this on'),
        "congrats"  => e('Congratulation! Your URL has been successfully shortened. You can share it on Facebook or Twitter by clicking the links below.'),
        "qr" => e('Save QR Code'),
        "continue"  =>  e("Continue"),
        "cookie" => e("This website uses cookies to ensure you get the best experience on our website."),
        "cookieok" => e("Got it!"),
        "cookiemore" => e("Learn more")
      );
    ?>
    var lang = <?php echo json_encode($js_lang) ?>;
  </script>  
	<?php Main::enqueue('footer') ?>
	
	<script type="text/javascript" src="<?php echo $this->theme("assets/js/bootstrap.min.js") ?>"></script>
    <script type="text/javascript" src="<?php echo $this->theme("assets/js/application.fn.js") ?>"></script>
    <script type="text/javascript" src="<?php echo $this->theme("assets/js/application.js") ?>"></script>
	<script type="text/javascript" src="<?php echo $this->theme("assets/js/server.js") ?>"></script>
	<script type="text/javascript" src="<?php echo $this->theme("assets/js/snackbar.min.js") ?>"></script>
	<script type="text/javascript" src="<?php echo $this->theme("assets/js/main.js") ?>"></script>
	<script type="text/javascript">
	$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $("header").addClass("activehead");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $("header").removeClass("activehead");
    }
	});
	
	function In_headerFunction() {
    var element = $("header");
    element.toggleClass("activeheadmenu2");
	}
	
	function In_ShowPosInfo() {
	$(".short-adv-sett").fadeIn(100);
	$(".main-index-top #main-form .main-options").slideDown(100);
	}
	
	//Custom Link Modal
	var $modallink = $('.link-shared'),
    $overlaylink = $('.overlaylink'),
    $showModallink = $('.show-modal'),
    $closelink = $('.closelink');
    
	function In_ShowLinkModal(){
	e.preventDefault();
  
	var windowHeight = $(window).height(),
      windowWidth = $(window).width(),
      modalWidth = windowWidth/2; //50% of window
  
	$overlaylink.show();
	$modallink.css({
		'width' : modalWidth,
		'margin-left' : -modalWidth/2
	});
	}

	$closelink.on('click', function(){
		$overlaylink.hide();
	});
	
	//Sidebar Menu
	$(document).on('click','.quicklinks-toggle__btn',function(){

        $('#focus-overlay').fadeIn(100);
        $('section .sidebar').css('zIndex',999999);
        $('section .sidebar').fadeIn(100);
	});

	$('#focus-overlay').on('click',function (){
    $(this).fadeOut(200);
    $('section .sidebar').css('display','none');

	});
	
	$(document).ready(function(){
        $("#widget_news h3").append(" <i class='zmdi zmdi-info' style='color: #00BCD4;'></i>");
		$("#widget_activities h3").append(" <i class='zmdi zmdi-swap-vertical-circle' style='color: #ff9800;'></i>");
		$("#widget_top_urls h3").append(" <i class='zmdi zmdi-trending-up' style='color: #4caf50;'></i>");
		$("#splash h3, #splash_create h3").append(" <i class='zmdi zmdi-info' style='color: #673ab7;'></i>");
		$("#overlay h3").append(" <i class='zmdi zmdi-info' style='color: #4CAF50;'></i>");
		$("#widget_tools h3").append(" <i class='zmdi zmdi-wrench' style='color: #9c27b0;'></i>");
		$("#widget_export h3").append(" <i class='zmdi zmdi-hourglass-alt' style='color: #4CAF50;'></i>");
	});
	
	//Smooth Scroll
	$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);(e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),$("html, body").animate({scrollTop:e.offset().top},1e3,function(){var t=$(e);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()}))}})
	</script>
	</body>
</html>