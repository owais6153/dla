<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="public">
<meta name="copyright" content="Copyright 2022 © Design Layer Agency." />
<meta name="language" content="en">
<meta name="format-detection" content="telephone=no">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Design Layer Agency">
<meta name="geo.region" content="US-FL" />
<meta name="geo.placename" content="Florida" />
<meta name="geo.position" content="27.6648° N; 81.5158° W" />
<meta name="ICBM" content="27.6648° N, 81.5158° W" />
<?php
include_once("token.php");
if (isset($_SERVER['HTTPS'])) {
	$requesMet = "https";
} else {
	$requesMet = "http";
}
?>
<style>
	._loader {
		position: fixed;
		top: 0;
		width: 100%;
		height: 100vh;
		display: flex;
		background-color: #180646;
		justify-content: center;
		align-items: center;
		z-index: 1000;
	}

	._loader img {
		width: 250px;
	}
</style>
<base href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>">
<link rel="canonical" href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
<link rel="icon" href="assets/images/favicon.png">
<!-- <link href="../assets/css/fontawesome.min.css" rel="stylesheet"> -->
<link href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>/assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>/assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?= $requesMet . '://' . $_SERVER['HTTP_HOST'] . '/' ?>/assets/fonts/stylesheet.css">
<meta name="google-site-verification" content="5ACDKNVQ5fo7oaI0GVsM3xFn8uontlA8M_yLb-QE9oM" />
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Design Layer Agency",
  "alternateName": "Design layer agency",
  "url": "https://www.designlayeragency.com/",
  "logo": "https://www.designlayeragency.com/assets/images/logo.svg",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+1 (305) 395-6482",
    "contactType": "sales",
    "contactOption": "TollFree",
    "areaServed": "US",
    "availableLanguage": "en"
  },
  "sameAs": [
    "https://www.facebook.com/designlayeragencyllc",
    "https://www.instagram.com/designlayeragency/",
    "https://www.linkedin.com/company/83519829/"
  ]
}
</script>

<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-TYD85VSV1M"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-TYD85VSV1M'); </script>