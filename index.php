
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<?php 
 if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
 $ip=$_SERVER['HTTP_CLIENT_IP'];}
 elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
 $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];} else {
 $ip=$_SERVER['REMOTE_ADDR'];}
$var=$ip;

$file = file_get_contents("myFile.txt");
   //echo "String not found!";
   $myFile = "myFile.txt";
   $fh = fopen($myFile, 'a+') or die("can't open file");
    $date = date('Y-m-d H:i:s');

   $stringData = $var ." - ".$date." \n";
   fwrite($fh, $stringData);
   fclose($fh);

?>
<head>
<title>Rahul Anand Sharma </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resume Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='css/a1.css' rel='stylesheet' type='text/css'>
<link href='css/a2.css' rel='stylesheet' type='text/css'><!-- //fonts -->

	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

<!-- skills -->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#10A7AF',
                trackColor: '#fff',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#10A7AF',
                trackColor: '#fff',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#10A7AF',
                trackColor: '#fff',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
			
			$('#demo-pie-4').pieChart({
                barColor: '#10A7AF',
                trackColor: '#fff',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
        });
    </script>
<!-- skills -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- Piwik -->
<!-- Piwik -->
<!-- Piwik -->
<!-- End Piwik Code -->

<!-- Piwik -->
<!-- End Piwik Code -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85360420-1', 'auto');
ga('send', 'pageview');
</script>

</head>
<body>
<!-- banner -->
<div class="header-top">
	<div class="container">
		<ul>
			<li><a href="rahulanand_resume.pdf"  target="_blank"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>Resume</a></li>
			<li><a  href="mailto:rahulanandsharma@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Email me</a></li>
			<li><a href="javascript:window.print()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>Print CV</a></li>
			
		</ul>
	</div>
</div>	
<div class="header">
	<div class="container">
		<div class="col-md-8 header-left">
			<div class="col-sm-5 pro-pic">
				<img class="img-thumbnail" src="images/pic1.jpg" alt=" " style="width:190px;"/>
			</div>
			<div class="col-sm-5 pro-text">
				<h1>Rahul Anand Sharma</h1>
				<p>Currently Working at Microsoft Research, India</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 header-right ">
			<ul class="list-left">
				<li>Personal:</li>
				<li>Work Email:</li>
				<li>Phone no:</li>
				<li>Located: </li>
			</ul>
			<ul class="list-right">
				<li><a href="mailto:rahulanandsharma@gmail.com">rahulanandsharma@gmail.com</a></li>
				<li><a href="mailto:a-rahsha@microsoft.com">a-rahsha@microsoft.com</a></li>
				<li>+91 9703231722</li>
				<li>Microsoft Research, India</li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner -->
<!-- about -->
<div id="about" class="about">
	<div class="container">
		<h3 class="tittle">About Me</h3>
		<p class="abt-para">I'm a graduate student (Btech + MS Research) at International Institute of Information Technology, Hyderabad (IIIT-H) associated with Center for Visual Information Technology and advised by Prof. CV Jawahar and Dr. Vineet Gandhi . My primary research interests include Machine Learning, Computer Vision and its applications. 
</br>My Thesis is based on Automatic Analytics on Broadcast Sports Videos, primarily we focus on sport of Soccer and Cricket.
</br> After Finishing up my Masters i am currently working at Microsoft Research, India on Project <a href="https://www.microsoft.com/en-us/research/project/farmbeats-iot-agriculture/">FarmBeats: IoT for agriculture </a>

 </p>
	</div>
		
	<div class="col-md-6 abt-left ">
		<h2>Education</h2>
				<div class="accordion">
							<div class="accordion-section">
								<h5><a class="accordion-section-title" href="#accordion-1">
									<span>2014 - 2016</span> MS By Research In Computer Science (9.01/ 10)
								<i class="glyphicon glyphicon-chevron-down"></i><div class="clearfix" align="center">IIIT Hyderabad</div>
								
								</a></h5>

							</div>

							<div class="accordion-section">
								<h5><a class="accordion-section-title" href="#accordion-2">
									<span>2010 - 2014</span> Btech in Computer Science
								<i class="glyphicon glyphicon-chevron-down"></i><div class="clearfix" align="center">IIIT Hyderabad</div>
								</a></h5>
					
							</div>

							
							
							
				</div>
				<script>
							jQuery(document).ready(function() {
								function close_accordion_section() {
									jQuery('.accordion .accordion-section-title').removeClass('active');
									jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
								}

								jQuery('.accordion-section-title').click(function(e) {
									// Grab current anchor value
									var currentAttrValue = jQuery(this).attr('href');

									if(jQuery(e.target).is('.active')) {
										close_accordion_section();
									}else {
										close_accordion_section();

										// Add active class to section title
										jQuery(this).addClass('active');
										// Open up the hidden content panel
										jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
									}

									e.preventDefault();
								});
							});
				</script>
	</div>
	<div class="col-md-6 abt-left">
			<h2>Achievements</h2>
				<div class="accordion">
							<div class="accordion-section">
					
									<h6>Honors & Awards</h6>
									<ul>
										<li><span class="glyphicon glyphicon-ok" aria-hidden="false"></span><a href="#">Enlisted in Dean’s list of Academic excellence at IIIT Hyderabad
