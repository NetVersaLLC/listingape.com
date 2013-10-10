<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>ListingApe.com</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script>
function validation() 
{ 
		//First Name
		var chks = document.getElementById('first_name');
		var flag=0;                     
		         
		if(chks.value!="") 
		{ 
			flag=1;
			
		} 
		if(flag==0)
		{
			alert("Please enter First Name.");
			first_name.focus;
			return false;
		}

		//Last Name
		var chks = document.getElementById('last_name');
		var flag=0;                     
		        
		if(chks.value!="") 
		{ 
			flag=1;
			
		} 
		 
		if(flag==0)
		{
			alert("Please enter Last Name.");
			last_name.focus;
			return false;
		}
		
		
		//Phone
		var chks = document.getElementById('phone');
		var flag=0;                     
		
		var stripped = chks.value.replace(/[\(\)\.\-\ ]/g, '');

		if (chks.value == "")
		{
			alert("You didn't enter a phone number.");
			return false;
		}
		else if(isNaN(parseInt(stripped)))
		{
			chks.vlaue="";
			alert("The phone number contains illegal characters.");
			return false;
		}
		else if(!(stripped.length == 10))
		{
			chks.vlaue="";
			alert("The phone number is the wrong length. Make sure you included an area code.\n");
			return false;
		}
		else
		{
			flag=1;
		}
		
		//email 
		var chks = document.getElementById('email');
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var flag=0;                     
		if(chks.value!="") 
		{ 
			flag=1;
		} 
		
		if(flag==0)
		{
			alert("Please enter Email.");
			return false;
		}
		else if(!filter.test(email.value)) 
		{
		alert('Please provide a valid email address');
		email.focus;
		return false;
		}


		
		//Confirm email 
		var chks = document.getElementById('confirm_email');
		    
		var flag=0;                     
		if(chks.value!="") 
		{ 
			flag=1;
		} 
		
		if(flag==0)
		{
			alert("Please enter Confirm Email.");
			return false;
		}
		else if(!filter.test(confirm_email.value)) 
		{
		alert('Please provide a valid Confirm email address');
		email.focus;
		return false;
		}
		
		var email1 = document.getElementById('email').value;
		var email2 = document.getElementById('confirm_email').value;
		var flag=0;                     
		if(email1 == email2) 
		{ 
			flag=1;
		} 
		
		if(flag==0)
		{
			alert("Email and Confirm Email do not match");
			return false;
		}		
		
		
		//Comments 
		var chks = document.getElementById('comments');
		var flag=0;                     
		if(chks.value!="") 
		{ 
			flag=1;
		} 
		
		if(flag==0)
		{
			alert("Please enter Comments .");
			return false;
		}
		//Comments 
		var chks1 = document.getElementById('concaptcha').value;
		var chks2 = document.getElementById('captcha').value;
		var flag=0;                     
		if(chks1 == chks2) 
		{ 
			flag=1;
		} 
		
		if(flag==0)
		{
			alert("Incorrect Captcha");
			return false;
		}		
		
		return true;
	} 
</script>
</head>
<body>
	<div id="main">
                <div class="header">
                    <div class="logo"><a href="index.html"><img src="images/logo.png" width="282" height="63" border="0" /></a></div>
                    <div class="call">Call Us Now!<span class="call2"> 888-6000-APE</span></div>
                    <div class="follow"><a target="_blank" href="http://www.facebook.com/listingape"><img src="images/fb.png" width="25" height="25" /></a>
                    <a target="_blank" href="http://www.twitter.com/listingape"><img src="images/tw.png" width="25" height="25" /></a>
                    <a target="_blank" href="http://www.linkedin.com/company/listingape-com"><img src="images/in.png" width="25" height="25" /></a>
                    </div>
                </div>
        <div class="clear"></div>
                <div class="menu">
                    <ul>
                        <li><a href="index.html" title="home">Home</a></li>
                        <li><a href="learn_more.html" title="Learn More">Learn More</a></li>
                        <li><a href="network.html" title="Network">Network</a></li>
                        <li><a href="get_started.html" title="get started">get started</a></li>
                        <li><a href="pricing.html" title="Pricing">Pricing</a></li>
                        <li class="active"><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                        <li><a href="http://help.listingape.com" title="Help">Help</a></li>
