<!DOCTYPE html>
<!-- ============================================================================
Author: 	Elisabete Vail
Date:       September 17, 2014
Project:    FooBarBetty Website with SweetCaptcha
============================================================================= -->
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>FooBar Betty</title>
        <link rel="stylesheet" href="foobarbetty.css" type="text/css"/>
		<script language="javascript" type="text/javascript">

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
 					resume.className="divHidden";
 					portfolio.className="divHidden";
 					contact.className="divHidden";
 					sectionNum.className="divVisible";
 				}

 				//Resume Job expand collapse
 				if(sectionNum.className=="divVisible2"){sectionNum.className="divHidden2";} 
 				else if(sectionNum.className=="divHidden2"){sectionNum.className="divVisible2";}

 			}	
		</script>
    </head>
<body>	
<div id="main_container">	
<!-- ============================================================================
Page Header 
============================================================================= -->	
<header onmousedown='return false;' onselectstart='return false;'>
	<a href="http://www.foobarbetty.com">
		<img src="images/Logo_Mint.png"
			onmouseover="this.src='images/Logo_Papaya.png'" 
			onmouseout="this.src='images/Logo_Mint.png'"/>
	</a>
</header>

<!-- ============================================================================
Circle Buttons Section
============================================================================= -->
<div id="circle_buttons" onmousedown='return false;' onselectstart='return false;'>
<ul id="cb">	
	<li id="c1"><button class="round-button" type=button onclick="return ColExp('intro')">Hey There</button></li>
	<li id="c2"><button class="round-button" type=button onclick="return ColExp('about_me')">About Me</button></li>
	<li id="c3"><button class="round-button" type=button onclick="return ColExp('resume')">Resume</button></li>
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
		I’m Elisabete (pronounced eee-lisa-bet), also known as “Betty” and you’ve just stumbled upon my virtual <a href="https://github.com/foobarbetty" target="_blank">portfolio</a> and <a onclick="return ColExp('resume')">resume</a>.
		<br><br>
		Like the Computer Science variable <a onclick="return ColExp('foo_what')">“FooBar”</a>, the term “Programmer” can represent many concepts. For me, it means using code to build tools that solve problems.
		<br><br>
		I'm especially passionate about using my programming skills to simplify complex data into formats that are both easy on the eyes AND the brain.
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
<p>Since graduating with a degree in Computer Science and Biology, I’ve worked within the Boston software scene as an R programmer, Report Developer, Tech Support Engineer and most recently as a Data Quality Analyst.<br>
<br>Before then, I crewed on Tall Ships and restored wooden boats. Follow my journey by clicking on the Numbered links below!<br><br>
</p>	
</div><!-- end of about_me_1 -->

<!-- World Map and buttons-->	
<div id="about_me_2" onmousedown='return false;' onselectstart='return false;'>

	<div id="map"><img src="images/Mint_Map.png" alt="World Map" width="100%"/></div>
	<div id="map_1b"><a href="#map_1" title="Present Day">1</a></div>
	<div id="map_2b"><a href="#map_2" title="The Kid">2</a></div>
	<div id="map_3b"><a href="#map_3" title="The Sailor">3</a></div>
	<div id="map_4b"><a href="#map_4" title="The BoatBuilder">4</a></div>
	<div id="map_5b"><a href="#map_5" title="The Student">5</a></div>
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
Resume Content
============================================================================= -->
<div id="resume" class="divHidden" onmousedown='return false;' onselectstart='return false;'>
<h2>Resume</h2>
	
