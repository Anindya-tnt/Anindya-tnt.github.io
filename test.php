<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap 3 Fixed Layout Example</title>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="MOOC Vid CSS/video-canvas.css" />
<link href="css/video-js.css" rel="stylesheet">
<link href="css/videojs-transcript.css" title="Example 1" rel="stylesheet">
<link rel="stylesheet" href="css/style.css" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
    body{
    	padding-top: 70px;
    }
</style>

<script src="js/video.js"></script>
<script src="js/videojs-transcript.js"></script>
</head>
<body>
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">MOOCTIME</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="http://www.tutorialrepublic.com" target="_blank">Find a course</a></li>
				<li><a href="http://www.tutorialrepublic.com/about-us.php" target="_blank">Take Notes</a></li>
				<li><a href="http://www.tutorialrepublic.com/contact-us.php" target="_blank">Summarize Learning Context</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="jumbotron">
		<h1>Take personalized Notes</h1>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<h2>Introduction to Unsupervised Learning</h2>
			<div id="video-container">
				<video id="video" class="video-js vjs-default-skin" width="500" height="360">
					<source src="./media/Introduction-UnsupervisedLearning.mp4" type="video/mp4" width="500" height="360">
					<track kind="captions" src="captions/captions.vtt" srclang="en" label="English" default>
				</video>
				 <!-- Video Controls -->
			  	<div id="video-controls">
				    <button type="button" id="play-pause">Play</button>
				    <input type="range" id="seek-bar" value="0">
				    <button type="button" id="mute">Mute</button>
				    <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
				    <button type="button" id="full-screen">Full-Screen</button>
				    <button type="button" id="snap">Take screenshot</button>
					<button type="button" id="saveImage">Save Image</button>
					<button type="button" id="cloneImage">Add to Note</button>
			  	</div>
		  	</div>
		</div>
		<div class="col-xs-6">
			<h2>Snapshot</h2>
			<canvas id="canvas1"></canvas>
			
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-xs-6">
			
			<h2>Note</h2>			
			<div id="Note" style="overflow-y: scroll; height:400px;"></div> <!-- With Scroller -->

		</div>

		<div class="col-xs-6">
			
			<h2>Transcript</h2>			
			<div id="transcript"></div>

		</div>
	</div>
</div>


<script src="js/script.js"></script>
<script>
      var video = videojs('video').ready(function(){

          // fire up the plugin
          var transcript = this.transcript();

          // attach the widget to the page
          var transcriptContainer = document.querySelector('#transcript');
          transcriptContainer.appendChild(transcript.el());
      });
  </script>
</body>
</html>                                		