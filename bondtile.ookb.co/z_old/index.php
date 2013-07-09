<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Bond Tile &amp; Stone - Professional Installation</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    
    <?php include 'php/quotes.php'; ?>
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/thickbox.js"></script>
	
	<style type="text/css" media="all">@import url(bt.css);</style>
	<style type="text/css" media="all">@import "js/thickbox.css";</style>

</head>
<body id="home">
	
<!-- ******************************** wrapper ************************************ -->
    
	<div id='wrapper'>
    	<div class='pad'>

<!-- ******************************** header ************************************ -->

       		<!-- START HEADER --> 		
        	<div id='header'>
    
            	<div class='pad shadow'>
            		<ul id='nav'>
                		<li><a href='index.php'>Home</a></li>
                		<li><a href='about.php' class='active'>About</a></li>
                		<li><a href='work.php'>Portfolio</a></li>
            	    	<li><a href='bid_page.php'>Request a Bid</a></li>
        	    	</ul>
        		</div>    
            
        		<div id='logo-title'> 
                	<div id='logo' class='left'>
                    	<img src='i/logo.png' alt='Bond Tile and Stone Logo' title='Bond Tile and Stone Logo' />
                	</div>
                
               		<div id='slogan' class='right'>
                   		<p>Professional Installation</p>
               		</div>
           			<div class='clear'></div>
           		</div>
                      
        	</div>
       		<!-- END HEADER -->

<!-- ******************************** content ************************************ -->

        	<!-- START MAIN CONTENT -->
  			<div id='main'>
        	
            	<div id='trowel' class='left'>
            		<img src='i/Trowel_Sm.png' alt='Trowel Image' title='Trowel Image' />
            	</div>
               
            	<div id='quotes'>
   					<?php randomQuote();?>
            	</div>
                    
        	</div>
        	<!-- END MAIN CONTENT -->

<!-- ******************************** footer ************************************ -->

        	<!-- START FOOTER CONTENT -->
			<div id='footer' class='shadow'>
				<div class='pad'>
		        	<p>&copy; <?php echo date("Y") ?> Bond Tile and Stone. Design: <a href='http://www.zindrendesign.com' class='external'>Zindren Design</a>
					</p>

		        	<!-- START ADDRESS BLOCK -->
            		<div id='address' class='shadow'>
           				<div class='pad orange white_type'>
           					<ul>
                				<li class='name'>Bond Tile &amp; Stone</li>
                    			<li>2926 Buchanan Street</li>
                    			<li>Minneapolis, MN 55418</li>
                    			<li>Phone: (612) 386.4007</li>
							</ul>            
            			</div>
        			</div>
		        	<!-- END ADDRESS  -->

        		</div>
        	</div>
			<!-- END FOOTER  -->

<!-- ******************************* end all content ********************************** -->

		</div>
	</div>
	<!-- END WRAPPER  -->

</body>
</html>