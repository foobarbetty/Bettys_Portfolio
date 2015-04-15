<!DOCTYPE html>
<!-- ============================================================================
Author:     Elisabete Vail
Date:       April 2015
Project:    FooBarBetty Website with SweetCaptcha
============================================================================= -->
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>FooBar Betty</title>
        <link rel="stylesheet" href="foobarbetty.css" type="text/css"/>
	<script language="javascript" type="text/javascript">

		// Click on Music Note button to play song and change button image
    		function PlaySong(audioFile) {
    			var song = document.getElementById('myAudio');
    			var btnImage = document.getElementById('btnImage');
    			if (song.paused){ 
    				song.play();
    				btnImage.src="images/icon_pause_wht.png";
    			} else { 
    				song.pause();
    				btnImage.src="images/icon_play_wht.png";
    			}
		}

		function ColExp(sectionNum){ 
			// Identify section to be expanded/collapsed
 			var sectionNum=document.getElementById(sectionNum);
 			//If section is already open, close it and replace with intro
 			if(sectionNum.className=="divVisible"){
 				sectionNum.className="divHidden";
 				intro.className="divVisible";
 			} 
 			//Otherwise if section is closed, close all other sections before opening
 			else if(sectionNum.className=="divHidden"){
 				intro.className="divHidden";
 				foo_what.className="divHidden";
 				about_me.className="divHidden";
 				portfolio.className="divHidden";
 				contact.className="divHidden";
 				sectionNum.className="divVisible";
 			}
 		}	
	</script>
    </head>
<body>
<div id="main_container">	
<!-- ============================================================================
Page Header 
============================================================================= -->	
<header onmousedown='return false;' onselectstart='return false;'>
	<a onclick="return ColExp('about_me')"><img src="images/Profile_Mint.jpg" alt="FooBar_Profile_Photo"/></a>
	<span class="logo_1"><a onclick="return ColExp('foo_what')">FooBar</a>(<b>Betty</b>)</span><br>
	<span class="logo_2">{coder; builder; problemSolver;}</span>
</header>

<!-- ============================================================================
Circle Buttons Section
============================================================================= -->
<div id="circle_buttons" onmousedown='return false;' onselectstart='return false;'>
<ul id="cb">	
	<li id="c1"><button class="round-button" type=button onclick="return ColExp('intro')">Hey There</button></li>
	<li id="c2"><button class="round-button" type=button onclick="return ColExp('about_me')">About Me</button></li>
	<li id="c3"><button class="round-button" type=button onclick="window.open('http://www.foobarbetty.com/misc/BettyVail_Resume.pdf','_blank')">Resume</button></li>
	<li id="c4"><button class="round-button" type=button onclick="return ColExp('portfolio')">Portfolio</button></li>
	<li id="c5"><button class="round-button" type=button onclick="return ColExp('contact')">Say Hello</button></li>
</ul>
</div><!-- circle buttons-->

<!-- ============================================================================
Intro Section
============================================================================= -->
<div id="intro" class="divVisible" onmousedown='return false;' onselectstart='return false;'>
	<h2>Hey there! How’s it going?</h2>
	<p>
		I'm Elisabete (<i>eee-lisa-bet</i>), but you can call me “Betty” and I write code to build tools that solve problems. This is my personal website and <a onclick="return ColExp('portfolio')">portfolio</a>! 
		<br><br>
		The term <a onclick="return ColExp('foo_what')">“FooBar”</a> is often used in Computer Science as a placeholder variable name. I've adopted this moniker as a nod to the ever growing roster of titles associated with the work I do.
		<br><br>
		Have fun exploring the website! Please reach out and <a onclick="return ColExp('contact')">"Say Hello"</a>, if you'd like to know more!
		<br><br>
	</p>	
</div>	<!-- intro -->

<!-- ============================================================================
FooWhat Section
============================================================================= -->
<!-- This section will expand/collapse -->
<div id="foo_what" class="divHidden" onmousedown='return false;' onselectstart='return false;'>
<img src="images/FooWhat.png" alt="Foo What?" width="100%"/>
</div><!-- end of foowhat -->

