<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Godswill Friday's Personal Page">
	<meta name="author" content="Friday Godswill @faradayyg">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/images/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
</head>
<body>
	<div class="pre-loader">
		<div class="fancy">
			<table>
				<tr style="width: 100%">
					<td width='100%' align="center">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/images/favicon.png">
					</td>
				</tr>
				<tr>
					<td width='100%' align="center">
						<h1>&nbsp;<br /><br />Loading, please wait...</h1>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<ul class="navbar">
		<div class="container">
			<li><span class="brand">Friday Godswill.U</span></li>
			<div class="pull-right">
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Blog</a></li>
			</div>
		</div>
			
	</ul>

	<section class="full-height center-aligned" style="background: url(<?php echo get_bloginfo('template_directory');?>/images/bg.jpg); background-size: cover;display: none">
		<div class="container">
			<div class="intro_panel animated zoomIn">
				<div class="animated bounceInRight">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/images/favicon.png">
				</div>
				<h1 class="animated bounceInLeft">I'm Friday Godswill</h1>
				<p class="animated bounceInUp">
					Fullstack Web Developer, looking forward to the future.<br /><br />
				</p>
				<div class="animated rollIn">
					<a href="http://facebook.com/godswillf" target="blank"><span class="fa fa-facebook"></span></a>
					<a href="http://twitter.com/faradayyg" target="blank"><span class="fa fa-twitter"></span></a>
					<a href="http://medium.com/@faradayyg" target="blank"><span class="fa fa-medium"></span></a>
					<a href="http://github.com/faradayyg" target="blank"><span class="fa fa-github"></span></a>
					<a href="http://www.linkedin.com/in/godswill-friday-181476b1/"><span class="fa fa-linkedin"></span></a>
				</div><br />

				<small>You can view my resume, <a href="https://drive.google.com/file/d/0ByVMaT5hobCQaVlld25SMV85VFk/view?usp=sharing" class="small-text text-white">here</a></small>
			</div>
			
		</div>		
	</section>
	
</body>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event) { 
	  setTimeout(function(){
	  document.getElementsByClassName('pre-loader')[0].classList.add('animated','zoomOut');
	  document.getElementsByTagName('section')[0].style.display = 'flex'
	   //your code here
	   setTimeout(function(){

	  document.getElementsByClassName('pre-loader')[0].style.display = 'none';
	},500);
	  }, 3000);
	});
</script>
</html>
