<?php session_start();
require_once("includes/connect.php");
require_once("lang/functions_tr.php");

$page = "Fiyat Listesi | Pazarcım";
$description = "Pazarcım sebze ve meyve fiyat listesine bu sayfadan ulaşabilirsiniz.";
$keywords = "Pazarcım,sebze,meyve,pazar,alışveriş,fiyat listesi,fiyat";

?>
<!DOCTYPE html>
<html lang="tr">

<head>
<?php require_once("includes/meta.php"); ?>

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css" >
<link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i,900" rel="stylesheet">
<!-- BEGIN GOOGLE ANALYTICS CODEs -->

</head>
<body>
<div id="page">
<header>
  <div class="container">
      <div class="row">
        <div class="header-banner">
          <div class="assetBlock">
            <div id="slideshow">
              <p>Special Offers! - Get <span>50%</span> off on vegetables </p>
              <p>sale <span>40%</span> of  on bulk shopping! </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div id="header">
    <div class="header-container container">
   <div class="row">
      <div class="logo"> <a href="index.html" title="index">
            <div><img src="images/logo.png" alt="logo"></div>
            </a> </div>
      <div class="fl-nav-menu">

          <nav>
            <div class="mm-toggle-wrap">
              <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span> </div>
            </div>
            <div class="nav-inner">
              <!-- BEGIN NAV -->
              <ul id="nav" class="hidden-xs">
                <li> <a class="level-top" href="#"><span>Home</span></a></li>

                <li class="mega-menu"> <a class="level-top" href="grid.html"><span>Fruits</span></a>
                    <div class="level0-wrapper dropdown-6col">
                      <div class="container">
                        <div class="level0-wrapper2">
                          <div class="col-1">
                            <div class="nav-block nav-block-center">
                              <!--mega menu-->
                              <ul class="level0">
                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Tropical Fruits</span></a>
                                  <!--sub sub category-->
                                  <ul class="level1">
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Coconuts</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Dragonfruits</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pomegranates</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Passionfruit</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                  </ul>
                                  <!--level1-->
                                  <!--sub sub category-->
                                </li>
                                <!--level3 nav-6-1 parent item-->
                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Citrus Fruits‎</span></a>
                                  <!--sub sub category-->
                                  <ul class="level1">
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fresh Oranges</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Grapefruits</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Organic Limes</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Yellow Lemons</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                  </ul>
                                  <!--level1-->
                                  <!--sub sub category-->
                                </li>
                                <!--level3 nav-6-1 parent item-->
                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Stone Fruits</span></a>
                                  <!--sub sub category-->
                                  <ul class="level1">
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sweet Apricots</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Nectarines</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Doughnut Peachs</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Italian Fruits</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                  </ul>
                                  <!--level1-->
                                  <!--sub sub category-->
                                </li>
                                <!--level3 nav-6-1 parent item-->
                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Large Fruits</span></a>
                                  <!--sub sub category-->
                                  <ul class="level1">
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pineapples</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Organic Papayas</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fresh Melons</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Grapefruits</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                  </ul>
                                  <!--level1-->
                                  <!--sub sub category-->
                                </li>
                                <!--level3 nav-6-1 parent item-->
                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Seasonal Fruits</span></a>
                                  <!--sub sub category-->
                                  <ul class="level1">
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Black Jamuns</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fresh Mangos</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Organic Litchis</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Longans</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                  </ul>
                                  <!--level1-->
                                  <!--sub sub category-->
                                </li>
                                <!--level3 nav-6-1 parent item-->
                                <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Berries & Cherries</span></a>
                                  <!--sub sub category-->
                                  <ul class="level1">
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Strawberries</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Raspberries</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Blackberries</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                    <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Cherries</span></a> </li>
                                    <!--level2 nav-6-1-1-->
                                  </ul>
                                  <!--level1-->
                                  <!--sub sub category-->
                                </li>
                                <!--level3 nav-6-1 parent item-->
                              </ul>
                              <!--level0-->
                            </div>
                            <!--nav-block nav-block-center-->
                          </div>
                          <!--col-1-->
                          <div class="col-2">
                            <div class="menu_image"><a title="" href="grid.html"><img alt="menu_image" src="images/banner.jpg"></a></div>
                          </div>
                          <!--col-2-->
                        </div>
                        <!--level0-wrapper2-->
                      </div>
                      <!--container-->
                    </div>
                    <!--level0-wrapper dropdown-6col-->
                    <!--mega menu-->
                  </li><li class="mega-menu"> <a class="level-top" href="grid.html"><span>Salads‎</span></a>
                    <div class="level0-wrapper dropdown-6col">
                      <div class="container">
                        <div class="level0-wrapper2">
                          <div class="nav-block nav-block-center">
                            <!--mega menu-->
                            <ul class="level0">
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Veg Salads</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Tomatoes</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Cucumbers</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Peppers & Capsicums</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Avocados</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Dressings Salads</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Hellmann's</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Giuseppe Giusti</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Unitednature</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Walden Farms</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Fruits Salads</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pineapples</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Red Apple</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Strawberries</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Row Mangos</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Bagged Salads</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Italian Baby Spinach</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Australia Green Kale</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sustenir Fresh Toscano</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Oro Rocket Salad</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Lettuce Salads</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Butterhead</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Red Coral</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Rolla Rosa Lettuce</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Summercrisp</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Bread Salads</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Green Goddess</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Grilled Broccoli</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Panzanella</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Green Tomato</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                            </ul>
                            <!--level0-->
                          </div>
                          <!--nav-block nav-block-center-->
                          <div class="nav-add">
                            <div class="push_item">
                              <div class="push_img"><a href="#"><img src="images/banner1.jpg" alt="menu item 1"></a></div>
                            </div>
                            <div class="push_item">
                              <div class="push_img"><a href="#"><img src="images/banner2.jpg" alt="menu item 2"></a></div>
                            </div>
                            <div class="push_item">
                              <div class="push_img"><a href="#"><img src="images/banner3.jpg" alt="menu item 3"></a></div>
                            </div>
                            <div class="push_item push_item_last">
                              <div class="push_img"><a href="#"><img src="images/banner4.jpg" alt="menu item 4"></a></div>
                            </div>
                          </div>
                        </div>
                        <!--level0-wrapper2-->
                      </div>
                      <!--container-->
                    </div>
                    <!--level0-wrapper dropdown-6col-->
                    <!--mega menu-->
                  </li>
                  <li class="mega-menu active"> <a class="level-top" href="grid.html"><span>Vegetables</span></a>
                    <div class="level0-wrapper dropdown-6col">
                      <div class="container">
                        <div class="level0-wrapper2">
                          <div class="nav-block nav-block-center">
                            <!--mega menu-->

                            <ul class="level0">
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Leafy Vegetables</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sprouts</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Lettuce</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Banana Leaves</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Microgreens</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Mushrooms</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Shimeji Mushroom</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Portobello Mushroom</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Oyster Mushroom</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Shiitake Mushroom</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Baby Vegetables</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Cabbage</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Capsicums</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Pak Choi</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Spinach</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Salad Vegetables</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Cucumbers</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Avocados</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Mustard Leaves</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Tomatoes</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Asian Vegetables</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Spring Onion</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Lady Fingers</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Watercress</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Curry Leaves</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                              <li class="level3 nav-6-1 parent item"> <a href="grid.html"><span>Beans Vegetables</span></a>
                                <!--sub sub category-->
                                <ul class="level1">
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>French Beans</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Sweet Corn</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Fine Green Beans</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                  <li class="level2 nav-6-1-1"> <a href="grid.html"><span>Petai Beans</span></a> </li>
                                  <!--level2 nav-6-1-1-->
                                </ul>
                                <!--level1-->
                                <!--sub sub category-->
                              </li>
                              <!--level3 nav-6-1 parent item-->
                            </ul>
                            <!--level0-->
                          </div>
                          <!--nav-block nav-block-center-->
                        </div>
                        <!--level0-wrapper2-->
                      </div>
                      <!--container-->
                    </div>
                    <!--level0-wrapper dropdown-6col-->
                    <!--mega menu-->
                  </li>
                  <li class="mega-menu"> <a class="level-top" href="grid.html"><span>Juices</span></a> </li>
                  <li class="mega-menu"> <a class="level-top" href="grid.html"><span>Meats</span></a> </li>
                  <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
                    <!--sub sub category-->
                    <ul class="level1">
                      <li class="level1 first"><a href="grid.html"><span>Product Grid</span></a></li>
                      <li class="level1 nav-10-2"> <a href="list.html"> <span>Product List</span> </a> </li>
                      <li class="level1 nav-10-3"> <a href="product-detail.html"> <span>Product Detail</span> </a> </li>
                      <li class="level1 nav-10-4"> <a href="shopping-cart.html"> <span>Cart Page</span> </a> </li>
                      <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                        <!--sub sub category-->
                        <ul class="level2 right-sub">
                          <li class="level2 nav-2-1-1 first"><a href="checkout-method.html"><span>Method</span></a></li>
                          <li class="level2 nav-2-1-5 last"><a href="checkout-billing-info.html"><span>Billing Info</span></a></li>
                        </ul>
                        <!--sub sub category-->
                      </li>
                      <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                      <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                      <li class="level1"> <a href="multiple-addresses.html"> <span>Multiple Addresses</span> </a> </li>
                      <li class="level1"> <a href="about-us.html"> <span>About us</span> </a> </li>
                      <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>
                        <!--sub sub category-->
                        <ul class="level2 right-sub">
                          <li class="level2 nav-2-1-1 first"><a href="blog-detail.html"><span>Blog Detail</span></a></li>
                        </ul>
                        <!--sub sub category-->
                      </li>
                      <li class="level1"><a href="contact-us.html"><span>Contact us</span></a> </li>
                      <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                      <li class="level1"><a href="login.html"><span>Login Page</span></a> </li>
                      <li class="level1"><a href="quickview.html"><span>Quick View</span></a> </li>
                      <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a> </li>
                    </ul>
                  </li>
                  <li class="fl-custom-tabmenulink mega-menu"> <a href="#" class="level-top"> <span>Custom</span> </a>
                    <div class="level0-wrapper fl-custom-tabmenu" style="left: 0px; display: none;">
                      <div class="container">
                        <div class="header-nav-dropdown-wrapper clearer">
                          <div class="grid12-3">
                            <div><img src="images/custom-img1.jpg" alt="custom-image"></div>
                            <h4 class="heading">Up to 70% Off</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                          <div class="grid12-3">
                            <div><img src="images/custom-img2.jpg" alt="custom-image"></div>
                            <h4 class="heading">Big Sale - Get 50% oFF</h4>
                            <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                          </div>
                          <div class="grid12-3">
                            <div><img src="images/custom-img3.jpg" alt="custom-image"></div>
                            <h4 class="heading">SALE UP TO 40% OFF</h4>
                            <p>Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.</p>
                          </div>
                          <div class="grid12-3">
                            <div><img src="images/custom-img4.jpg" alt="custom-image"></div>
                            <h4 class="heading">Summer Sale! limited time</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
              </ul>
              <!--nav-->
              </div>
              </nav>
        </div>
        <!--row-->

      <div class="fl-header-right">
        <div class="fl-links">
          <div class="no-js"> <a title="Company" class="clicker"></a>
            <div class="fl-nav-links">
              <div class="language-currency">
                <div class="fl-language">
                  <ul class="lang">
                    <li><a href="#"> <img src="images/english.png" alt="English"> <span>English</span> </a></li>
                    <li><a href="#"> <img src="images/francais.png" alt="French"> <span>French</span> </a></li>
                    <li><a href="#"> <img src="images/german.png" alt="German"> <span>German</span> </a></li>
                  </ul>
                </div>
                <!--fl-language-->
                <!-- END For version 1,2,3,4,6 -->
                <!-- For version 1,2,3,4,6 -->
                <div class="fl-currency">
                  <ul class="currencies_list">
                    <li><a href="#" title="EGP"> £</a></li>
                    <li><a href="#" title="EUR"> €</a></li>
                    <li><a href="#" title="USD"> $</a></li>
                  </ul>
                </div>
                <!--fl-currency-->
                <!-- END For version 1,2,3,4,6 -->
              </div>
              <ul class="links">
                <li><a href="dashboard.html" title="My Account">My Account</a></li>
                <li><a href="wishlist.html" title="Wishlist">Wishlist</a></li>
                <li><a href="checkout.html" title="Checkout">Checkout</a></li>
                <li><a href="blog.html" title="Blog"><span>Blog</span></a></li>
                <li class="last"><a href="login.html" title="Login"><span>Login</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="fl-cart-contain">
          <div class="mini-cart">
            <div class="basket"> <a href="shopping-cart.html"><span> 2 </span></a> </div>
            <div class="fl-mini-cart-content" style="display: none;">
              <div class="block-subtitle">
                <div class="top-subtotal">2 items, <span class="price">$259.99</span> </div>
                <!--top-subtotal-->
                <!--pull-right-->
              </div>
              <!--block-subtitle-->
              <ul class="mini-products-list" id="cart-sidebar">
                <li class="item first">
                  <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="products-images/p4.jpg"></a>
                    <div class="product-details">
                      <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                      <!--access-->
                      <strong>1</strong> x <span class="price">$179.99</span>
                      <p class="product-name"><a href="product-detail.html">Fresh Organic Mustard Leaves</a></p>
                    </div>
                  </div>
                </li>
                <li class="item last">
                  <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="products-images/p3.jpg"></a>
                    <div class="product-details">
                      <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                      <!--access-->
                      <strong>1</strong> x <span class="price">$80.00</span>
                      <p class="product-name"><a href="product-detail.html">Fresh Organic Mustard Leaves</a></p>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="actions">
                <button class="btn-checkout" title="Checkout" type="button" onClick="window.location=checkout.html"><span>Checkout</span></button>
              </div>
              <!--actions-->
            </div>
            <!--fl-mini-cart-content-->
          </div>
        </div>
        <!--mini-cart-->
        <div class="collapse navbar-collapse">
              <form class="navbar-form" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                  <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span> </button>
                  </span> </div>
              </form>
            </div>
        <!--links-->
      </div>
    </div>
  </div>
  </div>
  </header>