<!-- ============================================================================
About Me Content
============================================================================= -->
<!-- This section will expand/collapse -->
<div id="about_me"class="divHidden" onmousedown='return false;' onselectstart='return false;'>
<div id="about_me_1">
	<h2>About Me</h2>
	<p>
		I have an insatiable need to interact with information in a tactile way.
		<br><br>
		As a child, I interpreted the world around me using colored pencils and Legos. As a young adult, I explored my Azorean heritage via a wooden boatbuilding apprentinceship. While in college, I fell in love with Computer Science and code is now my medium of choice for creative expression.
		<br><br>
		To follow my journey from Then to Now, click on the numbered links below!
		<br><br>
	</p>	
</div><!-- end of about_me_1 -->

<!-- World Map and buttons-->	
<div id="about_me_2" onmousedown='return false;' onselectstart='return false;'>

	<div id="map"><img src="images/Mint_Map.png" alt="World Map" width="100%"/></div>
	<div id="map_1b"><a href="#map_1" title="Present Day">5</a></div>
	<div id="map_2b"><a href="#map_2" title="The Kid">1</a></div>
	<div id="map_3b"><a href="#map_3" title="The Sailor">2</a></div>
	<div id="map_4b"><a href="#map_4" title="The BoatBuilder">3</a></div>
	<div id="map_5b"><a href="#map_5" title="The Student">4</a></div>
	<div id="map_6b"><a href="#map_6" title="A FooBar life">6</a></div>

<!-- Modal Content -->
	<div id="map_1"class="modalDialog"><div>
   		<a href="#close" title="Close" class="close">✕</a>
    		<img src="images/Mint_About_1c.png" alt="Boston" width="100%"/>
	</div></div>
	<div id="map_2"class="modalDialog"><div>
   		<a href="#close" title="Close" class="close">✕</a>
    		<img src="images/Mint_About_2.png" alt="Childhood" width="100%"/>
	</div></div>
	<div id="map_3"class="modalDialog"><div>
   		<a href="#close" title="Close" class="close">✕</a>
    		<img src="images/Mint_About_3.png" alt="Trans-Atlantic" width="100%"/>
	</div></div>
	<div id="map_4"class="modalDialog"><div>
   		<a href="#close" title="Close" class="close">✕</a>
    		<img src="images/Mint_About_4.png" alt="Boatbuilding" width="100%"/>
	</div></div>
	<div id="map_5"class="modalDialog"><div>
   		<a href="#close" title="Close" class="close">✕</a>
    		<img src="images/Mint_About_5.png" alt="College" width="100%"/>
	</div></div>
	<div id="map_6"class="modalDialog"><div>
   		<a href="#close" title="Close" class="close">✕</a>
    		<img src="images/Mint_About_6.png" alt="Conclusion" width="100%"/>
	</div></div>	
</div><!-- end of about_me_2 -->
</div><!-- end of about me section -->

<!-- ============================================================================
Portfolio Section
============================================================================= -->
<!-- Portfolio Container -->
<div id="portfolio" class="divHidden" onmousedown='return false;' onselectstart='return false;'>
<h2>Portfolio</h2>
<p>
	Personally, I think code is BEAUTIFUL, but it can be difficult to present. Here's a sneak peek of the Interactive Coding Portfolio, I've been putting together!
	</br></br>
	The R samples below were formatted using <a href="https://gist.github.com" target="_blank">GitHub Gist</a> and embedded into this page via JavaScript. The rest is pure HTML and CSS. 
	</br></br>
	This section is very much still a work in progress. Have suggestions on how to make this better? Please send them my way!
</p>
<div id="code_samples"> 
<h3>RandomWalk.R</h3>
<div id="sample_1">
<div id="s1a"><script src="https://gist.github.com/foobarbetty/4a43c678279d1205ecb7.js"></script></div>
<div id="s1b"><a href="#plot_1">
	<img src="images/Random_mint_white.png"
	onmouseover="this.src='images/Random_ppya_white.png'" 
	onmouseout="this.src='images/Random_mint_white.png'"/>
</a><p>Click image to expand</p></div>
</div><!-- End of sample_1-->

<h3>ApacheReader.R</h3>
<div id="sample_2">
<div id="s2a"><script src="https://gist.github.com/foobarbetty/f6b07c997ddeb1cde8e1.js"></script></div>
<div id="s2b"><a href="#plot_2">
	<img src="images/Apache_mint_white.png"
	onmouseover="this.src='images/Apache_ppya_white.png'" 
	onmouseout="this.src='images/Apache_mint_white.png'"/>
