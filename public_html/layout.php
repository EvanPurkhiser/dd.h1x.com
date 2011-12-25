<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Evan Purkhiser</title>
		<link href='http://fonts.googleapis.com/css?family=Cabin:regular,500,bold|News+Cycle' rel='stylesheet' type='text/css' />
		<link href="/resources/css/base.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="header">
			<h1>Evan <b>Purkhiser</b></h1>
			<ul>
				<li><a class="save" href="file-dump/resume.pdf">My Resume</a></li>
				<li><a class="mail" href="mailto:evanpurkhiser@gmail.com">Contact Me</a></li>
			</ul>
		</div>
		
		<h1 id="about">
			Hello there! I'm a <span class="blue">web developer</span> from Akron, Ohio.
			Sometimes I'm considered a <span class="orange">code monkey</span>, other
			times a <span class="green">problem solver</span>. Either way I'm very happy.
		</h1>

		<div id="projects">
			<a class="arrow left" href="#next">Next</a>
			<a class="arrow right" href="#prev" >Previous</a>
			<div class="mask">
				<ul>
					<?php foreach($projects as $project): ?>
					<li>
						<a href="http://<?= $project->url ?>.dd.h1x.com"><?= $project->title; ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
		<script type="text/javascript" src="/resources/js/base.js"></script>
	</body>
</html>