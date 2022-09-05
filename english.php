<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/Icon-Color.png" type="">

  <title> Aliki </title>

      <!-- jQery -->
  <link rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" 
  integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" 
  crossorigin="anonymous" />
  <script src="js/jquery-3.5.1.min.js"></script>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--owl slider stylesheet -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.css">

  <!-- nice select  -->

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet" />
  <link href="//db.onlinewebfonts.com/c/125063e353c1f65c55ba1e3811969217?family=GE+SS+Two+Medium" rel="stylesheet" type="text/css"/>

  <!-- Custom styles for this template -->
  <link href="css/styleEnglish.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>


<body class="sub_page">

<div class="hero_area">
  <!-- header section strats -->
  <header class="header_section">

  <div class="navbar navbar-expand bg-box">
  <img src="images/Asset 1@5x.png" style="opacity: 1 ;" alt="" class="bgimg">
  <img src="images/Logo-White-en.png" alt="" width="100px">
</div>


  <div class="navbar navbar-expand-lg custom_nav-container " id="main">
  <button class="navbar-toggler" onclick="openNav()" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>
  </div>

  <div id="mySidebar" class="sidebar">
  <a class="nav-link" style="padding-top: 40px;" href="">
        <img src="images/Logo-White-En.png" alt="" width="100px;">
      <span class="sr-only">(current)</span> </a>
      <hr>
  <a href="index.php">Arabic Menu</a>
  <hr>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-window-close"></i></a>

  </div>


  </div>

  </header>
  <!-- end header section -->
</div>


<!-- food section -->
<!--  -->

<!-- <ul class="navbar-nav  mx-auto ">
            <li class="nav-item active">
            </li>
            <li class="nav-item">
              <a class="nav-link eng" style=" font-family: 'GE SS Two Medium' " href="index.php">ع</a>
            </li>
          </ul> -->
<!--  -->
<section class="food_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
      Menu
      </h2>
    </div>
    <div class="containr heading_center">
      <ul class="filters_menu  item-grid owl-carousel owl-loaded owl-drag">
      <div class="item" style="align-items:center">
      <li class="active" data-filter="*" >
        <h6 style="padding: 10px 0px 10px 0px;">All</h6>
        <!-- <img src="images/Icon-Color.png" 
        width="50px" height="50px" alt=""> -->
      </li>
      </div>
        <div class="item" style="align-items:center">
        <li data-filter=".starters">
          <h6 style="padding: 10px 0px 10px 0px;" >Starters</h6>
        <!-- <img class="img" src="images/starters/Grilled__Mexican_corn.png" 
        width="50px" height="50px" alt=""> -->
      </li>
    </div>
        <div class="item" style="align-items:center">
        <li data-filter=".salads">
          <h6 style="padding: 10px 0px 10px 0px;" >Salads</h6>
      <!-- <img src="images/salads/Aliki_special_salad.png" 
      width="50px" height="50px" alt=""> -->
      </li>
        </div>
        <div class="item" style="align-items:center">
        <li data-filter=".fries">
          <h6 style="padding: 10px 0px 10px 0px;">Fries</h6>
      <!-- <img src="images/fries/Regular_fries.png" 
      width="50px" height="50px" alt=""> -->
      </li>
        </div>
        <div class="item" style="align-items:center">
        <li data-filter=".beef-burger">
          <h6 style="padding: 10px 0px 10px 0px;" >Beef Burgers</h6>
      <!-- <img src="images/beef-burger/Cheeseburger.png" 
      width="50px" height="50px" alt=""> -->
      </li>
        </div>
        <div class="item" style="align-items:center">
        <li data-filter=".chicken-burger">
          <h6 style="padding: 10px 0px 10px 0px;">Chicken Burgers</h6>
      <!-- <img src="images/chicken-burger/Classical_fried_chicken_burger__Fried.png" 
      width="50px" height="50px" alt=""> -->
      </li>
        </div>
        <div class="item" style="align-items:center">
        <li data-filter=".hot-dog">
          <h6 style="padding: 10px 0px 10px 0px;">Beef Hot Dogs</h6>
      <!-- <img src="images/hot-dog/Mac___cheese_hot_dog.png" 
      width="50px" height="50px" alt=""> -->
      </li>
        </div>
        </ul>

<!-- starter CAT -->

<div class="filters-content">
        <div class="row grid">
<?php

require "vendor/autoload.php";
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet = $reader->load("menu.xlsx");
for ($sheet=1 ; $sheet<= $spreadsheet->getSheetCount(); $sheet++){
  $sheetname=$spreadsheet->getSheetNames();
foreach($sheetname as $sheetname){
$reader->setLoadSheetsOnly($sheetname);
$spreadsheet = $reader->load("menu.xlsx");
$worksheet = $spreadsheet->getActiveSheet();

$highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
$highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5

  for ($col = 2; $col <= $highestColumnIndex; ++$col) {
    for ($row = 2; $row <= 2; ++$row) {
      $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
      $dir=$worksheet->getCellByColumnAndRow(1, 1)->getValue();
?>

          <div class="col-sm-6 col-lg-4 all <?php echo $dir; ?>">
            <div class="box">
              <div>
                <div class="img-box">
                  <?php
                      echo "<img src='images/".$dir."/".$value . "' >" ; }
                      for ($row = 3; $row <= 3; ++$row) {
                  ?>
                </div>
                <!--  -->
                <div class="detail-box">
                  <h5>
                    <?php  
                    $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
                    echo $value; }
                    for ($row = 4; $row <= 4; ++$row) {
                    ?>
                  </h5>
                  <div class="desc">
                    <?php
                        $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
                        echo $value; }
                        for ($row = 5; $row <= 5; ++$row) {
                    ?>
                  </div>
                  <div class="options">
                    <h6>
                    <?php
                        $value = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
                        echo $value." SAR" ; }
                    ?>
                    </h6>
                  </div>
                </div>
                <!--  -->
              </div>
            </div>
          </div>
          <?php }}}
          ?>
<!-- salad CAT  -->

          <div class="col-sm-6 col-lg-4 all Salad">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/starters/Mozzarella_pop-removebg.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Delicious Burger
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $15
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 footer-col">
          <div class="footer_contact">
            <h4>
              Order now
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +966 0537477724
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              <span>
                <img src="images/Logo-White-En.png" alt="" width="75px;">
              </span>
            </a>
            <p>
              Our values show the customer's outlook as 
              the basis for all our business through 
              commitment versus giving and service in a 
              distinctive way
            </p>
            <div class="footer_social">
              <a href="https://twitter.com/ksa_aliki">
                <i class="fab fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/aliki.ksa/">
                <i class="fab fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          Aliki Restaurant<br><br>
          <!-- &copy; <span id="displayYear"></span> Distributed By
          <a href="https://themewagon.com/" target="_blank">mhmdtamermt@gmail.com</a> -->
        </p>
      </div>
    </div>
  </footer>
  </div>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script> -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/customEnglish.js"></script>

</body>

</html>