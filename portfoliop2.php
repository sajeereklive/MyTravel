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
                    <a href="images/gallery/image_01_b.jpg" class="pirobox" title="Project 1"><img src="images/gallery/image_01.jpg" alt="1" /></a>
                    <h5>Project 1</h5>
                    <p></p>
                    <a href="#">Visit</a>
                </li>
                <li>
                    <a href="images/gallery/image_02_b.jpg" class="pirobox" title="Project 2"><img src="images/gallery/image_02.jpg" alt="2" /></a>
                    <h5>Project 2</h5>
                    <p></p>
                    <a href="#">Visit</a>
                </li>
                <li>
                    <a href="images/gallery/image_03_b.jpg" class="pirobox" title="Project 3"><img src="images/gallery/image_03.jpg" alt="3" /></a>
                    <h5>Project 3</h5>
                    <p></p>
                    <a href="#">Visit</a>
                </li>
                <li>
                    <a href="images/gallery/image_04_b.jpg" class="pirobox" title="Project 4"><img src="images/gallery/image_04.jpg" alt="4" /></a>
                    <h5>Project 4</h5>
                    <p></p>
                    <a href="#">Visit</a>
                </li>
                <li>
                    <a href="images/gallery/image_05_b.jpg" class="pirobox" title="Project 5"><img src="images/gallery/image_05.jpg" alt="5" /></a>
                    <h5>Project 5</h5>
                    <p></p>
                    <a href="#">Visit</a>
                </li>
                
                

    <?php
    class display {
    	function pagination($rows, $per_page, $current_page, $page_link) {
    		global $core,$C;
    		
    		// Create a Page Listing
    		$this->pages = ceil($rows / $per_page);
    		
    		// If there's only one page, return now and don't bother
    		if($this->pages == 1) {
    			return;
    		}
    		
    		// Pagination Prefix
                 //   $output = "<!-- Pagination by Dennis Pedrie. Used by Permission -->";
    		$output = "Pages: ";
    		
    		// Should we show the FIRST PAGE link?
    		if($current_page > 2) {
    			$output .= "<a href=\"portfolio.php". $page_link ."?page=1/\" title=\"First Page\"><<</a>";
    		}
    		
    		// Should we show the PREVIOUS PAGE link?
    		if($current_page > 1) {
    			$previous_page = $current_page - 1;
    			$output .= " <a href=\"portfolio.php". $page_link .">page=". $previous_page ."/\" title=\"Previous Page\"><</a>";
    		}
    		
    		// Current Page Number
    		$output .= "<strong>[ ". $current_page ." ]</strong>";
    		
    		// Should we show the NEXT PAGE link?
    		if($current_page < $this->pages) {
    			$next_page = $current_page + 1;
    			$output .= "<a href=\"". $page_link ."?page=". $next_page ."/\" title=\"Next Page\">></a>";
    		}
    		
    		// Should we show the LAST PAGE link?
    		if($current_page < $this->pages - 1) {
    			$output .= " <a href=\"". $page_link ."?page=". $this->pages ."/\" title=\"Last Page\">>></a>";
    		}
    		
    		// Return the output.
    		return $output;
    	}
    }
    $display = new display;
    echo $display->pagination("45", "15", "1", "portfolio.php");
    ?>
               
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