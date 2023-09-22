<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>404 | Page Not Found - Design Layer Agency</title>
    <meta name="description" content="Design Layer Agency is been in the industry for an extended period of time, achieving the trust of different brands and the undisputed title of the best digital & designing agency.">
    <?php include_once($_SERVER['DOCUMENT_ROOT'] .  '/includes/head.php'); ?>
</head>
<body>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] .  '/includes/header.php'); ?>

    <section id="page404" style="background: url('assets/images/menu-background.jpg');">
        <div class="container" style="text-align: center;">
            <img src="assets/images/404.png" alt="error page not found" style="max-width: 600px;" />
            <h3>Oops! The page you are looking<br> for does not exist... yet.</h3>
            <div class="btn-container btn-blue">
                <a href="/">Go to Home <img src="assets/images/arrow.png" alt="design layer agency"></a>
            </div>
        </div>
    </section>
    <!--Start Footer-->
    <?php
    $nofooter = true;
    include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'); ?>
    <!--End Footer-->
</body>

</html>