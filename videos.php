<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sajeer</title>
<meta name="keywords" content="Red Blog Theme, Portfolio Page, Free CSS Templates" />
<meta name="description" content="Red Blog Theme (portfolio page) - Free CSS Templates by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->

</head>
<body>

<div id="templatemo_top_wrapper">
	<div id="templatemo_top">
    
        <div id="templatemo_menu">
                    
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php" class="current">Portfolio</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>    	
        
        </div> <!-- end of templatemo_menu -->
          <div id="twitter">
        	<a href="www.twitter.com/sajeerek ">follow Me <br />
        	on twitter</a>
        </div>
        
  </div>
</div>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    
    	<div id="site_title">
            <h1><a href= target="_parent"><strong>SAJEER EK</strong><span>My Life Journey </span></a></h1>
        </div>
    </div>
</div>

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
		<div id="templatemo_main_top">
        
            <div id="templatemo_content">
            
    
            <h2>Portfolio </h2>
           
        <h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="portfolio.php">Images</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="videos.php">Videos</a></h5 >
    		<div id="gallery">
            <ul>
            
              
                <li>
                    <a href="vid/tit.mp4" title="My Wedding"><embed autostart="false" src="vid/tit.mp4" alt="1" /></a>
                    <h5>Tour</h5>
                    <p></p>
                
                </li>
               
               <li>
                    <a href="vid/michu1.mp4" title="My Wedding"><embed autostart="false" src="vid/michu1.mp4" alt="1" /></a>
                    <h5>Michu</h5>
                    <p></p>
                
                </li> 
                
                 <li>
                    <a href="vid/michu3.mp4" title="My Wedding"><embed autostart="false" src="vid/michu3.mp4" alt="1" /></a>
                    <h5>Michu</h5>
                    <p></p>
                
                </li>
                
                 <li>
                    <a href="vid/oldalb.mp4" title="My Wedding"><embed autostart="false" src="vid/oldalb.mp4" alt="1" /></a>
                    <h5>2006voc</h5>
                    <p></p>
                
                </li>
                 <li>
                    <a href="vid/onam.mp4" title="My Wedding"><embed autostart="false" src="vid/onam.mp4" alt="1" /></a>
                    <h5>CCSIT Onam</h5>
                    <p></p>
                
                </li>
            </ul>
            
            <div class="cleaner"></div>
        </div>
                

            
       	 </div>
            
          
            
       
        	<div class="cleaner"></div>
        </div>
    </div><div id="templatemo_main_bottom"></div>
</div>

<div id="templatemo_footer">

    Copyright © 2020 <a href="index.php">sajeereklive</a> | 
    <a href= target="_parent"></a> by <a href="index.php" target="_parent">sajeer</a>
    <?php
			$today=date('d-m-y');
			print "<p>Date : $today</p>";
			?>
    
</div>

<div align=center> <a href=''></a></div></body>
</html>