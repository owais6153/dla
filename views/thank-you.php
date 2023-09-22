<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Thankyou | Design Layer Agency</title>
    <meta name="robots" content="noindex">
    <?php include_once($_SERVER['DOCUMENT_ROOT'] .  '/includes/head.php'); ?>
</head>
<body>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] .  '/includes/header.php'); ?>
    <section id="page404" style="background: url('assets/images/menu-background.jpg');">
        <div class="container" style="text-align: center;">
            <img src="assets/images/thankyouimg.png" alt="design layer agency" style="width: 60%;" class="img">

            <?php if (isset($_REQUEST['thanksMsg'])) : ?>
                <h3> <?= $_REQUEST['thanksMsg']; ?></h3>
            <?php elseif (isset($_REQUEST['successMsg'])) : ?>
                <h3> <?= $_REQUEST['successMsg']; ?></h3>
            <?php else : ?>
                <h3>Oops! The page you are looking<br> for does not exist... yet.</h3>
            <?php endif; ?>
            <div class="btn-container btn-blue">
                <a href="/">Go to Home <img src="assets/images/arrow.png" alt="thankyou"></a>
            </div>
        </div>
    </section>
    <!--Start Footer-->
    <?php
    $nofooter = true;
    include_once('includes/footer.php'); ?>
    <!--End Footer-->
</body>
</html>