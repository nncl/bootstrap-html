<?php require 'config.php'; ?>
<!doctype html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

		<title>Está Convidado <? echo ' - ' . $title ?></title>
		<meta name="description" content="<? echo $description ?>">
		<meta name="author" content="<? echo $author_description ?>">
		<meta name="robots" content="index, nofollow">

		<link rel="shortcut icon" href="<?php echo $path ?>/favicon.ico">

		<!-- FACEBOOK
		<meta property="og:locale" content="pt_BR">
		<meta property="og:url" content="">
		<meta property="og:title" content="">
		<meta property="og:site_name" content="">
		<meta property="og:description" content="">
		<meta property="og:image" content="">
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="=">
		<meta property="og:image:height" content="=">
		<meta property="og:type" content="website">
		-->

		<link rel="stylesheet" src="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" />
		<link href='<? echo $josefin ?>' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type='text/css' href="<?php echo $path ?>/style.css">
		<link rel="stylesheet" href="<?php echo $path ?>/assets/css/home.min.css">

		<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--[if lt IE 9]>
			<script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="index" itemscope itemtype="http://schema.org/WebPage">

		<section class="all">
			<?php include_once('includes/header.php'); ?>

			<main class="content">
				<h1>Bootstrap</h1>
			</main>

			<?php include_once('includes/footer.php'); ?>		
		</section>


		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.2/jquery.slicknav.min.js"></script>
		<script type="text/javascript" src="<?php echo $path ?>/assets/js/app.min.js"></script>
		<script type="text/javascript" src="<?php echo $path ?>/assets/js/home.min.js"></script>

	</body>

</html>