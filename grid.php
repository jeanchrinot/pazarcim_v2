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
<?php include 'includes/header.php'; ?>
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
          <div class="category-products" id="grid">
            <ul class="products-grid">
              <?php for ($i=0; $i < 9; $i++) {
               ?>
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                   <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p16.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="new-label new-top-left">New</div>
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
            <?php } ?>
              <!-- <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
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
              </li> -->
            </ul>
          </div>

          <!-- List Products -->

          <div class="category-products" id="list">
            <ol class="products-list" id="products-list">
              <?php for ($i=0; $i < 9; $i++) {
               ?>
          <li class="item first">
            <div class="product-image"> <a href="product-detail.html" title="HTC Rhyme Sense"> <img class="small-image" src="products-images/p1.jpg" alt="HTC Rhyme Sense"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product-detail.html" title="HTC Rhyme Sense">Soğan</a></h2>
              <div class="ratings">
                <div class="rating-box">
                  <div style="width:50%" class="rating"></div>
                </div>
                <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
              </div>
              <div class="desc std">
                <p>Sed volutpat ac massa eget
                  lacinia.
                  Aenean volutpat lacus at dolor blandit </p>
                <p>Sed sed interdum diam. Donec sit ametenim tempor, dapibus nunc eu,
                  tincidunt mi. Vivamus dictum nec... <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box">
                <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> $442.99 </span> </p>
                <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> $222.99 </span> </p>
              </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
        <?php } ?>
        </ol>
          </div>

          <!-- End List Products -->

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

<?php include("includes/services.php"); ?>

<?php include 'includes/footer.php'; ?>

<!-- End For version 1,2,3,4,6 -->

</div>
<!--page-->
<!-- Mobile Menu-->
<?php include 'includes/mobile-header.php'; ?>
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