</a></li>

										<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Winner of IIIT-H Hackathon</a></li>
										<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Division 1 Coder at CodeForces with rating of 1745.</a></li>
										<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Ranked 16th(All India Rank) at Hacker Earth Inter University Programming Contest
</a></li>
<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">Elected member of Academic Council Student affairs committee (AC-SAC)
</a></li>

									</ul>
						
							</div>
						</div>
	</div>
</div>
<!-- about -->
<div class="employment">
	<div class="container">
		<h3 class="tittle ">Work Experience</h3>
		<p class="abt-para "> </p>
		<div class="col-md-6 employ-left">
			<h3 align="right">Microsoft Research India</h3>
		</div>
		<div class="col-md-6 employ-right">
			<h5><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>Software Design Engineer (Research Fellow)</h5>
			<p> <ul> <li>Working on FarmBeats Project for Indian Agriculture.</li>
		<li>
                Our mission is to improve farming through data-driven practices. We are inventing new ways to gather data, to store them in the cloud, and feed them back to the farmers. </p>
		</li>
		</ul>
		</div>
		<div class="col-md-6 employ-left">
			<h3 align="right">Center for Visual Information and Technology (CVIT)</h3>
		</div>
		<div class="col-md-6 employ-right">
			<h5><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>Research Assistant</h5>
			<p>Worked as a Research student under Prof. C.V. Jawahar at CVIT in the field on Computer Vision and Machine Learning.</p>
		</div>
		<div class="col-md-6 employ-left">
			<h3 align="right">HackerRank</h3>
		</div>
		<div class="col-md-6 employ-right">
			<h5><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span> Software Developer Intern</h5>
			<p>
						<ul>
				<li>Improved the Codechecker by adding support for Image Processing related problems</li>
<li>Ten Fold reduction in Deployment time by improvising the asset pre-compilation pipeline.</li>
<li>Winner of Hackathon organized at HackerRank by Building Static code Analysis tool </li>
</ul>
</p>
		</div>
		<div class="col-md-6 employ-left">
			<h3 align="right">IIIT Hyderabad
</h3>
		</div>
		<div class="col-md-6 employ-right">
			<h5><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>Teaching Assistant

</h5>
			<p>
				<ul>
				<li>Principle of Programming Languages</li>
	<li>Aritifical Intelligence</li>
	<li>Digital Image Processing</li>
	<li>Digital Signal Analysis and Applications </li></ul></p>
		</div>
		
	</div>
</div>
<div class="employment">
	<div class="container">
		<h3 class="tittle ">Publications</h3>
		<div class="clearfix"></div>

				<div class="col-md-6 employ-left">
			<h3 align="left">Automated top view registration of broadcast football videos</h3>
			<b>Rahul Anand Sharma</b>, Vineet Gandhi and C V Jawahar</br>
<i>Computer Vision and Pattern Recognition (CVPR), 2017 </i>(to submit)
		</div>
	</br></br></br>	

For the Task of Image registration we propose an alternate approach exploiting the edge information and demonstrate its success in a specific scenario of registering football broadcast video frames on the static top view model of the playing surface
		<table>
		<tr>
		<td>
		<img src="images/teaser1.jpg" alt="Mountain View" style="width:454px;">
		</td><td>
		<img src="images/teaser2.jpg" alt="Mountain View" style="width:454px;">
</td></tr></table>
		
		<div class="clearfix"></div>


		
		<div class="clearfix"></div>
			<div class="col-md-6 employ-left">
			<h3 align="left">Automatic analysis of broadcast football videos using contextual priors</h3>
			<b>Rahul Anand Sharma</b>, Vineet Gandhi, Visesh Chari and C V Jawahar

<a href="rahul_sivp.pdf"  target="_blank"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>PDF</a>
</br>

 <i>Springer Journal on Signal Image and Video Processing SIVP</i>


		</div>
	</br></br></br>	

we show that contextual information can be harnessed for
automatic analysis of sports videos. Specifically, given an input video, we output per
frame information about camera angles and the events (goal, foul, etc.). Our main
insight is that in the presence of temporal context (camera angles) for a video, the
problem of event tagging (fouls, corners, goals etc.) can be cast as per frame multiclass
classification problem. 
		<img src="images/30min.jpg" alt="Mountain View" style="width:904px;">


		<div class="clearfix"></div>



<div class="col-md-6 employ-left">
			<h3 align="left">Fine Grain Annotation of Cricket Videos

