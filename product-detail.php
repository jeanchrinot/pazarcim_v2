<?php session_start();
require_once("includes/connect.php");
require_once("lang/functions_tr.php");

// if($_SERVER['HTTPS'] != "on") {
//   header("Location:https://www.pazarcimapp.com/pazarcim/src/pages/home/");
// }else{

// }

$noproduct = 1;
$product = array();
$price = 0;
$disc = 0;

$key="";
$postID = "";

  if(isset($_GET['id'])){
    $id = $_GET['id'];
     $product = getProduct($id);
     if($product!="noresult"){
        $noproduct=0;
        $product = $product->fetch();

        $price = $product['price'];

        if($product['discount']!="0" AND $product['discount']!=""){
          $disc = $product['discount'];
          $disc_price = $product['price']*$disc/100;
          $disc_price = $product['price'] - $disc_price;
        }

     }
     else{
       header("Location:404.php");
     }
  }
  else{
      header("Location:404.php");
    }



if(isset($_POST['add_to_cart'])){

    $product_id=intval($_POST['product_id']);
    $customer_id=$_SESSION['id'];
    $qty=intval($_POST['qty']);
    $payment_type=1;

  if(isset($customer_id) AND !empty($customer_id)){
if(isset($_POST['product_id']) AND !empty($_POST['product_id']) AND isset($_POST['qty']) AND !empty($_POST['qty'])){

    $checkUser = checkUser();
    if($checkUser!="nouser"){

            //ok save order
            $saveOrder=$connect->prepare("INSERT INTO orders(product_id,customer_id,qty,order_date,payment_type) values(?,?,?,NOW(),?)");

            $saveOrder->execute(array($product_id,$customer_id,$qty,$payment_type));

            if($saveOrder){
                $success= "Added to cart!";
            }
            else{
                $error= "Sorry! You order could not be taken. Please try again.";
            }
    }
    else{
        $error= "Sorry! We couldn't verify you ID";
    }
}
else{
    $error= "Please, make sure you entered the right quantity!";
}
}
else{
  $error ='Please, <a href="../login/login.php">Login</a> to make orders.';
}
}

$page = $product['title'];
$description = $product['title'];
$keywords = "Pazarcım,sebze,meyve,pazar,alışveriş";

?>
<!DOCTYPE html>
<html lang="tr">
<head>
<?php require_once("includes/meta.php"); ?>
<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css" >
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/flexslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i,900" rel="stylesheet">
</head>
<body>
<div id="page">
  <?php require_once("includes/header.php"); ?>
  <div class="page-heading">
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
            <li class="category1601"> <strong>Ürünler</strong> </li>
          </ul>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
  <div class="page-title">
    <h2><?= $product['title']; ?></h2>
  </div>
