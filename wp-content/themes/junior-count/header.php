<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<!--CSS BOOTSTRAP -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!--JS BOOTSTRAP -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<!--ICONS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

		<!-- MEU CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<nav class="navbar navbar-expand-lg navbar-light bg-light" id="header">
			<div class="container-fluid">
				<a class="navbar-brand ml-5" href="#">
					<h1>
					Júnior Count
					</h1>
				</a>

				<?php if(is_page('registrar') || is_page('consultar')){ ?>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<div class="navbar-nav">
							<a href="/registrar" class="nav-item nav-link">Cadastrar</a>
							<a href="https://docs.google.com/spreadsheets/d/1yAdDa4YRHm4-Z6ZUT92vaEHV6Uic40JeD8fqvHRYFqY/edit?usp=sharing" class="nav-item nav-link">Consultar</a>
						</div>
					</div>
				<?php } ?>
				
			</div>
		</nav>
		<?php
		wp_body_open();
		?>