<!-- Tools Section -->
<div id="tools">
	<div id="res_1"><a href="misc/EVail_WebResume_2014.pdf" target="_blank">Download PDF Version</a></div>
	<div id="col_1"><img src="images/mint_gears_1.png"/></div>
	<div id="col_2">
		<div id="col_a">
			<div><p><b>Languages:</b></p></div>
			<div><p><b>Platforms:</b></p></div>
			<div><p><b>Databases:</b></p></div>
			<div><p><b>Tools:</b></p></div>
		</div>	
		<div id="col_b">
			<div><p>R, SQL, Java, HTML5, CSS3, JavaScript, PHP, ColdFusion</p></div>
			<div><p>Mac OS X, MS Windows, Linux(various), Amazon EC2</p></div>
			<div><p>MS SQL Server 2008, NuoDB (New SQL), MySQL, ORACLE</p></div>
			<div><p>Amazon Web Services, JasperSoft iReport, JIRA, Wiki, Tortoise SVN, R GUI, RStudio, Sublime, RazorSQL, SQLDeveloper, Vi, Vmware Fusion, Virtual Box, VBulletin, ZenDesk</p></div>
		</div>
	</div>
</div>

<!-- Experience Section -->
<div id="exp">
	<h4>Click Job Titles to Expand</h4>
	<div id="col_1"><img src="images/mint_riveter_1.png"/></div>
	<div id="col_2">
		<!-- Job 0 -->
		<p><b onclick="return ColExp('job_0')">Healthcare Data Quality Analyst</b><br>
		April 2014 - August 2014<br>
		<div id="job_0" class="divHidden2">
		<a href="http://www.humedica.com" target="_blank"> Humedica - An Optum Company,</a> Boston, MA<br>
		<ul>
			<li>Verify data quality, while automating collection, analysis and validation of PetaBytes of Healthcare Data</li>
			<li>Curate Confluence Wiki space, documenting/streamlining Data Quality tools, processes and concepts</li><br>
		</ul></div></p>

		<!-- Job 1 -->
		<p><b onclick="return ColExp('job_1')">Technical Support Engineer</b><br>
		September 2012 – September 2013<br>
		<div id="job_1" class="divHidden2">
		<a href="http://www.nuodb.com" target="_blank"> NuoDB, Inc.,</a> Cambridge, MA<br>
		<ul>
			<li>Moderated NuoDB online Support <a href="http://dev.nuodb.com/community" target="_blank">Forum</a>, clarifying product details for Engineer-based community</li>
			<li>Reproduced/resolved reported issues, working with senior Engineers to Triage JIRA tickets twice weekly</li><br>
		</ul></div></p>

		<!-- Job 2 -->
		<p><b onclick="return ColExp('job_2')">Report Developer, Technical Analyst</b><br>
		June 2011 – September 2012<br>
		<div id="job_2" class="divHidden2">	
		<a href="http://www.bullhorn.com" target="_blank"> Bullhorn, Inc.,</a> Boston, MA<br>
		<ul>
			<li>Wrote and revised custom JasperSoft iReport, SQL and ColdFusion reports and merge documents</li>
			<li>Developed custom R tool for Enterprise team to query SQL database, run calculations and return graphs</li>
			<li>First recipient of peer-nominated “Rock Star Award” in recognition of being a team-player</li><br>
		</ul></div></p>

		<!-- Job 3 -->
		<p><b onclick="return ColExp('job_3')">R Programmer</b><br>
		Summer 2010<br>
		<div id="job_3" class="divHidden2">
		<a href="http://harvardforest.fas.harvard.edu/blog/using-models-project-how-climate-change-might-affect-oak-species-distribution" target="_blank">
		Harvard University/Harvard Forest,</a> Petersham, MA<br>
		Research Experience for Undergraduates (REU)<br><br>
		Wrote series of R scripts which...
		<ul>
			<li>Wrote R scripts and calculations, utilizing R models and Future Emission Scenario variables to filter 81K+ US Forestry records into maps forecasting Climate Change affect on distribution of Oak tree populations</li><br>
		</ul></div></p>
		
		<!-- Job 4 -->
		<p><b onclick="return ColExp('job_4')">Computer Support Technician</b><br>
		Fall 2005 – Spring 2010<br>
		<div id="job_4" class="divHidden2">	
		<a href="http://servicedesk.simmons.edu" target="_blank"> Simmons College, Technology Support,</a> Boston, MA<br>
		<ul>
			<li>Provided campus wide tech support via phone, email and assisting with repairs via “Self-Help” clinics</li>
			<li>Hired and trained junior student staff to diagnose/repair software and hardware issues</li><br>
		</ul></div></p>
		
		<!-- Job 5 -->
		<p><b onclick="return ColExp('job_5')">Sea Squirt Population Modeling Project</b><br>
		Spring 2007 – Summer 2008<br>
		<div id="job_5" class="divHidden2">
		<a href="http://anita.simmons.edu/~mrow" target="_blank"> Simmons College,</a> Boston, MA<br>
		<ul>
			<li>Awarded $10.5K National Science Foundation grant for self-designed interdisciplinary project</li>
			<li>Joined Woods Hole Oceanographic Institute (WHOI) on field expedition to Liquid Jungle Lab in Panama</li>
			<li>Used R to analyze presence data collected on Ascidians (aka Sea Squirt, an invasive marine organism)</li>
			<li>Project resulted in Sigma Xi induction and co-authorship on <a href="https://darchive.mblwhoilibrary.org/handle/1912/5294">related paper</a> published by WHOI</li><br>
		</ul></div></p>

		<!-- Job 6 -->
		<p><b onclick="return ColExp('job_6')">Team Leader, WebCT Developer</b><br>
		Summer 2005, Summer 2006<br>
		<div id="job_6" class="divHidden2">
		<a href="http://www.grginc.com/documents/FinalEvaluationReport.pdf" target="_blank"> 
		Technology @ the Crossroads,</a> Simmons College, Boston, MA<br>
		<ul>
			<li>Technology and Science program targeting Urban, Middle-School youth</li>
			<li>Taught team of 7th grade girls GIS, GPS, HTML and Tree ID skills for Greater Boston Tree Census</li>
			<li>Developed community "e-Learning" website used by staff and student participants</li>			
		</ul></div><p>	
	</div>