</h3>	
</br></br>	
	<b>Rahul Anand Sharma</b>, Pramod Kompalli and C.V. Jawahar &nbsp <a href="rahulacpr15
.pdf"  target="_blank"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>PDF</a>
</br>
 <i>Asian Conference on Pattern Recognition (ACPR), 2015</i>
	</div>
</br></br></br>	

	We present a solution that enables rich semantic annotation of Cricket videos at a fine temporal scale. Our approach circumvents technical challenges in visual recognition by utilizing information from online text-commentaries. We obtain a high annotation accuracy, as evaluated over a large video collection.
		<img src="images/Solution.jpg" alt="Mountain View" style="width:904px;">

			</br>	</br>	</br>	</br>


		<div class="clearfix"></div>
<div class="col-md-6 employ-left">

			<h3 align="left">Event Recognition in Broadcast Soccer Videos
</h3>	
</br>
	Himangi Saraogi,<b> Rahul Anand Sharma</b>, and Vijay Kumar &nbsp  <a href="rahul_icvgip
.pdf"  target="_blank"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>PDF</a>
</br>
 <i>Indian Conference on Computer Vision, Graphics and Image Processing (ICVGIP), 2016</i>
</div>
</br></br></br>	

 In this paper we propose an approach for soccer event recognition using deep convolutional features combined with domain-specific cues. This approach uses deep convolution feature (TDD) in combination with our proposed algorithm of Automated top view registration to improve upon the task of Event recognition.
		<img src="images/icvgip.png" alt="Solution" style="width:604px;">

			</br>	</br>	</br>	</br>


		<div class="clearfix"></div>		

</div>
<!-- education -->

<!-- education -->
<!-- num scroller -->

<!-- //num scroller -->
<!-- portfolio -->

<!-- //portfolio -->
<!-- more skills -->

<div class="container">
		<h3 class="tittle">In the News</h3>
		<p class="abt-para" align="centre">
		
		<h4>Media coverage of our Research work on fine grain annotation of Cricket Videos by <a href="http://gadgets.ndtv.com/science/features/teaching-computers-how-to-give-cricket-commentary-775114">NDTV</a>
</a>, <a href="https://www.washingtonpost.com/news/innovations/wp/2015/12/15/how-artificial-intelligence-could-change-the-way-we-watch-sports/"> Washington Post</a>, <a href="https://thestack.com/world/2015/11/25/artificial-intelligence-neural-networks-sports-commentaries/">theStack</a>, <a href="http://www.theregister.co.uk/2015/11/26/indian_boffins_teach_computers_to_see_by_watching_cricket/"> theRegister</a>
</h4>
 </p>
 </br>
 </br>
 	<table border="6"  rules="columns" style="width:100%">
		<tr>
		<td align="center"><a href="https://www.washingtonpost.com/news/innovations/wp/2015/12/15/how-artificial-intelligence-could-change-the-way-we-watch-sports/"><img src="images/wp.jpg" alt="Mountain View" style="width:454px;"></a></td>
				<td><a href="http://gadgets.ndtv.com/science/features/teaching-computers-how-to-give-cricket-commentary-775114"><img src="images/wp2.jpg" alt="Mountain View" style="width:454px;"></a></td>
								<td><a href="http://www.theregister.co.uk/2015/11/26/indian_boffins_teach_computers_to_see_by_watching_cricket/"><img src="images/wp3.jpg" alt="Mountain View" style="width:454px;"></a></td>

</tr>
</table>
	</div>
<div class="more">
	<div class="container">
		<h3 class="tittle ">Personal Trips</h3>
		Thanks to my research work i have been fortunate enough to visit many beautiful places.
		<table border= cellpadding="70">
		<tr><td align="center"><b>Germany Trip</b> </td><td>&nbsp &nbsp&nbsp&nbsp&nbsp </td><td align="center"><b>Malaysia Trip</b> </td></tr>
		<tr><td><embed type="application/x-shockwave-flash" src="https://photos.gstatic.com/media/slideshow.swf" width="600" height="400" flashvars="host=picasaweb.google.com&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F118277975128783274492%2Falbumid%2F6293138678533512353%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCJ6XxMLi25232AE%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>			
</td><td>&nbsp &nbsp&nbsp&nbsp&nbsp</td><td>
<embed type="application/x-shockwave-flash" src="https://photos.gstatic.com/media/slideshow.swf" width="600" height="400" flashvars="host=picasaweb.google.com&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F118277975128783274492%2Falbumid%2F6293429285594321361%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCLi-77rn0eGwkwE%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>					
</td></tr></table>		
		
				
				
				  <div class="clearfix"></div>
			</div>
			
		
		
		</div>
	
		<div class="clearfix"></div>
	</div>
</div>
<!-- more skills -->
<!-- contact -->

<!-- //contact -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic4.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic9.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic5.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic6.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic10.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic11.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic13.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic14.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <img src="images/pic1.jpg" class="img-responsive img-centered" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>