</div>
  <!-- BEGIN Main Container -->
  <div class="main-container col1-layout wow bounceInUp animated">
    <div class="main">
      <div class="col-main">
        <!-- Endif Next Previous Product -->
        <div class="product-view wow bounceInUp animated" itemscope="" itemtype="http://schema.org/Product" itemid="#product_base">
          <div id="messages_product_view"></div>
          <!--product-next-prev-->
          <div class="product-essential container">
            <div class="row">

              <form action="#" method="post" id="product_addtocart_form">
                <!--End For version 1, 2, 6 -->
                <!-- For version 3 -->
                <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                  <?php if($disc!="0"){  ?>
                  <div class="new-label new-top-left">İndirim</div>
                   <?php } ?>
                  <?php if($disc!="0"){ ?><div class="sale-label sale-top-left">-%<?= $disc; ?></div><?php } ?>
                    <div class="product-image">
                      <div class="product-full"> <img id="product-zoom" src="products-images/<?= $product['image']; ?>" data-zoom-image="products-images/<?= $product['image']; ?>" alt="product-image"/> </div>
                      <div class="more-views">
                        <div class="slider-items-products">
                          <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                            <div class="slider-items slider-width-col4 block-content">
                              <div class="more-views-items"> <a href="#" data-image="products-images/p2.jpg" data-zoom-image="products-images/p2.jpg"> <img id="product-zoom0"  src="products-images/p2.jpg" alt="product-image"/> </a></div>
                              <div class="more-views-items"> <a href="#" data-image="products-images/p3.jpg" data-zoom-image="products-images/p3.jpg"> <img id="product-zoom1"  src="products-images/p3.jpg" alt="product-image"/> </a></div>
                              <div class="more-views-items"> <a href="#" data-image="products-images/p4.jpg" data-zoom-image="products-images/p4.jpg"> <img id="product-zoom2"  src="products-images/p4.jpg" alt="product-image"/> </a></div>
                              <div class="more-views-items"> <a href="#" data-image="products-images/p14.jpg" data-zoom-image="products-images/p14.jpg"> <img id="product-zoom3"  src="products-images/p14.jpg" alt="product-image"/> </a> </div>
                              <div class="more-views-items"> <a href="#" data-image="products-images/p6.jpg" data-zoom-image="products-images/p6.jpg"> <img id="product-zoom4"  src="products-images/p6.jpg" alt="product-image" /> </a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end: more-images -->
                  </div>
                <!--End For version 1,2,6-->
                <!-- For version 3 -->
                <div class="product-shop col-lg- col-sm-7 col-xs-12">
                    <div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>
                    <!-- <div class="brand">XPERIA</div> -->
                    <div class="product-name">
                      <h1><?= $product['title']; ?></h1>
                    </div>
                    <!-- <div class="ratings">
                      <div class="rating-box">
                        <div style="width:60%" class="rating"></div>
                      </div>
                       <p class="rating-links"> <a href="#">1 Review</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                    </div> -->
                    <div class="price-block">
                      <div class="price-box">
                      <p class="availability in-stock"><span>Stokta var</span></p>
                        <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"><?php if($disc!="0"){ echo '<span style="color:#cc1222;"><strike>'.$price.' ₺</strike></span><span> </span><span> </span>  '.$disc_price; } else{ echo $price; } ?> ₺ /<?= $product['qty_unit']; ?></span> </p>


                      </div>
                    </div>
                    <div class="add-to-box">
                      <div class="add-to-cart">
                        <div class="pull-left">
                          <div class="custom pull-left">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                          </div>
                        </div>
                        <button onclick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button">Sepete ekle</button>
                      </div>

                    </div>
                    <div class="short-description">
                                  <p><?= $product['title']; ?></p>
                    </div>
                    <div class="email-addto-box">
                        <ul class="add-to-links">
                          <li> <a class="link-wishlist" href="#"><span>A. Listeme ekle</span></a></li>
                          <!-- <li><span class="separator">|</span> <a class="link-compare" href="compare.html"><span>Add to Compare</span></a></li> -->
                        </ul>
                        <p class="email-friend"><a href="#" class=""><span>Paylaş</span></a></p>
                      </div>
                    <div class="social">
                      <ul class="link">
                        <li class="fb"><a href="#"></a></li>
                        <li class="tw"><a href="#"></a></li>
                        <li class="googleplus"><a href="#"></a></li>
                        <li class="rss"><a href="#"></a></li>
                        <li class="pintrest"><a href="#"></a></li>
                        <li class="linkedin"><a href="#"></a></li>
                        <li class="youtube"><a href="#"></a></li>
                      </ul>
                    </div>

                    <!-- <ul class="shipping-pro">
                                    <li>Uygun teslimat ücreti</li>
                                    <li></li>
                                    <li>Member Discount</li>
                    </ul> -->
                  </div>
                <!--product-shop-->
                <!--Detail page static block for version 3-->
              </form>
            </div>
          </div>
          <!--product-essential-->
          <div class="product-collateral container">
            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
              <li class="active"> <a href="#product_tabs_description" data-toggle="tab">Ürün açıklaması</a> </li>
              <li><a href="#product_tabs_tags" data-toggle="tab">Etiketler</a></li>
              <!-- <li> <a href="#reviews_tabs" data-toggle="tab">Reviews</a> </li>
              <li> <a href="#product_tabs_custom" data-toggle="tab">Custom Tab</a> </li>
              <li> <a href="#product_tabs_custom1" data-toggle="tab">Custom Tab1</a> </li> -->
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="product_tabs_description">
                <div class="std">

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Mauris vel tellus non nunc mattis lobortis. vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. </p>
                  <img alt="" src="images/custom-img2.jpg" style="float:right">
                  <p> Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit.</p>
                  <ul>
                  <li><strong>Mauris vel tellus non nunc mattis lobortis</strong></li>
                  <li><strong>Suspendisse aliquet urna pretium eros convallis</strong></li>
                  <li>Vestibulum ante ipsum <strong>primis in faucibus</strong></li>
                  <li><strong>Fusce ultricies massa massa</strong></li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Mauris vel tellus non nunc mattis lobortis. vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. </p>
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_tags">
                <div class="box-collateral box-tags">
                  <div class="tags">
                    <form id="addTagForm" action="#" method="get">
                      <div class="form-add-tags">

                        <div class="input-box">
                          <input class="input-text" name="productTagName" id="productTagName" type="text" value="enter your tags">
                          <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                        </div>
                        <!--input-box-->
                      </div>
                    </form>
                  </div>
                  <!--tags-->
                  <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                </div>
              </div>
              <div class="tab-pane fade in" id="reviews_tabs">
                      <div class="woocommerce-Reviews">