<div class="page-heading">
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
            <li class="category1601"> <strong>Vegetables</strong> </li>
          </ul>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
  <div class="page-title">
    <h2>Vegetables</h2>
  </div>
</div>
<!--breadcrumbs-->
<!-- BEGIN Main Container col2-left -->
<section class="main-container col2-left-layout bounceInUp animated">
  <!-- For version 1, 2, 3, 8 -->
  <!-- For version 1, 2, 3 -->
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3 product-grid">
      <div class="pro-coloumn">
      <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="images/category-img1.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Season 2018</div>
                      <h2 class="cat-heading">Organic <span>World</span></h2>
                      <p>GET 40% OFF &sdot; Free Delivery </p>
                    </div>
                  </div>
                  <!-- End Item -->

                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="images/category-img2.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Green World</div>
                      <h2 class="cat-heading">Vegetable <span>sale</span></h2>
                      <p>Save 70% on all items</p>
                    </div>
                    <!-- End Item -->

                  </div>
                </div>
              </div>
            </div>
          </div>

        <article>
          <div class="toolbar">
            <div class="sorter">
              <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span><a href="list.html" title="List" class="button-list">&nbsp;</a> </div>
            </div>
            <div class="sort-by">
              <label class="left">Sort By: </label>
              <ul>
                <li><a href="#">Position<span class="right-arrow"></span></a>
                  <ul>
                    <li><a href="#">Name</a></li>
                    <li><a href="#">Price</a></li>
                    <li><a href="#">Position</a></li>
                  </ul>
                </li>
              </ul>
              <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
            <div class="pager">
              <div class="limiter">
                <label>View: </label>
                <ul>
                  <li><a href="#">15<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">20</a></li>
                      <li><a href="#">30</a></li>
                      <li><a href="#">35</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="pages">
                <label>Page:</label>
                <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="category-products">
            <ul class="products-grid">
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                   <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p16.jpg" alt="Fresh Organic Mustard Leaves "></a>

                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>

              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p2.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="new-label new-top-left">New</div>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p3.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="sale-label sale-top-right">Sale</div>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p4.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                 <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p5.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p6.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p7.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p8.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
			  <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p9.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
			  <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p10.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
			  <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p11.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
			  <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p12.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Quick View</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                      </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Fresh Organic Mustard Leaves </a> </div>
                                  <div class="item-content">
                                    <div class="rating">
                                      <div class="ratings">
                                        <div class="rating-box">
                                          <div class="rating" style="width:80%"></div>
                                        </div>
                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                      </div>
                                    </div>
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
              </li>
            </ul>
          </div>
          <div class="toolbar bottom">
              <div class="display-product-option">
                <div class="pages">
                  <label>Page:</label>
                  <ul class="pagination">
                    <li><a href="#">«</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                  </ul>
                </div>
                <div class="product-option-right">
                  <div class="sort-by">
                    <label class="left">Sort By: </label>
                    <ul>
                      <li><a href="#">Position<span class="right-arrow"></span></a>
                        <ul>
                          <li><a href="#">Name</a></li>
                          <li><a href="#">Price</a></li>
                          <li><a href="#">Position</a></li>
                        </ul>
                      </li>
                    </ul>
                    <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
                  <div class="pager">
                    <div class="limiter">
                      <label>View: </label>
                      <ul>
                        <li><a href="#">15<span class="right-arrow"></span></a>
                          <ul>
                            <li><a href="#">20</a></li>
                            <li><a href="#">30</a></li>
                            <li><a href="#">35</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </article>
        </div>
        <!--	///*///======    End article  ========= //*/// -->
      </div>
      <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
        <!-- BEGIN SIDE-NAV-CATEGORY -->
        <div class="side-nav-categories">
          <div class="block-title"> Categories </div>
          <!--block-title-->
          <!-- BEGIN BOX-CATEGORY -->
          <div class="box-content box-category">
            <ul>
              <li> <a class="active" href="grid.html">Fruits</a> <span class="subDropdown minus"></span>
                <ul class="level0_415" style="display:block">
                  <li> <a href="grid.html"> Tropical Fruits </a> <span class="subDropdown plus"></span>
                    <ul class="level1" style="display:none">
                      <li> <a href="grid.html"><span>Coconuts</span></a> </li>
                      <li> <a href="grid.html"><span>Dragonfruits</span></a> </li>
                      <li> <a href="grid.html"><span>Pomegranates</span></a> </li>
                      <li> <a href="grid.html"><span>Passionfruit</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                  <li> <a href="grid.html">Citrus Fruits </a> <span class="subDropdown plus"></span>
                    <ul class="level1">
                      <li> <a href="grid.html"><span>Fresh Oranges</span></a> </li>
                      <li> <a href="grid.html"><span>Grapefruits</span></a> </li>
                      <li> <a href="grid.html"><span>Organic Limes</span></a> </li>
                      <li> <a href="grid.html"><span>Yellow Lemons</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                  <li> <a href="grid.html">Stone Fruits</a> <span class="subDropdown plus"></span>
                     <ul class="level1">
                      <li> <a href="grid.html"><span>Sweet Apricots</span></a> </li>
                      <li> <a href="grid.html"><span>Nectarines</span></a> </li>
                      <li> <a href="grid.html"><span>Doughnut Peachs</span></a> </li>
                      <li> <a href="grid.html"><span>Italian Fruits</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                  <li> <a href="grid.html">Seasonal Fruits </a> <span class="subDropdown plus"></span>
                    <ul class="level1">
                      <li> <a href="grid.html"><span>Black Jamuns</span></a> </li>
                      <li> <a href="grid.html"><span>Fresh Mangos</span></a> </li>
                      <li> <a href="grid.html"><span>Organic Litchis</span></a> </li>
                      <li> <a href="grid.html"><span>Longans</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>

                  <li> <a href="grid.html">Berries & Cherries </a> <span class="subDropdown plus"></span>
                    <ul class="level1">
                      <li> <a href="grid.html"><span>Strawberries</span></a> </li>
                      <li> <a href="grid.html"><span>Raspberries</span></a> </li>
                      <li> <a href="grid.html"><span>Blackberries</span></a> </li>
                      <li> <a href="grid.html"><span>Cherries</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                </ul>
                <!--level0-->
              </li>
              <!--level 0-->
              <li> <a href="grid.html">Salads</a> <span class="subDropdown plus"></span>
                <ul class="level0_415">
                  <li> <a href="grid.html"> Veg Salads </a> <span class="subDropdown minus"></span>
                    <ul class="level1" style="display:none">
                      <li> <a href="grid.html"><span>Tomatoes</span></a> </li>
                      <li> <a href="grid.html"><span>Cucumbers</span></a> </li>
                      <li> <a href="grid.html"><span>Peppers & Capsicums</span></a> </li>
                      <li> <a href="grid.html"><span>Avocados</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                  <li> <a href="grid.html">Dressings Salads</a> <span class="subDropdown minus"></span>
                   <ul class="level1">
                    <li> <a href="grid.html"><span>Hellmann's</span></a> </li>
                    <li> <a href="grid.html"><span>Giuseppe Giusti</span></a> </li>
                    <li> <a href="grid.html"><span>Unitednature</span></a> </li>
                    <li> <a href="grid.html"><span>Walden Farms</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                  <li> <a href="grid.html">Fruits Salads</a> <span class="subDropdown minus"></span>
                    <ul class="level1">
                     <li> <a href="grid.html"><span>Pineapples</span></a> </li>
                     <li> <a href="grid.html"><span>Red Apple</span></a> </li>
                     <li> <a href="grid.html"><span>Strawberries</span></a> </li>
                     <li> <a href="grid.html"><span>Row Mangos</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                  <li> <a href="grid.html">Bagged Salads</a> <span class="subDropdown minus"></span>
                    <ul class="level1">
                      <li> <a href="grid.html"><span>Italian Baby Spinach</span></a> </li>
                      <li> <a href="grid.html"><span>Australia Green Kale</span></a> </li>
                      <li> <a href="grid.html"><span>Sustenir Fresh Toscano</span></a> </li>
                      <li> <a href="grid.html"><span>Oro Rocket Salad</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                  <li> <a href="grid.html">Lettuce Salads</a> <span class="subDropdown minus"></span>
                    <ul class="level1">
                      <li> <a href="grid.html"><span>Butterhead</span></a> </li>
                      <li> <a href="grid.html"><span>Red Coral</span></a> </li>
                      <li> <a href="grid.html"><span>Rolla Rosa Lettuce</span></a> </li>
                      <li> <a href="grid.html"><span>Summercrisp</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                  <li> <a href="grid.html">Bread Salads</a> <span class="subDropdown minus"></span>
                    <ul class="level1">
                      <li> <a href="grid.html"><span>Green Goddess</span></a> </li>
                      <li> <a href="grid.html"><span>Grilled Broccoli</span></a> </li>
                      <li> <a href="grid.html"><span>Panzanella</span></a> </li>
                      <li> <a href="grid.html"><span>Green Tomato</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>

                </ul>
                <!--level0-->
              </li>
              <!--level 0-->
              <li> <a href="#.html">Vegetables</a> <span class="subDropdown plus"></span>
                <ul class="level0_482">
                  <li> <a href="grid.html">Leafy Vegetables</a> <span class="subDropdown minus"></span>
                    <ul class="level1" style="display:none">
                      <li> <a href="grid.html"><span>Sprouts</span></a> </li>
                      <li> <a href="grid.html"><span>Lettuce</span></a> </li>
                      <li> <a href="grid.html"><span>Banana Leaves</span></a> </li>
                      <li> <a href="grid.html"><span>Microgreens</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                  <li> <a href="grid.html">Mushrooms</a> <span class="subDropdown minus"></span>
                    <ul class="level1">
                      <li> <a href="grid.html"><span>Shimeji Mushroom</span></a> </li>
                      <li> <a href="grid.html"><span>Portobello Mushroom</span></a> </li>
                      <li> <a href="grid.html"><span>Oyster Mushroom</span></a> </li>
                      <li> <a href="grid.html"><span>Shiitake Mushroom</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                  <li> <a href="grid.html">Baby Vegetables</a> <span class="subDropdown minus"></span>
                    <ul class="level1">
                      <li> <a href="grid.html"><span>Cabbage</span></a> </li>
                      <li> <a href="grid.html"><span>Capsicums</span></a> </li>
                      <li> <a href="grid.html"><span>Pak Choi</span></a> </li>
                      <li> <a href="grid.html"><span>Spinach</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                  <li> <a href="grid.html">Salad Vegetables</a> <span class="subDropdown minus"></span>
                    <ul class="level1">
                      <li> <a href="grid.html"><span>Cucumbers</span></a> </li>
                      <li> <a href="grid.html"><span>Avocados</span></a> </li>
                      <li> <a href="grid.html"><span>Mustard Leaves</span></a> </li>
                      <li> <a href="grid.html"><span>Tomatoes</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                 <li> <a href="grid.html">Asian Vegetables</a> <span class="subDropdown minus"></span>
                    <ul class="level1">
                      <li> <a href="grid.html"><span>Spring Onion</span></a> </li>
                      <li> <a href="grid.html"><span>Lady Fingers</span></a> </li>
                      <li> <a href="grid.html"><span>Watercress</span></a> </li>
                      <li> <a href="grid.html"><span>Curry Leaves</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                 <li> <a href="grid.html">Beans Vegetables</a> <span class="subDropdown minus"></span>
                    <ul class="level1">
                      <li> <a href="grid.html"><span>French Beans</span></a> </li>
                      <li> <a href="grid.html"><span>Sweet Corn</span></a> </li>
                      <li> <a href="grid.html"><span>Fine Green Beans</span></a> </li>
                      <li> <a href="grid.html"><span>Petai Beans</span></a> </li>
                    </ul>
                    <!--level1-->
                  </li>
                  <!--level1-->
                </ul>
                <!--level0-->
              </li>
              <!--level 0-->
              <li> <a href="grid.html">Juices‎</a> </li>
               <li> <a href="grid.html">Meats‎</a> </li>
              <!--level 0-->

            </ul>
          </div>
          <!--box-content box-category-->
        </div>
        <!--side-nav-categories-->
        <div class="block block-layered-nav">
          <div class="block-title"> Shop By </div>
          <div class="block-content">
              <p class="block-subtitle">Shopping Options</p>
              <dl id="narrow-by-list">
                <dt class="odd">Price</dt>
                <dd class="odd">
                  <ol>
                    <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a> (6) </li>
                    <li> <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                  </ol>
                </dd>
                <dt class="even">Manufacturer</dt>
                <dd class="even">
                  <ol>
                    <li> <a href="#">TheBrand</a> (9) </li>
                    <li> <a href="#">Company</a> (4) </li>
                    <li> <a href="#">LogoFashion</a> (1) </li>
                  </ol>
                </dd>
                <dt class="odd">Color</dt>
                <dd class="odd">
                  <ol>
                    <li> <a href="#">Green</a> (1) </li>
                    <li> <a href="#">White</a> (5) </li>
                    <li> <a href="#">Black</a> (5) </li>
                    <li> <a href="#">Gray</a> (4) </li>
                    <li> <a href="#">Dark Gray</a> (3) </li>
                </ol>
                </dd>
                <dt class="last even">Size</dt>
                <dd class="last even">
                  <ol>
                    <li> <a href="#">Small</a> (6) </li>
                    <li> <a href="#">Medium</a> (6) </li>
                    <li> <a href="#">Large</a> (4) </li>
                  </ol>
                </dd>
              </dl>
            </div>
        </div>
        <div class="custom-slider">
          <div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active"><img src="images/slide2.jpg" alt="slide3">
                  <div class="carousel-caption">
                  <h4>Fruit Shop</h4>
                    <h3><a title=" Sample Product" href="product-detail.html">Up to 70% Off</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a class="link" href="#">Buy Now</a></div>
                </div>
                <div class="item"><img src="images/slide3.jpg" alt="slide1">
                  <div class="carousel-caption">
                   <h4>Black Grapes</h4>
                    <h3><a title=" Sample Product" href="product-detail.html">Mega Sale</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     <a class="link" href="#">Buy Now</a>
                  </div>
                </div>
                <div class="item"><img src="images/slide1.jpg" alt="slide2">
                  <div class="carousel-caption">
                  <h4>Food Farm</h4>
                    <h3><a title=" Sample Product" href="product-detail.html">Up to 50% Off</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                     <a class="link" href="#">Buy Now</a>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="sr-only">Next</span> </a></div>
          </div>
        </div>

        <div class="block block-list block-cart">
          <div class="block-title"> My Cart </div>
          <div class="block-content">
            <div class="summary">
              <p class="amount">There is <a href="#">1 item</a> in your cart.</p>
              <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$299.00</span> </p>
            </div>
            <div class="ajax-checkout">
              <button type="button" title="Checkout" class="button button-checkout" onClick="#"> <span>Checkout</span> </button>
            </div>
            <p class="block-subtitle">Recently added item(s)</p>
            <ul id="cart-sidebar1" class="mini-products-list">
              <li class="item">
                <div class="item-inner"> <a href="#" class="product-image"><img src="products-images/p1.jpg" width="80" alt="product"></a>
                  <div class="product-details">
                    <div class="access"> <a href="#" class="btn-remove1">Remove</a>
                    <a href="#" title="Edit item" class="btn-edit">
                    <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                    <!--access-->

                    <strong>1</strong> x <span class="price">$299.00</span>
                    <p class="product-name"><a href="#">Fresh Organic Mustard Leaves </a></p>
                  </div>
                  <!--product-details-bottoms-->
                </div>
              </li>
              <li class="item  last1">
                <div class="item-inner"> <a href="#" class="product-image"><img src="products-images/p2.jpg" width="80" alt="product"></a>
                  <div class="product-details">
                    <div class="access"> <a href="#" class="btn-remove1">Remove</a>
                    <a href="#" title="Edit item" class="btn-edit">
                    <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                    <!--access-->

                    <strong>1</strong> x <span class="price">$299.00</span>
                    <p class="product-name"><a href="#">Fresh Organic Mustard Leaves </a></p>
                  </div>
                  <!--product-details-bottoms-->
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="block block-compare">
          <div class="block-title"> Compare Products </div>
         <div class="block-content">
            <ol id="compare-items">
                    <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">Fresh Organic Mustard Leaves </a>            </li>
             <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">Fresh Organic Mustard Leaves </a>            </li>
             <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">Fresh Organic Mustard Leaves </a>            </li>
             <li class="item odd">
                   <a href="#" class="btn-remove1" onClick="#"></a>
                <a class="product-name" href="#">Fresh Organic Mustard Leaves </a>            </li>
              </ol>

        <div class="ajax-checkout">
            <button type="button" title="Compare" class="button button-compare" onClick="#"><span>Compare</span></button>

        </div><!--ajax-checkout-->
        </div>
          <!--block-content-->
        </div>
        <!--block block-list block-compare-->




      </aside>
      <!--col-right sidebar-->
    </div>
    <!--row-->
  </div>
  <!--container-->
