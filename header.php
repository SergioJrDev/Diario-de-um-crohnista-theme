<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Diário de um Crohnista</title>
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#1bb998">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#1bb998">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#1bb998">
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
 			<div class="container">
 				<h1 class="logo"><a href="<?php echo home_url(); ?>">Diário de um Crohnista</a></h1>
 				<div class="nav">
 					<button class="hamburger hamburger--collapse" type="button">
 					  <span class="hamburger-box">
 					    <span class="hamburger-inner"></span>
 					  </span>
 					</button>
 					<div class="clearfix"></div>
					<?php $let = array(
						'menu' => 'primary',
						'menu_class' => 'nav-list',
						'container' => 'nav',
						'container_class' => 'nav-content'
					);
					wp_nav_menu($let);

					?>
 					<!-- <nav class="nav-content">
 						<ul class="nav-list">
 							<li class="current-menu-item"><a href="#">Início</a></li>
 							<li><a href="#">Como usar</a></li>
 							<li><a href="#">Contribua no Github</a></li>
 							<li><a href="#">Contato</a></li>
 						</ul>
 					</nav> -->
 				</div>
 			</div>
 		</header>
