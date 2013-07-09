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
<body id="bid">
	
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

				<div id='request_bid'>
					<div class='text'>
						<p>
							Bond Tile and Stone realizes that every project is unique. Therefore, our bids are based on an in-home visit and free consultation.
						</p>
						<p>
							To request an appointment, please fill out and submit the following information. If you do not hear from us on the next business day, please call (612) 386.4007.
						</p>
					</div>

	                <form id='bid_form' accept-charset="UTF-8" method="post" action="php/bid_script.php">

	             		<h3>Request a Bid</h3>

	                	<!-- name -->
	                	<div class='row'>
	                    	<div class='left labels'>
								<label for='name'>Name:</label>
							</div>
	                        <div class='right inputs'>
	                           	<input type='text' id='name' name='name' size='58' />
							</div>
	          	        </div>

	                	<!-- Telephone -->
	                	<div class='row'>
	                    	<div class='left labels'>
	                            <label for='phone'>Telephone:</label>
							</div>
	                        <div class='right inputs'>
	                        	<input type="text" id='phone' name="phone" size='58' />
	                       	</div
	                	</div>

	                	<!-- Email -->
	                	<div class='row'>
	                    	<div class='left labels'>
	                            <label for='email'>Email:</label>
							</div>
	                        <div class='right inputs'>
	                        	<input type="text" id='email' name="email" size='58' />
	                       	</div
	                	</div>

	                	<!-- Address -->
	                	<div class='row address_bar'>
	                    	<div class='left labels'>
	                            <label for='address1' id='address1_label'>Address - Street:</label>
							</div>
	                        <div class='right inputs'>
	                        	<input type="text" id='address1' name="address1" size='58' />
	                       	</div>
	                       	<div class='left labels two'>
	                            <label for='address2'>City, State and Zip:</label>
							</div>
	                        <div class='right inputs'>
	                        	<input type="text" id='address2' name="address2" size='58' />
	                       	</div>
	                	</div>
	
	                	<!-- Description -->
	                	<div class='row'>
	                    	<div class='left labels'>
	                            <label for='describe'>Please describe your project:</label><br />
							</div>
	                        <div class='right inputs'>
	                            <textarea id='describe' name='describe' cols='58' rows='5'></textarea>
							</div>
	                	</div>

	                   	<!-- Submit Buttons -->
	                	<div class='submit-reset row clear'>
	                		<div class='right'>
		                    	<input type="submit" name='action' value='Send' class='button' />
	    	                	<input type='reset' value='Reset' class='button' />
	    	                </div>
	                	</div>
	               	</form>
	                <!-- end request bid form --> 

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