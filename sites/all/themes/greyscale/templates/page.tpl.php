<?php // page template ?>

<html>
  <head>
    <title></title>
	
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="Web site" />
    <meta name="description" content="Site description here" />
    <meta name="keywords" content="keywords here" />
    <meta name="language" content="en" />
    <meta name="subject" content="Site subject here" />
    <meta name="robots" content="All" />
    <meta name="copyright" content="Your company" />
    <meta name="abstract" content="Site description here" />
    <meta name="MSSmartTagsPreventParsing" content="true" />
   <!-- <link id="theme" rel="stylesheet" type="text/css" href="style.css" title="theme" />
<script type="text/javascript" language="javascript" src="js/addon.js"></script>
<script type="text/javascript" language="javascript" src="js/custom.js"></script>-->  
  </head>
  <body> 
  
    <!-- top wrapper -->  
    <div id="topWrapper"> 
      <div id="topBanner">
	  <br> <br> <br> 
	 	<h1><font color="#FFFFFF"><?php print $site_name ?></font></h1> 
			 
			  <?php if($page['topBanner']): ?>
       
         	 <?php print render($page['topBanner']); ?>
   
    	 	 <?php endif; ?>
	  </div> 
    </div>  

 <!-- top wrapper -->  
    
    <div id="topnav"> 	 
		<?php if ($main_menu): ?>
		<nav id="main-menu" role="navigation">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see http://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
        <?php print render($page['topnav']); ?>
      <?php endif; ?>

      
      <!--<ul>
        <li id="current" style="border:none">
          <a href="#" shape="rect">Home</a>
        </li>
        <li>
          <a href="#" shape="rect">Products</a>
        </li>
        <li>
          <a href="#" shape="rect">Services</a>
        </li>
        <li>
          <a href="#" shape="rect">News</a>
        </li>
        <li>
          <a href="#" shape="rect">About</a>
        </li>
      </ul> -->
    </div>  
    <!-- end top wrapper -->  

    <div id="wrapper"> 
      <div id="container"> 
        <div id="banner" class="slideshowContainer"> 
          <!-- put your slideshow images here -->  
          <div class="slideshow"> 
            <?php if($page['slideshow']): ?>
       
         	 <?php print render($page['slideshow']); ?>
   
    	 	 <?php endif; ?>
    	 	  
            <a href="http://www.flickr.com/photos/12836528@N00/1161507336" title="Facade" target="_blank" shape="rect"> 
              <img src="http://lh6.ggpht.com/_d6vKxl1jKWk/S9XzN29FXdI/AAAAAAABDAg/3lYLjJQdX8E/facade.jpg" /> 
            </a>  
            

          </div> 
          <div class="slideshowLeftCorner"></div>  
          <div class="slideshowRightCorner"></div>  
          <div class="slideshowBottom"></div> 
        </div>  
        <!--  content -->  
        <div id="content"> 
          <div style="margin-top:20px;"> 
            <div class="one_fourth"> 
              <div class="bloc rounded"> 
                <h3>Jquery on board</h3>  
                <p> 
                  <img src="sites/all/themes/greyscale/images/chart_bar.png" width="48" height="48" style="float:right;margin:0 0 0 8px" /> Lorem ipsum dolor sit amet, turpis egestas commodo, eget non ultrices nec lectus, ac interdum, netus aliquam.                </p> 
              </div> 
            </div>  
            <div class="one_fourth"> 
              <div class="bloc rounded"> 
                <h3>Slideshow</h3>  
                <p> 
                  <img src="sites/all/themes/greyscale/images/folder.png" style="float:right;margin:0 0 0 8px" /> Lorem ipsum dolor sit amet, turpis egestas commodo, eget non ultrices nec lectus, ac interdum, netus aliquam.
                </p> 
              </div> 
            </div>  
            <div class="one_fourth"> 
              <div class="bloc rounded"> 
                <h3>Cufon fonts</h3>  
                <p> 
                  <img src="sites/all/themes/greyscale/images/link.png" style="float:right;margin:0 0 0 8px" /> Lorem ipsum dolor sit amet, turpis egestas commodo, eget non ultrices nec lectus, ac interdum, netus aliquam.
                </p> 
              </div> 
            </div>  
            <div class="one_fourth last"> 
              <div class="bloc rounded"> 
                <h3>Tableless</h3>  
                <p> 
                  <img src="sites/all/themes/greyscale/images/rss2.png" style="float:right;margin:0 0 0 8px" /> Lorem ipsum dolor sit amet, turpis egestas commodo, eget non ultrices nec lectus, ac interdum, netus aliquam.
                </p> 
              </div> 
            </div>  
            <div class="clear"></div>  
            <div> 
              <h1>Heading sample with Cufon font</h1>  
              <p>This template is free. You are free to use it, share it, redistribute it, modify it in any way you want as long as you 
                <strong>keep a link back to doTemplate Website</strong> in the footer. You can remove this link by  
                <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a>.
              </p> 
            </div>  
            <div class="half"> 
              <h3>Heading 3 sample</h3>  
              <p>Lorem ipsum dolor sit amet, turpis egestas commodo, eget non ultrices nec lectus, ac interdum, netus aliquam, vulputate vel reiciendis risus.</p> 
            </div>  
            <div class="half last"> 
              <h3>Lightweight XHTML / CSS template</h3>  
              <p>Lorem ipsum dolor sit amet, turpis egestas commodo, eget non ultrices nec lectus, ac interdum, netus aliquam.</p> 
            </div> 
          </div>  
          <div class="clear"></div> 
        </div>  
        <!-- end content -->  
        <div class="clear" style="height:40px"></div> 
      </div>  
      <!-- end container --> 
    </div>  
    <div id="bottomWrapper"> 
      <div id="footer"> 
        <div class="footer-one-third"> 
          <h2>Company</h2>  
          <ul>
            <li>
              <a href="#" shape="rect">Who are we</a>
            </li>
            <li>
              <a href="#" shape="rect">What we do</a>
            </li>
            <li>
              <a href="#" shape="rect">Contact</a>
            </li>
            <li>
              <a href="#" shape="rect">Partners</a>
            </li>
            <li>
              <a href="#" shape="rect">Links</a>
            </li>
          </ul> 
        </div>  
        <div class="footer-one-third"> 
          <h2>Products</h2>  
          <ul>
            <li>
              <a href="#" shape="rect">Products</a>
            </li>
            <li>
              <a href="#" shape="rect">Services</a>
            </li>
            <li>
              <a href="#" shape="rect">Clients</a>
            </li>
            <li>
              <a href="#" shape="rect">Testimonials</a>
            </li>
            <li>
              <a href="#" shape="rect">Links</a>
            </li>
          </ul> 
        </div>  
        <div class="footer-one-third footer-last"> 
          <h2>Blog archives</h2>  
          <ul>
            <li>
              <a href="#" shape="rect">Lorem ipsum</a>
            </li>
            <li>
              <a href="#" shape="rect">Dolor sit</a>
            </li>
            <li>
              <a href="#" shape="rect">Turpis egestas</a>
            </li>
            <li>
              <a href="#" shape="rect">Commodo</a>
            </li>
            <li>
              <a href="#" shape="rect">Eget non</a>
            </li>
          </ul> 
        </div> 
      </div>  
      <div id="bottom-links"> 
        <div style="padding-top:20px"> 
            
          <a href="http://www.cssmoban.com" title="网页模板" target="_blank">网页模板</a> collect
        </div> 
      </div> 
    </div> 
  </body>
</html>
