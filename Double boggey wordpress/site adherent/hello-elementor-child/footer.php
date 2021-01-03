<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	get_template_part( 'template-parts/footer' );
}
?>

<?php wp_footer();
?>

<footer class="row">









    <div class="logo col-12 d-flex justify-content-center h-25" style="width: 70%;"><img src="https://adherent.adrienbouteiller.com/wp-content/uploads/2021/01/logo-vertvv-8.png" alt="logo"></div>
    <div class="col-12 d-flex justify-content-center"><p style="border-bottom: solid 1px black; padding-left: 27%; padding-right: 25%; padding-bottom: 2%">Retrouver nous aussi sur :<a href="https://www.facebook.com/DoubleBoggey"><img src="https://doubleboggey2.adrienbouteiller.com/wp-content/uploads/2020/11/facebook.png" alt="facebook" style="width: 15%; margin-left: 2%"></a> </p></div>
    <a href="https://doubleboggey2.adrienbouteiller.com/politique-de-confidentialite/" class="col-lg-6 col-md-5   d-flex justify-content-center text-primary" style="text-align: center">Mention légales</a>
    <a href="https://doubleboggey2.adrienbouteiller.com/FAQ/" class="col-lg-6 col-md-5  d-flex justify-content-center text-primary" style=" text-align: center">FAQ</a>

</footer>

</body>
</html>