<li><a href="https://sync.listingape.com/users/sign_up?package_id=1" title="Sign Up">Sign Up</a></li>
<li><a href="https://sync.listingape.com/users/sign_in" title="Login">Login</a></li>
                    </ul>   
                </div>
           		  	<div class="clear"></div>
                   <div class="submain_bg">
                    	<div class="bgtext">
                        		 <div class="btexts">Make your business<br />
                        		   <br />
                                 <div class="btext1">the real king of the jungle</div></div>
                         </div>
                    </div>
         <div class="clear"></div>
      <div class="midcontants">
        <div class="headings">Contact Us</div>
        <div class="headingss">Customer service</div>
           <p>For troubleshooting issues, please call our customer service number below<br />
             <strong>888-600-0270</strong></p>
        <div class="headingss">Business Consultants</div>
           <p>To speak to our group of business consultants, please call the sales number below<br />
             <strong>888-6000-APE</strong><br />
             <strong>888-600-0273</strong><br />
             <br />
             To have one of our agents call you with more information, please click here to fill out our online form. <br />
             To contact by email – email us at <a href="mailto:info@listingape.com" class="title">info@listingape.com</a></p>
        <div class="headingss">Mailing Address</div>
        <p>c/o The Silverback Gorilla<br />
             30251 Golden Lantern Suite E, #216<br />
             Laguna Niguel CA, 92677<br />
           </p>
        <div class="contactform">
          <table width="537" border="0" cellspacing="0" cellpadding="0">
          <form action="sendemail.php" method="post" name="online_form" id="online_form" onsubmit="return validation();">
            <tr>
              <td width="933" align="left" valign="top"><img src="images/contact-top.png" width="537" height="10" /></td>
            </tr>
            <tr>
              <td align="center" valign="top" class="contactbg"><table width="500" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="30" colspan="2" align="left" valign="middle" class="heading1">Online Form:</td>
                </tr>
                <?php if(isset($_GET["m"]) && $_GET["m"] != "") {
				?>
				<tr>
                  <td height="30" colspan="2" align="left" valign="middle" class="successmsg">Thank you very much for contacting us, we have recieved your email and we will contact you soon.</td>
                </tr>
				<?php }?>                
                <tr>
                  <td height="40" align="left" valign="middle">First Name:</td>
                  <td align="left" valign="middle"><input name="first_name" type="text" class="textbox" id="first_name" /></td>
                </tr>
                <tr>
                  <td height="40" align="left" valign="middle">Last Name:</td>
                  <td align="left" valign="middle"><input name="last_name" type="text" class="textbox" id="last_name" /></td>
                </tr>
                <tr>
                  <td height="40" align="left" valign="middle">Phone:</td>
                  <td align="left" valign="middle"><input name="phone" type="text" class="textbox" id="phone" /></td>
                </tr>
                <tr>
                  <td height="40" align="left" valign="middle">Email:</td>
                  <td align="left" valign="middle"><input name="email" type="text" class="textbox" id="email" /></td>
                </tr>
                <tr>
                  <td height="40" align="left" valign="middle">Confirm email:</td>
                  <td align="left" valign="middle"><input name="confirm_email" type="text" class="textbox" id="confirm_email" /></td>
                </tr>
                <tr>
                  <td height="40" align="left" valign="top">Comments:</td>
                  <td align="left" valign="middle"><textarea name="comments" cols="40" id="comments"></textarea></td>
                </tr>
<?php
								@session_start();
								$string = strtoupper(substr(md5(uniqid(rand())),0,6));
								$string = str_replace("0","9",$string);
								$string = str_replace("O","P",$string);
								$string = str_replace("D","P",$string);
								$_SESSION["myCAPTCHA"] = $string;
							?>
<tr>
                  <td height="40" align="left" valign="top"></td>
                  <td align="left" valign="middle">
                  <br />
                  <img src="js/captcha.php" class= "four columns alpha">
							<input type="hidden" name="concaptcha" id="concaptcha" value="<?php echo $_SESSION["myCAPTCHA"]; ?>" />
                            <br />  <br /> 
                            <input type="text" name="captcha" id="captcha" maxlength="6" placeholder="Enter Image Text..." class= "textbox">
                   </td>
                </tr>                            
							
							              
                <tr>
                  <td height="40" align="left" valign="middle">&nbsp;</td>
                  <td height="45" align="left" valign="bottom"><input name="Submit" type="submit" class="go" id="button" value="" /></td>
                </tr>
              </table></td>
            </tr>
            <tr>
              <td align="left" valign="top"><img src="images/contact-bot.png" width="537" height="10" /></td>
            </tr>
            </form>
          </table>
        </div>
        <p><br />
        </p>
      </div>
      <div class="footer">
         		<div class="footermenu">
         			<ul>
                        <li class="active"><a href="index.html" title="home">Home</a><span> | </span></li>
                        <li><a href="learn_more.html" title="Learn More">Learn More</a><span> | </span>
                        <li><a href="network.html" title="Network">Network</a><span> | </span></li>
                        <li><a href="get_started.html" title="get started">Get Started</a><span> | </span></li>
                        <li><a href="pricing.html" title="Pricing">Pricing</a><span> | </span></li>
                        <li><a href="contact_us.html" title="Contact Us">Contact Us</a><span> | </span></li>
                        <li><a href="http://help.listingape.com" title="Help">Help</a><span> | </span></li>
<li><a href="https://sync.listingape.com/users/sign_up?package_id=1" title="Sign Up">Sign Up</a><span> | </span></li>
<li><a href="https://sync.listingape.com/users/sign_in" title="Login">Login</a></li>
                    </ul>   
                 </div> 
                 <div class="clear"></div>  
                 <div class="tootertext">
                 Copyright © 2013 <a href="index.html" class="text3">ListingApe.com</a> All Rights Reserved.&nbsp;&nbsp;<a href="http://listingape.com/privacy.html" class="flink">Privacy</a><span>&nbsp;|&nbsp;</span><a href="https://sync.listingape.com/terms"class="flink">Terms</a>
                 </div>
         </div>
     </div>
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100648378); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100648378ns.gif" /></p></noscript><script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100655929); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100655929ns.gif" /></p></noscript></body>
</html>