<div>
<h2 class="woocommerce-Reviews-title">2 reviews for <span>Bacca Bucci Men's Running Shoes</span></h2>
<ol class="commentlist">
<li class="comment">
<div>
<img alt="" src="images/member1.png" class="avatar avatar-60 photo">
<div class="comment-text">
<div class="ratings">
                      <div class="rating-box">
                        <div style="width:100%" class="rating"></div>
                      </div>

                    </div>
<p class="meta">
<strong>John Doe</strong>
<span>–</span> April 19, 2018
</p>
<div class="description"><p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
</div>
</div>
</div>
</li><!-- #comment-## -->
<li class="comment">
<div>
<img alt="" src="images/member2.png" class="avatar avatar-60 photo">
<div class="comment-text">
<div class="ratings">
                      <div class="rating-box">
                        <div style="width:100%" class="rating"></div>
                      </div>

                    </div>
<p class="meta">
<strong>Stephen Smith</strong> <span>–</span> June 02, 2018
</p>
<div class="description"><p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
</div>
</div>
</li><!-- #comment-## -->
</ol>
</div>
<div>
<div>
<div class="comment-respond">
<span class="comment-reply-title">Add a review </span>
<form action="#" method="post" class="comment-form" novalidate>
<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
<div class="comment-form-rating">
<label id="rating">Your rating</label>
<p class="stars">
<span>
<a class="star-1" href="#">1</a>
<a class="star-2" href="#">2</a>
<a class="star-3" href="#">3</a>
<a class="star-4" href="#">4</a>
<a class="star-5" href="#">5</a>
</span>
</p>
</div>
<p class="comment-form-comment">
<label>Your review <span class="required">*</span></label>
<textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
</p>
<p class="comment-form-author">
<label for="author">Name <span class="required">*</span></label>
<input id="author" name="author" type="text" value="" size="30" required></p>
<p class="comment-form-email">
<label for="email">Email <span class="required">*</span></label>
<input id="email" name="email" type="email" value="" size="30"  required></p>
<p class="form-submit">
<input name="submit" type="submit" id="submit" class="submit" value="Submit">
</p>
</form>
</div><!-- #respond -->
</div>
</div>
<div class="clear"></div>
</div>
                    </div>
              <div class="tab-pane fade" id="product_tabs_custom">
                <div class="product-tabs-content-inner clearfix">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
                  <p> Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_custom1">
                <div class="product-tabs-content-inner clearfix">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                </div>
              </div>
            </div>
          </div>


          <!--product-collateral-->
          <div class="box-additional">
            <!-- BEGIN RELATED PRODUCTS -->
            <div class="related-pro container">
              <div class="slider-items-products">
                <div class="new_title center">
                  <h2>Benzer ürünler</h2>
                </div>
                <div id="related-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col4 products-grid">
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p1.jpg" alt="Fresh Organic Mustard Leaves "></a>
                                  <div class="item-box-hover">
                                    <div class="box-inner">
                                      <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Görüntüle</span></a></div>
                                      <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Alışveriş listeme ekle"><span>A. Listeme ekle</span></a></span> </div>

                                    </div>
                                  </div>
                                </div>
                                <div class="add_cart">
                                        <button class="button btn-cart" type="button"><span>Sepete ekle</span></button>
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
                          </div>

          <!-- Item -->
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p2.jpg" alt="Fresh Organic Mustard Leaves "></a>
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
                          </div>
          <!-- End Item -->

          <!-- Item -->
          <div class="item">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="product-detail.html" title="Fresh Organic Mustard Leaves " class="product-image"><img src="products-images/p3.jpg" alt="Fresh Organic Mustard Leaves "></a>
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
                          </div>
          <!-- End Item -->

          <div class="item">
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
                          </div>

          <!-- Item -->
          <div class="item">
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
                          </div>
          <!-- End Item -->

          <!-- Item -->
          <div class="item">
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
                          </div>
          <!-- End Item -->
        </div>
                </div>
              </div>
            </div>
            <!-- end related product -->

          </div>
          <!-- end related product -->
        </div>
        <!--box-additional-->
        <!--product-view-->
      </div>
    </div>
    <!--col-main-->
  </div>
  <!--main-container-->
</div>
<!--col1-layout-->
  <!-- services -->
  <?php include("includes/services.php"); ?>
  <!-- For version 1,2,3,4,6 -->

 <!-- footer -->
 <?php require_once("includes/footer.php"); ?>
  <!-- End For version 1,2,3,4,6 -->

<!--page-->
<?php require_once("includes/mobile-header.php"); ?>
<!-- JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/cloud-zoom.js"></script>
<script src="js/jquery.mobile-menu.min.js"></script>

</body>
</html>
