<html>
	<head>
		<title>Sit and Talk.</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="js/jssor.slider.mini.js"></script>
		<script>
		    jQuery(document).ready(function ($) {
		    	var _SlideshowTransitions = [
		        				{ $Duration: 2000, $Opacity: 2 }
		        				];
		        var options = { $PauseOnHover: 0,
		        				$AutoPlay: true,
		        				$SlideshowOptions: {
		                			$Class: $JssorSlideshowRunner$,
		                			$Transitions: _SlideshowTransitions,
		                			$TransitionsOrder: 1,
		                			$ShowLink: true
		                			}
		            		};
		        var jssor_slider1 = new $JssorSlider$('slider_container', options);
		    });
		</script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="main">
					<div class="title">
						<h2>Sit  Talk</h2>
						<h4>Connect. Without. Phone.</h4>
					</div>
				  	<div id="slider_container" style="position: relative; width: 1349px; height: 758px ; top: 0px; left: 0px;">
	    				<div u="slides" id="slide" style="position: absolute; overflow: hidden; width: 1349px; height: 758px; left: 0px; top: 0px;">
					        <div><img u="image" src="images/im1.jpg" /></div>
					        <div><img u="image" src="images/im2.jpg" /></div>
					        <div><img u="image" src="images/im3.jpg" /></div>			
				        </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="footer">
					<div class="col-md-6">
						<h2>SIT AND TALK</h2>
						<h4>SPECIALITY COFFEE HOUSE</h4>
					</div>
					<div class="col-md-6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="sub">
						<img src="images/img6.webp" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="sub">
						<h2>know. Truly Great Coffee</h2>
						<h4>blah blah blah</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="sub">
						<h2>know. Truly Great Coffee</h2>
						<h4>blah blah blah</h4>
					</div>
				</div>
				<div class="col-md-6">
					<div class="sub">
						<img src="images/im5.webp" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="sub">
						<img src="images/im4.webp" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="sub">
						<h2>know. Truly Great Coffee</h2>
						<h4>blah blah blah</h4>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
