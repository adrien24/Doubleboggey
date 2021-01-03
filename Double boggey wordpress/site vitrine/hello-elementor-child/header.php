<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php $viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' ); ?>
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?>>

<header class="navbar navbar-expand-md navbar-dark">

    <a href="https://doubleboggey2.adrienbouteiller.com/" class="navbar-brand ml-2 mt-2">
        <img src="http://doubleboggey2.adrienbouteiller.com/wp-content/uploads/2021/01/Fichier-2.png" alt="logo"/>
    </a>

    <button class="navbar-toggler " data-toggle="collapse" data-target="#navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navigation">

        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link active" href="https://doubleboggey2.adrienbouteiller.com/fil-dactualites/">Fil d'actualités</a></li>
            <li class="nav-item"><a class="nav-link active" href="https://doubleboggey2.adrienbouteiller.com/nos-activites/">Nos activités</a></li>
            <li class="nav-item"><a class="nav-link active" href="https://doubleboggey2.adrienbouteiller.com/competitions/">Compétitions</a></li>
            <li class="nav-item"><a class="nav-link active" href="https://adherent.adrienbouteiller.com/agenda/">Agenda</a></li>
            <li class="nav-item"><a class="nav-link active" href="https://doubleboggey2.adrienbouteiller.com/galerie/">Galerie</a></li>
            <li class="nav-item"><a class="nav-link active" href="https://doubleboggey2.adrienbouteiller.com/golf-sante/">Golf & santé</a></li>
            <li class="nav-item"><a class="nav-link active" href="https://doubleboggey2.adrienbouteiller.com/qui-sommes-nous/">Qui sommes-nous ?</a></li>
            <li class="nav-item"><a class="nav-link active" href="https://doubleboggey2.adrienbouteiller.com/"><img src="https://doubleboggey2.adrienbouteiller.com/wp-content/uploads/2020/11/icon_maison.png" alt="logo_maison"></a></li>
        </ul>

    </div>


</header>

<?php
hello_elementor_body_open();

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
	get_template_part( 'template-parts/header' );
}