</div>

<!-- Education Section -->
<div id="ed">
	<div id="col_1"><img src="images/mint_grad_1.png"/></div>
	<div id="col_2"><div id="sim"><a href="http://www.simmons.edu"> Simmons College,</a> Boston, MA<br></div>
	<p>Class of 2011<br>
		B.S. Computer Science<br>
		B.S. Biology<br><br>
		<a href="http://www.sigmaxi.org">Sigma Xi Scientific Research Society</a><br>
		<a href="http://www.tri-beta.org">Beta Beta Beta National Biological Honor Society</a>
	</p>
	</div>
</div>
</div>
<!-- ============================================================================
Portfolio Section
============================================================================= -->
<!-- Portfolio Container -->
<div id="portfolio" class="divHidden" onmousedown='return false;' onselectstart='return false;'>
<h2>Portfolio</h2>
<p>
	Here's a sneak peek of the Interactive Coding Portfolio, I'm currently putting together!
	</br></br>
	Personally, I think code is BEAUTIFUL, but it can be difficult to present via a web-site portfolio. After attending some amazing Data Visualization sessions at the recent <a href="http://data-con.org" target="_blank">Boston Data Conference</a>, I was inspired to give this another go.
	</br></br>
	The R samples below were formatted using <a href="https://gist.github.com" target="_blank">GitHub Gist</a> and embedded into this page via JavaScript. The rest is pure HTML and CSS. 
	</br></br>
	This is very much still a work in progress and hasn't yet been browser tested. That said, I'd love to hear any suggestions you may have on how to make this better!
</p>
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
		Thanks for taking time to check out my site! <br>
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
		Congratulations! You're NOT a spam-bot!<br>
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
	<li id="s2"><button class="soc-button" type=button onclick="window.open('https://plus.google.com/+FooBarBettyEVail/posts','_blank')">
		<img src="images/icon_gplus_wht.png" alt="gplus" width="100">
	</button></li>
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






