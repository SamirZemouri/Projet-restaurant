<?php


$host = 'localhost';
$dbname = 'Menu_Restaurant';
$username = 'phpmyadmin';
$password ='Kazuya529892';

try {
$entree = "SELECT Menu.Nom, Prix, Description, Menu.Image FROM Category INNER JOIN Menu WHERE Menu.Category_idCategory = Category.idCategory AND Menu.Category_idCategory = 1";
$plat = "SELECT Menu.Nom, Prix, Description, Menu.Image FROM Category INNER JOIN Menu WHERE Menu.Category_idCategory = Category.idCategory AND Menu.Category_idCategory = 2";
$dessert = "SELECT Menu.Nom, Prix, Description, Menu.Image FROM Category INNER JOIN Menu WHERE Menu.Category_idCategory = Category.idCategory AND Menu.Category_idCategory = 3";
$boisson = "SELECT Menu.Nom, Prix, Description, Menu.Image FROM Category INNER JOIN Menu WHERE Menu.Category_idCategory = Category.idCategory AND Menu.Category_idCategory = 4";



    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="http://localhost/Projet-restaurant/back-office.php">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Back Office</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon2.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.15.35/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!-- Site CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top header-menu-fix">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="./images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="index.php">Accueil</a></li>
                                    <li><a href="#entrées">ENTRÉES</a></li>
                                    <li><a href="back-office-plats.php">PLATS</a></li>
                                    <li><a href="back-office-desserts.php">DESSERTS</a></li>
                                    <li><a href="back-office-boissons.php">BOISSONS</a></li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
    <!-- end site-header -->


    <div id="entrées" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container" id="#container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center text">
                            Back Office
                        </h2>
                    </div>


                    <!-- <span class="offer-price">$6.5</span> -->

                    <!-- end col -->
                </div>
            </div>

            <!-- end tab-menu -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <div class="add">
        <a href="" class="button1">+ Ajouter une entrée</a>
    </div>
    <div class="menu-list">

        <div class="menu-title">
            <h4 class="form-title pic">IMAGE</h4>
            <h4 class="form-title">TITRE</h4>
            <h4 class="form-title">DESCRIPTION</h4>
            <h4 class="form-title">PRIX</h4>
        </div>


<?php
                $stmt = $conn->query($entree);
                while ($row = $stmt->fetch()) {

        echo "<div class='current-menu'>

                    <div class='img-menu'>        
                        <img src='images/menu-item-thumbnail-01.jpg' alt='' class='img-responsive'>
                    </div>
                    <div class='titre-menu'>
                        <h3 class=''>". $row['Nom'] ."</h3>
                    </div>
                    <div class='description-menu'>
                        <p>". $row['Description']."</p>
                    </div>
                    <div class='prix-menu'>
                        <span class='offer-price prix'>". $row['Prix']." €</span>
                    </div>
                    <div class='edit'>

                        <img src='images/modify.png' alt='' class='edition'>
                        <img src='images/suppr.png' alt='' class='edition'>
                    </div>
                </div>";
                }?>




    </div>
    <!-- end menu -->

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/navigation.js"></script>
</body>

</html>
<?php
    if($stmt === false){
        die("Erreur"); 
    }
}catch (PDOException $e) {
    die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
}
?>