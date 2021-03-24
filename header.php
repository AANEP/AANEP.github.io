<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= isset($PageTitle) ? $PageTitle : "AANEP" ?></title>
    <!-- Additional tags here -->
    <?php if (function_exists('customPageHeader')) {
        customPageHeader();
    } ?>
</head>

<body>

    <header id="haut">
        <img src="logo.png" alt="">
        <nav class="menu">
            <ul class="menu-bar">
                <a id="accueil" href="./index.php"><li class="menu-item"> Accueil </li></a>
                <a id="bonsPlans" href="./plans.php"><li class="menu-item"> Bons plans </li></a>
                <a id="decouvrir" href="./discover.php"><li class="menu-item"> Découvrir Poitiers </li></a>
                <a id="contact" href="./contact.php"><li class="menu-item"> Qui sommes nous? </li></a>
            </ul>
        </nav>
    </header>