</a><p>Click image to expand</p></div>
</div><!-- End of sample_2 -->

</div><!-- End of code samples-->


<!-- Modal Content -->
<div id="plot_1" class="modalDialog"><div>
   <a href="#close" title="Close" class="close">✕</a>
    <img src="images/Random_mint_white.png" alt="RandomWalk" width="100%"/>
</div></div>
<div id="plot_2" class="modalDialog"><div>
   <a href="#close" title="Close" class="close">✕</a>
    <img src="images/Apache_mint_white.png" alt="ApacheReader" width="100%"/>
</div></div>
<!-- End of Modal Content-->
</div> <!-- End portfolio section-->

<!-- ============================================================================
Contact Section
============================================================================= -->
<!-- Contact Form Container -->
<div id="contact" class="divHidden">
<h2>Say Hello!</h2>
<?php
    require_once('sweetcaptcha.php');
    if (empty($_POST)) {
?>
	<div id="sweet_captcha">
	<p>	
		Thanks for taking time to check out my site! <br><br>
		To send a message, you'll first need to solve the puzzle below!	
	</p>
	<!-- Contact Form -->
	<div id="puzzle"><form method="post">
		<?php echo $sweetcaptcha->get_html() ?>
    	<input type="submit" value="Submit Captcha">
	</form></div>
	</div>	<!-- End sweet_captcha -->
<?php
  } else {
    // validate captcha
    if (isset($_POST['sckey']) and isset($_POST['scvalue']) and $sweetcaptcha->check(array('sckey' => $_POST['sckey'], 'scvalue' => $_POST['scvalue'])) == "true") 
    { 
      	echo '<script type="text/javascript"> ColExp("contact"); </script>';
?>	
	<div id="contact_form">
	<p>
		Congratulations! You're NOT a spam-bot!<br><br>
		Please use the form below, to say “Hello” or share suggestions!
	</p>
	<!-- Contact Form -->
    <form action="php_files/form_mail.php" method="post">
        <input type="text" id="name" name="name" placeholder="Name" onclick="this.select();"/>
        <input type="email" id="email" name="email"  placeholder="your@email.com" onclick="this.select();"/>
        <textarea id="message" name="message" placeholder="Message" onclick="this.select();"></textarea>
        <input id="submit" name="submit" type="submit" value="Send">
	</form>
	</div>	<!-- End contact_form -->
<?php } 
    else {
      	print '<script type="text/javascript">';
      	print 'alert("Oh no! The Captcha was not solved correctly.\nPlease try again.")';
      	print '</script>';
      	echo '<script type="text/javascript"> location.reload();</script>';
?> 		
<?php
	}
} ?>
</div> <!-- End contact section-->
<!-- ============================================================================
Page Footer
============================================================================= -->
<footer id="footer_links" onmousedown='return false;' onselectstart='return false;'>
<ul id="soc_icons">	
	<li id="s1"><button class="soc-button" type=button onclick="window.open('https://twitter.com/Elisabete','_blank')">
		<img src="images/icon_twitter_wht.png" alt="twitter" width="50">
	</button></li>
	<li id="s2"><audio id="myAudio"><source src="music/TheThingUmmyBob.m4a"/></audio>
		<button class="soc-button" title="'The Thing-Ummy Bob' song by Grace Fields" onclick="PlaySong()">
			<img id="btnImage" src="images/icon_note_wht.png" alt="Play Song" width="100"onmouseover="this.src='images/icon_play_wht.png'" />
		</button>
	</li>
	<li id="s3"><a href="https://github.com/foobarbetty/Bettys_Portfolio/tree/master/FooBarBetty_Website" target="_blank">
		<p>website <- madeFromScratch.FooBar(Betty);</p>
	</a></li>
	<li id="s4"><button class="soc-button" type=button onclick="window.open('https:www.linkedin.com/in/foobarbetty','_blank')">
		<img src="images/icon_link_wht.png" alt="linkedIn" width="100">
	</button></li>	
	<li id="s5"><button class="soc-button" type=button onclick="window.open('https://github.com/foobarbetty','_blank')">
		<img src="images/icon_git_wht.png" alt="GitHub" width="50">
	</button></li>
</ul>
</footer>

<!-- ============================================================================
The End
============================================================================= -->
</div> <!-- close main_container-->
</body>	
</html>