</section>
<!--main-container col2-left-layout-->

<div class="container">
    <div class="row our-features-box">
      <ul>
        <li>
          <div class="feature-box">
            <div class="icon-truck"></div>
            <div class="content">FREE SHIPPING on order over $99</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-support"></div>
            <div class="content">Have a question?<br>
              +1 800 789 0000</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-money"></div>
            <div class="content">100% Money Back Guarantee</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-return"></div>
            <div class="content">30 days return Service</div>
          </div>
        </li>
        <li class="last">
          <div class="feature-box"> <a href="#"><i class="fa fa-apple"></i> download</a> <a href="#"><i class="fa fa-android"></i> download</a> </div>
        </li>
      </ul>
    </div>
  </div>

<!-- For version 1,2,3,4,6 -->
<footer>
  <!-- BEGIN INFORMATIVE FOOTER -->
  <div class="footer-inner">
      <div class="newsletter-row">
        <div class="container">
          <div class="row">

            <!-- Footer Newsletter -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col1">
              <div class="newsletter-wrap">
                <h5>Newsletter</h5>
                <h4>Get discount 30% off</h4>
                <form action="#" method="post" id="newsletter-validate-detail1">
                  <div id="container_form_news">
                    <div id="container_form_news2">
                      <input type="text" name="email" id="newsletter1" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Enter your email address">
                      <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>
                    </div>
                    <!--container_form_news2-->
                  </div>
                  <!--container_form_news-->
                </form>
              </div>
              <!--newsletter-wrap-->
            </div>
          </div>
        </div>
        <!--footer-column-last-->
      </div>
      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="footer-column">
                <h4>Shopping Guide</h4>
                <ul class="links">
                  <li><a href="blog.html" title="How to buy">Blog</a></li>
                  <li><a href="faq.html" title="FAQs">FAQs</a></li>
                  <li><a href="#" title="Payment">Payment</a></li>
                  <li><a href="#" title="Shipment">Shipment</a></li>
                  <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                  <li><a href="#" title="Return policy">Return policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="footer-column">
                <h4>Style Advisor</h4>
                <ul class="links">
                  <li><a href="login.html" title="Your Account">Your Account</a></li>
                  <li><a href="#" title="Information">Information</a></li>
                  <li><a href="#" title="Addresses">Addresses</a></li>
                  <li><a href="#" title="Addresses">Discount</a></li>
                  <li><a href="#" title="Orders History">Orders History</a></li>
                  <li><a href="#" title="Order Tracking">Order Tracking</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="footer-column">
                <h4>Information</h4>
                <ul class="links">
                  <li><a href="sitemap.html" title="Site Map">Site Map</a></li>
                  <li><a href="#" title="Search Terms">Search Terms</a></li>
                  <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                  <li><a href="about_us.html" title="About Us">About Us</a></li>
                  <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                  <li><a href="#" title="Suppliers">Suppliers</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="footer-column">
                <h4>Contact Us</h4>
                <div class="contacts-info">
                  <address>
                  <i class="add-icon"></i>ThemesGround, 789 Main rd,<br>
                  Anytown, CA 12345 USA<br>
                  </address>
                  <div class="phone-footer"><i class="phone-icon"></i>+ 888 456-7890</div>
                  <div class="email-footer"><i class="email-icon"></i><a href="mailto:abc@example.com">Qualis@themesground.com</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--container-->
    </div>
  <!--footer-inner--><div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="social">
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 coppyright"> © 2018 ThemesGround. All Rights Reserved. </div>
          <div class="col-xs-12 col-sm-4">
            <div class="payment-accept"> <img src="images/payment-1.png" alt=""> <img src="images/payment-2.png" alt=""> <img src="images/payment-3.png" alt=""> <img src="images/payment-4.png" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
  <!--footer-bottom-->
  <!-- BEGIN SIMPLE FOOTER -->
