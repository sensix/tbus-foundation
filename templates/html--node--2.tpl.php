<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Tbus - BitApp</title>

  <link rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/css/normalize.css">
  <link rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/css/foundation.css">
  <link rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/css/tbus.css">

<script src="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/js/vendor/custom.modernizr.js"></script>
<script>
Modernizr.load(
{
test: Modernizr.mq('only all'),
nope: '<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/js/vendor/respond.min.js'
}
);
</script>	
	
</head>
<body>

<div class="row">
  <div class="large-12 columns">

    <!-- Navigation -->

      <nav class="top-bar">
        <ul class="title-area">
          <!-- Title Area -->
          <li class="name">
            <h1>
              <a href="#">
                Tbus
              </a>
            </h1>
          </li>
          <!--<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>-->
        </ul>

        <!--<section class="top-bar-section">
          <ul class="right">
            <li class="separatore"><a href="#">funzioni</a></li>
            <li><a href="#">demo</a></li>
          </ul>
        </section>-->
    </nav>

    <!-- End Navigation -->

    </div>
  </div>


  <div class="row">
    <div class="large-12 columns">

    <!-- Desktop Slider -->

		<div class="hide-for-small">
			<div class="slideshow-wrapper">
				<div class="preloader"></div>
				<div id="featured">
					<ul data-orbit data-options="animation: fade; navigation_arrows:false; slide_number:false; timer_speed:30000; bullets:false; timer:false">
						  <li>
							<img src="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/img/Slide01_big.png" />
							<div class="orbit-caption">Da oggi T muovi facile!</div>
						  </li>
					</ul>
				</div>
			</div>
		</div>

    <!-- End Desktop Slider -->


    <!-- Mobile Header -->


    <div class="row">
      <div class="small-12 show-for-small"> 
			<div class="preloader"></div>
			<ul data-orbit data-options="animation: fade; navigation_arrows:false; slide_number:false; timer_speed:30000; bullets:false; timer:false">
				  <li>
					<img src="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/img/Slide01_small.jpg" />
					<div class="orbit-caption">Da oggi Ti muovi facile!</div>
				  </li>
			</ul>
      </div>
    </div>


  <!-- End Mobile Header -->

    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <div class="row">

    <!-- Thumbnails -->

	
        <div class="large-3 small-6 columns">
          <img class="icona" src="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/img/apple.png" />
          <h6 class="panel">Per dispositivi<br/>Apple</h6>
		  <a class="button tbus medium round expand" href="#" title="download">download</a>
        </div>	
		
		<div class="large-3 small-6 columns">
          <img class="icona" src="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/img/android.png" />
          <h6 class="panel">Per dispositivi<br/>Android</h6>
		  <a class="button tbus medium round expand" href="#" title="download">download</a>
        </div>

        <div class="large-3 small-6 columns">
          <img class="icona" src="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/img/windows.png" />
          <h6 class="panel">Per dispositivi<br/>Windows</h6>
		  <a class="button tbus medium round expand disabled" href="#" title="work in progress">work in progress</a>
        </div>
		
        <div class="large-3 small-6 columns">
          <img class="icona" src="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/img/iwatch_ico.png" />
          <h6 class="panel">Per i'm Watch</h6>
		  <a class="button tbus medium round expand disabled" href="#" title="work in progress">work in progress</a>
        </div>		





    <!-- End Thumbnails -->

      </div>
    </div>
  </div>





    <!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr>
      <div class="row">
        <div class="large-12 columns">
          <p class="note"><img class="bitapp" src="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/img/logo-bitapp.png" alt="logo BitApp"/>&copy; Copyright 2013 BitApp S.r.l. P.I. 03269751206  <!--| <a href="#">Condizioni d'uso</a> | <a href="#">Credits</a>--></p>
        </div>
      </div>
    </div>
  </footer>

  <script>
  document.write('<script src=<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
  <script src="<?php print base_path() . path_to_theme(); ?>/HTML-STATIC/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
  

  <!-- End Footer -->

</body>
</html>
