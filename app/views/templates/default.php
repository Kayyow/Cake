<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <meta name="description" content="Site de présentation de Kévin Hardy">
    <meta name="author" content="Benjamin Maigné">
    <title>Kévin Hardy - Administrateur sytèmes et réseaux</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
</head>

<body id="page-top">
    <button class="menu"><i class="fa fa-bars"></i></button>
    <div class="nav-container">
        <div class="logo-container"><img src="img/logo.png" id="logo" alt="Logo Kévin Hardy" /></div>
        <!-- NAVBAR from jQuery plugin -->
    </div>

    <?= $content; ?>

    <footer>
        <p>Design and Devellop by Les BGS | 2016© | All rights reserved</p>
    </footer>

    <script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
    <script src="js/jquery.scrollNavKayyow.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>