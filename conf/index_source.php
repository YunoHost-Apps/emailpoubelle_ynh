<!DOCTYPE html>
<html lang="fr">
<head>
<title>emailPoubelle - __DOMAIN__</title>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="robots" content="index,follow,noarchive">
<link rel="stylesheet" href="__DOMAIN__/style.css">
<!--[if IE]><script src="__DOMAIN__/html5-ie.js"></script><![endif]--> 
</head>
<body>
<!--[if lte IE 6]> 
<div class="alert-ie6" style="padding: 1em; background: #900; font-size: 1.1em; color: #fff;">
      	<p><strong>Attention ! </strong> Votre navigateur (Internet Explorer 6 ou 7) présente de sérieuses lacunes en terme de sécurité et de performances, dues à son obsolescence (il date de 2001).<br />En conséquence, ce site sera consultable mais de manière moins optimale qu'avec un navigateur récent (<a href="http://www.browserforthebetter.com/download.html" style="color: #fff;">Internet Explorer 8</a>, <a href="http://www.mozilla-europe.org/fr/firefox/" style="color: #fff;">Firefox 3</a>, <a href="http://www.google.com/chrome?hl=fr" style="color: #fff;">Chrome</a>, <a href="http://www.apple.com/fr/safari/download/" style="color: #fff;">Safari</a>,...)</p>
      </div>
<![endif]-->  
	<div id="a">
		<header>
			<a href="/" title="Startseite"><strong>EmailPoubelle</strong> </a>
		</header>
		<div id="b">
			<article style="float:left">
				<?php 
				// Intégration dans votre site :
				if (file_exists('../conf.php')) {
					include('../conf.php');
				} else {
					include('../conf-dist.php');
				}
				include('../emailPoubelle.php');
				include('../emailPoubelleAdmin.php');
				?>
		</div>
	</div>
</html>
