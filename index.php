<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>La Parrilla Argentina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>

</head>

<body>
    <section id="home" class=" big">
        <?php include ('menu.php');?>
    </section>

    <section id="nosotros" class="color1 parallax">
        <?php include ('aboutus.php');?>
    </section>

    <section id="menu" class="img2 parallax superBig">
        <?php include ('foodMenu.php');?>
    </section>

    <section id="reservaciones" class="color2 parallax medium ">
        <article>
            <?php include ('reservation.php');?>
        </article>
    </section>

    <section id="contacto" class="color3 contact parallax small">
        <?php include ('contact.php');?>
    </section>
    <section id="pie" class="colorBlack footer parallax tiny ">
        <?php include ('footer.php');?>
    </section>
    <script src="js/jquery-latest.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
</body>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-77610408-2', 'auto');
    ga('send', 'pageview');
</script>

</html>