</footer>

<!-- End For version 1,2,3,4,6 -->

</div>
<!--page-->
<!-- Mobile Menu-->
<div id="mobile-menu">
  <ul>
  <li>
      <div class="mm-search">
        <form id="search1" name="search">
          <div class="input-group">

            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
             <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
          </div>
        </form>
      </div>
    </li>
    <li>
      <div class="home"><a href="#">Home</a> </div>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Grid</a></li>
        <li> <a href="list.html">List</a></li>
        <li> <a href="product-detail.html">Product Detail</a></li>
        <li> <a href="shopping-cart.html">Shopping Cart</a></li>
        <li><a href="checkout.html">Checkout</a>
          <ul>
            <li><a href="checkout-method.html">Checkout Method</a></li>
            <li><a href="checkout-billing-info.html">Checkout Billing Info</a></li>
          </ul>
        </li>
        <li> <a href="wishlist.html">Wishlist</a></li>
        <li> <a href="dashboard.html">Dashboard</a></li>
        <li> <a href="multiple-addresses.html">Multiple Addresses</a></li>
        <li> <a href="about-us.html">About us</a></li>
        <li><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a></li>
          </ul>
        </li>
        <li><a href="contact-us.html">Contact us</a></li>
        <li><a href="404error.html">404 Error Page</a></li>
      </ul>
    </li>
    <li><a href="grid.html">Fruits‎</a>
      <ul>
        <li><a href="grid.html">Tropical Fruits‎</a>
          <ul>
            <li> <a href="grid.html">Coconuts</a> </li>
            <li> <a href="grid.html">Dragonfruits</a> </li>
            <li> <a href="grid.html">Pomegranates</a> </li>
            <li> <a href="grid.html">Passionfruit</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Citrus Fruits‎</a>
          <ul>
            <li> <a href="grid.html">Fresh Oranges</a> </li>
            <li> <a href="grid.html">Grapefruits</a> </li>
            <li> <a href="grid.html">Organic Limes</a> </li>
            <li> <a href="grid.html">Yellow Lemons</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Stone Fruits</a>
          <ul>
            <li> <a href="grid.html">Sweet Apricots</a> </li>
            <li> <a href="grid.html">Nectarines</a> </li>
            <li> <a href="grid.html">Doughnut Peachs</a> </li>
            <li> <a href="grid.html">Italian Fruits</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Large Fruits</a>
          <ul>
            <li> <a href="grid.html">Pineapples</a> </li>
            <li> <a href="grid.html">Organic Papayas</a> </li>
            <li> <a href="grid.html">Fresh Melons</a> </li>
            <li> <a href="grid.html">Grapefruits</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Seasonal Fruits</a>
          <ul>
            <li> <a href="grid.html">Black Jamuns</a> </li>
            <li> <a href="grid.html">Fresh Mangos</a> </li>
            <li> <a href="grid.html">Organic Litchis</a> </li>
            <li> <a href="grid.html">Longans</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Berries & Cherries</a>
          <ul>
            <li> <a href="grid.html">Strawberries</a> </li>
            <li> <a href="grid.html">Raspberries</a> </li>
            <li> <a href="grid.html">Blackberries</a> </li>
            <li> <a href="grid.html">Cherries</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Salads‎</a>
      <ul>
        <li> <a href="grid.html">Veg Salads</a>
          <ul>
            <li> <a href="grid.html">Tomatoes</a> </li>
            <li> <a href="grid.html">Cucumbers</a> </li>
            <li> <a href="grid.html">Peppers & Capsicums</a> </li>
            <li> <a href="grid.html">Avocados</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Dressings Salads</a>
          <ul>
            <li> <a href="grid.html">Hellmann's</a> </li>
            <li> <a href="grid.html">Giuseppe Giusti</a> </li>
            <li> <a href="grid.html">Unitednature</a> </li>
            <li> <a href="grid.html">Walden Farms</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Fruits Salads</a>
          <ul>
            <li> <a href="grid.html">Pineapples</a> </li>
            <li> <a href="grid.html">Red Apple</a> </li>
            <li> <a href="grid.html">Strawberries</a> </li>
            <li> <a href="grid.html">Row Mangos</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Bagged Salads</a>
          <ul>
            <li> <a href="grid.html">Italian Baby Spinach</a> </li>
            <li> <a href="grid.html">Australia Green Kale</a> </li>
            <li> <a href="grid.html">Sustenir Fresh Toscano</a> </li>
            <li> <a href="grid.html">Oro Rocket Salad</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Lettuce Salads</a>
          <ul>
            <li> <a href="grid.html">Butterhead</a> </li>
            <li> <a href="grid.html">Red Coral</a> </li>
            <li> <a href="grid.html">Rolla Rosa Lettuce</a> </li>
            <li> <a href="grid.html">Summercrisp</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Bread Salads</a>
          <ul>
            <li> <a href="grid.html">Green Goddess</a> </li>
            <li> <a href="grid.html">Grilled Broccoli</a> </li>
            <li> <a href="grid.html">Panzanella</a> </li>
            <li> <a href="grid.html">Green Tomato</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Vegetables</a>
      <ul>
        <li> <a href="grid.html">Leafy Vegetables</a>
          <ul>
            <li> <a href="grid.html">Sprouts</a> </li>
            <li> <a href="grid.html">Lettuce</a> </li>
            <li> <a href="grid.html">Banana Leaves</a> </li>
            <li> <a href="grid.html">Microgreens</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Mushrooms</a>
          <ul>
            <li> <a href="grid.html">Shimeji Mushroom</a> </li>
            <li> <a href="grid.html">Portobello Mushroom</a> </li>
            <li> <a href="grid.html">Oyster Mushroom</a> </li>
            <li> <a href="grid.html">Shiitake Mushroom</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Baby Vegetables</a>
          <ul>
            <li> <a href="grid.html">Cabbage</a> </li>
            <li> <a href="grid.html">Capsicums</a> </li>
            <li> <a href="grid.html">Pak Choi</a> </li>
            <li> <a href="grid.html">Spinach</a> </li>
          </ul>
        </li>

        <li> <a href="grid.html">Salad Vegetables</a>
          <ul>
            <li> <a href="grid.html">Cucumbers</a> </li>
            <li> <a href="grid.html">Avocados</a> </li>
            <li> <a href="grid.html">Mustard Leaves</a> </li>
            <li> <a href="grid.html">Tomatoes</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Asian Vegetables</a>
          <ul>
            <li> <a href="grid.html">Spring Onion</a> </li>
            <li> <a href="grid.html">Lady Fingers</a> </li>
            <li> <a href="grid.html">Watercress</a> </li>
            <li> <a href="grid.html">Curry Leaves</a> </li>
          </ul>
        </li>
         <li> <a href="grid.html">Beans Vegetables</a>
          <ul>
            <li> <a href="grid.html">French Beans</a> </li>
            <li> <a href="grid.html">Sweet Corn</a> </li>
            <li> <a href="grid.html">Fine Green Beans</a> </li>
            <li> <a href="grid.html">Petai Beans</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Juices‎</a></li>
     <li><a href="grid.html">Meats‎</a></li>
       <li><a href="#">Custom‎</a></li>
    <li><a href="contact-us.html">Contact Us</a></li>
  </ul>
  <div class="top-links">
    <ul class="links">
      <li><a title="My Account" href="login.html">My Account</a> </li>
      <li><a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
      <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
      <li><a title="Blog" href="blog.html">Blog</a> </li>
      <li class="last"><a title="Login" href="login.html">Login</a> </li>
    </ul>
  </div>
</div>
<!-- JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.mobile-menu.min.js"></script>


</body>
</html>
