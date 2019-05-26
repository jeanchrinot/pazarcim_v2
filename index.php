<?php session_start();
require_once("includes/connect.php");
require_once("lang/functions_tr.php");

// if($_SERVER['HTTPS'] != "on") {
//   header("Location:https://www.pazarcimapp.com/pazarcim/src/pages/home/");
// }else{

// }

// get ip
$ip = getRealIpAddr();
// check ip exist
$checkIp = $connect->prepare("SELECT * FROM app_uses WHERE ip=?");
$checkIp->execute(array($ip));
if($checkIp->rowCount()==1){
    // fetch
    $visit = $checkIp->fetch();
    //update visit
    $counter = $visit['counter'] + 1;
    $update = $connect->prepare("UPDATE app_uses SET counter=?,last_use=NOW() WHERE ip=?");
    $update->execute(array($counter,$ip));

}
else{
    // save ip
    $counter = 1;
    $saveIp = $connect->prepare("INSERT INTO app_uses(ip,first_use,counter,last_use) values(?,NOW(),?,NOW())");
    $saveIp->execute(array($ip,$counter));
}

$noproduct = 1;
$products = array();

$key="";
$postID = "";

  if(isset($_POST['filterTrigger'])){
    $filter = $_POST['filter'];
     $get_products = filterProducts($filter);
     if($get_products!="noresult"){
        $noproduct=0;
          while($rows = $get_products->fetch()){
              $products [] = $rows;
          }
     }
  }
  else{
      $get_products = getProducts(15);


      if($get_products!="noresult"){
          $noproduct=0;
          while($rows = $get_products->fetch()){
              $products [] = $rows;
              $postID = $rows['id'];
          }

        }
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

$page = "Anasayfa";
$description = "Pazarcım bir meyve sebze satış uygulaması ve teslimat hizmetidir.";
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
<style type="text/css">
  span + span {
    margin-left: 10px;
}
</style>
</head>
<body>
<div id="page">
  <!-- header -->
  <?php require_once("includes/header.php"); ?>
  <!--container-->
  <div class="content">
    <div id="thmg-slider-slideshow" class="thmg-slider-slideshow">
      <div class="container">
        <div id='thm_slider_wrapper' class='thm_slider_wrapper fullwidthbanner-container' >
          <div id='thm-rev-slider' class='rev_slider fullwidthabanner'>
            <ul>
              <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img1.jpg'><img src='images/slide-img2.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image1" />
                <div class="info">
                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Taze Taze</span></div>
                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>Meyve ve <span>Sebze</span></div>
                  <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='520'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='list.html' class="buy-btn">Alışverişe başla</a></div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Pazardan kapınıza gelsin</div>
                </div>
              </li>
              <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img3.jpg'><img src='images/slide-img3.jpg'  data-bgposition='left top'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="slider-image2"  />
                <div class="info">
                  <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-x='0'  data-y='220'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Taze ve Sağlıklı</span></div>
                  <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-x='0'  data-y='300'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span>100%</span> Organik</div>
                  <div class='tp-caption sfb  tp-resizeme ' data-x='0'  data-y='520'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='list.html' class="buy-btn">Alışverişe başla</a></div>
                  <div    class='tp-caption Title sft  tp-resizeme ' data-x='0'  data-y='420'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Ürünler kapınıza kadar gelsin</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--Category slider Start-->
    <!--Category silder End-->

    <div id="top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="1"> <img src="images/banner-img1.jpg" alt="promotion-banner1"> </a> </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="2"> <img src="images/banner-img2.jpg" alt="promotion-banner2"> </a> </div>
          <!--the promotion banners are to be designed by the design and marketing teams-->
        </div>
      </div>
    </div>

    <!-- best Pro Slider -->
    <section class=" wow bounceInUp animated">
      <div class="best-pro slider-items-products container">
        <div class="new_title">
          <h2>En Çok satılanlar</h2>
        </div>
        <div id="best-seller" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col4 products-grid">
        <?php  if($noproduct==0){


          foreach($products as $product){
              $like = 0;
              if(isset($_SESSION['id'])){
              // check Likes
              $checkLike = $connect->prepare("SELECT * FROM likes WHERE customer_id=? AND product_id=?");
              $checkLike->execute(array($_SESSION['id'],$product['id']));

              if($checkLike->rowCount()!=0){
                  $like = 1;
              }

              }
              $price = $product['price'];
              $disc = 0;

              if($product['discount']!="0" AND $product['discount']!=""){
                $disc = $product['discount'];
                $disc_price = $product['price']*$disc/100;
                $disc_price = $product['price'] - $disc_price;
              }

              $title = $product['title'];
              $truncated = (strlen($title) > 20) ? substr($title, 0, 20).'...' : $title;


          ?>
            <div class="item">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info" title="<?= $product['title']; ?> "><a href="product-detail.php?id=<?= $product['id']; ?>" class="product-image"><img src="products-images/<?= $product['image']; ?>" alt="<?= $product['title']; ?>"></a>
                    <?php if($disc!="0"){  ?>
                    <div class="new-label new-top-left">İndirim</div>
                     <?php } ?>
                    <?php if($disc!="0"){ ?><div class="sale-label sale-top-left">-%<?= $disc; ?></div><?php } ?>
                    <div class="item-box-hover">
                      <div class="box-inner">
                        <div class="product-detail-bnt"><a class="button detail-bnt"><span>Detay</span></a></div>
                        <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="A. Listeme ekle"><span>A. Listeme ekle</span></a> <!--<a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a>--></span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="add_cart">
                    <button class="button btn-cart" type="button"><span>Sepete ekle</span></button>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"><a href="product-detail.php?id=<?= $product['id']; ?>" title="<?= $product['title']; ?> "><?= $truncated ?> </a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <div class="rating-box">
                            <div class="rating" style="width:80%"></div>
                          </div>
                          <p class="rating-links"><a href="#">1 Değerlendirme</a> <span class="separator">|</span> <a href="#">Değerlendir</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price" ><span class="price"><?php if($disc!="0"){ echo '<span style="color:#cc1222;"><strike>'.$price.' ₺</strike></span><span> </span><span> </span>  '.$disc_price; } else{ echo $price; } ?> ₺ /<?= $product['qty_unit']; ?></span> </span> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } } ?>
          </div>
        </div>
      </div>
    </section>
    <div class="hot-section">
      <div class="container">
        <div class="row">
          <div class="ad-info">
            <h2>Kaçırmayın!</h2>
            <h3>Ramazan Fırsatları</h3>
            <h4>Ramazan ayına özel indirimleri yakalayın.</h4>
          </div>
        </div>
        <div class="row">
          <div class="hot-deal best-pro">
            <div class="new_title">
                <h2>İndirimli Ürünler</h2>
            </div>
            <!-- <div class="box-timer">
              <div class="countbox_1 timer-grid"></div>
            </div> -->
            <ul class="products-grid">

              <?php  if($noproduct==0){


          foreach($products as $product){
              $like = 0;
              if(isset($_SESSION['id'])){
              // check Likes
              $checkLike = $connect->prepare("SELECT * FROM likes WHERE customer_id=? AND product_id=?");
              $checkLike->execute(array($_SESSION['id'],$product['id']));

              if($checkLike->rowCount()!=0){
                  $like = 1;
              }

              }
              $price = $product['price'];
              $disc = 0;

              if($product['discount']!="0" AND $product['discount']!=""){
                $disc = $product['discount'];
                $disc_price = $product['price']*$disc/100;
                $disc_price = $product['price'] - $disc_price;
              }
              $title = $product['title'];
              $truncated = (strlen($title) > 20) ? substr($title, 0, 20).'...' : $title;

          ?>

              <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"><a href="product-detail.php?id=<?= $product['id']; ?>" title="<?= $product['title']; ?> " class="product-image"><img src="products-images/<?= $product['image']; ?> " alt="<?= $product['title']; ?>  "></a>
                      <?php if($disc!="0"){  ?>
                    <div class="new-label new-top-left">İndirim</div>
                     <?php } ?>
                    <?php if($disc!="0"){ ?><div class="sale-label sale-top-left">-%<?= $disc; ?></div><?php } ?>
                      <!-- <div class="new-label new-top-left">Sıcak</div> -->
                      <div class="item-box-hover">
                        <div class="box-inner">
                          <div class="product-detail-bnt"><a href="#" class="button detail-bnt"><span>Görüntüle</span></a></div>
                          <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Alışveriş listeme ekle"><span>A. Listeme ekle</span></a> <!--<a href="#" class="link-compare add_to_compare" title="Add to Compare"><span>Karşılaştır</span></a>--></span> </div>
                        </div>
                      </div>
                    </div>
                    <div class="add_cart">
                      <button class="button btn-cart" type="button"><span>sepete ekle</span></button>

                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"><a href="product-detail.php?id=<?= $product['id']; ?>" title="<?= $product['title']; ?>  "><?= $truncated ?> </a> </div>
                      <div class="item-content">
                        <div class="rating">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating" style="width:80%"></div>
                            </div>
                            <p class="rating-links"><a href="#">1 Değerlendirme</a> <span class="separator">|</span> <a href="#">Değerlendirme</a> </p>
                          </div>
                        </div>
                        <div class="item-price">
                          <div class="price-box"><span class="regular-price"><span class="price"><?php if($disc!="0"){ echo '<span style="color:#cc1222;"><strike>'.$price.' ₺</strike></span><span> </span><span> </span>  '.$disc_price; } else{ echo $price; } ?> ₺ /<?= $product['qty_unit']; ?></span> </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            <?php } } ?>
            </ul>
          </div>
        </div>
        <!--<div class="row">
          <div class="testimonials-section slider-items-products">
            <div  id="testimonials" class="offer-slider parallax parallax-2">
              <div class="slider-items slider-width-col6">
                <div class="item">
                  <div class="avatar"><img src="images/member1.png" alt="Image"></div>
                  <div class="testimonials">Perfect Themes and the best of all that you have many options to choose! Very fast responding! I highly recommend this theme and these people!</div>
                  <div class="clients_author"> Smith John <span>Happy Customer</span> </div>
                </div>
                <div class="item">
                  <div class="avatar"><img src="images/member2.png" alt="Image"></div>
                  <div class="testimonials">Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated.</div>
                  <div class="clients_author"> Karla Anderson <span>Happy Customer</span> </div>
                </div>
                <div class="item">
                  <div class="avatar"><img src="images/member3.png" alt="Image"></div>
                  <div class="testimonials">Our support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</div>
                  <div class="clients_author"> Stephen Smith <span>Happy Customer</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>-->
        <!--brands we are associated with and part of our marketing campaign for exapmle itu çekirdek -->
        <div class="row">
          <div class="logo-brand">
            <div class="slider-items-products">
              <div id="brand-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col6">
                  <!-- Item -->
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand1.png" alt="Image"></a></div>
                  </div>
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand2.png" alt="Image"></a></div>
                  </div>
                  <!-- End Item -->
                  <!-- Item -->
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand3.png" alt="Image"></a></div>
                  </div>
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand4.png" alt="Image"></a></div>
                  </div>
                  <!-- End Item -->
                  <!-- Item -->
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand5.png" alt="Image"></a></div>
                  </div>
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand6.png" alt="Image"></a></div>
                  </div>
                  <!-- End Item -->
                  <!-- Item -->
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand1.png" alt="Image"></a></div>
                  </div>
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand2.png" alt="Image"></a></div>
                  </div>
                  <!-- End Item -->
                  <!-- Item -->
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand3.png" alt="Image"></a></div>
                  </div>
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand4.png" alt="Image"></a></div>
                  </div>
                  <!-- End Item -->
                  <!-- Item -->
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand5.png" alt="Image"></a></div>
                  </div>
                  <div class="item">
                    <div class="logo-item"><a href="#"><img src="images/brand6.png" alt="Image"></a></div>
                  </div>
                  <!-- End Item -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include("includes/latest-blog.php"); ?>

    <!-- Logo Brand Block -->

  </div>
  <div class="mid-section">
    <div class="container">
      <div class="row">
        <h3>Neden Pazarcım?</h3>
        <h2>Çözümlerimiz</h2>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="block1"> <strong>Zaman tasarrufu</strong>
            <p>Pazara gitmek yerine, Pazarcım ile sipariş vererek zaman kazanın</p>
          </div>
          <div class="block2"> <strong>100% organik ve taze ürün</strong>
            <p>Sağlıklı organik ve taze ürünleri biz kapınıza getirelim.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="spl-pro"><a href="product-detail.html" title="Fresh Organic Mustard Leaves "><img src="products-images/p12.jpg" alt="Fresh Organic Mustard Leaves "></a>
            <div class="item-info">
              <div class="info-inner">
                <div class="item-title"><a href="product-detail.html" title="Fresh Organic Mustard Leaves ">Pazarcım ile yeni hayata başlayın</a> </div>
                <div class="item-content">
                  <div class="rating">
                    <div class="ratings">
                      <div class="rating-box">
                        <div class="rating" style="width:80%"></div>
                      </div>
                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="block3"> <strong>Uygun ücret</strong>
            <p>Zaman ve enerjinizi tasarruf ederek uygun fiyata ürün alın.</p>
          </div>
          <div class="block4"> <strong>Enerji tasarrufu</strong>
            <p>Pazardan poşet taşımaktan kurtulun.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- services -->
  <?php include("includes/services.php"); ?>
  <!-- For version 1,2,3,4,6 -->

 <!-- footer -->
 <?php require_once("includes/footer.php"); ?>
  <!-- End For version 1,2,3,4,6 -->
</div>
<!--page-->
<?php include("includes/mobile-header.php"); ?>
<!-- JavaScript -->
<script src="js/animations.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/revslider.js"></script>
<script src="js/common.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.mobile-menu.min.js"></script>
<script src="js/countdown.js"></script>
<script>
        jQuery(document).ready(function(){
            jQuery('#thm-rev-slider').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 0,
                startheight:750,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'on',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'on',
                forceFullWidth: 'off',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,

                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
<script>
    function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
    }
</script>
<!-- Hot Deals Timer 1-->
<script>
      var dthen1 = new Date("12/25/17 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if (CountStepper > 0)
      ddiff = new Date((dnow1) - (dthen1));
      else
      ddiff = new Date((dthen1) - (dnow1));
      gsecs1 = Math.floor(ddiff.valueOf() / 1000);

      var iid1 = "countbox_1";
      CountBack_slider(gsecs1, "countbox_1", 1);
    </script>
</body>

<!-- Mirrored from themesground.com/qmart-demo/V1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 16:18:22 GMT -->
</html>
