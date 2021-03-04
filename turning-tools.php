<?php
$title = 'TURNING TOOLS - Unique Tools Solution';
include('header.php');

$products = [
   'FEROTECH AOMT 123608PDTR PG30 MILLING INSERT 10 PCS',
   'FEROTECH APKT 1604PDTR PG30 MILLING INSERT 10 PCS',
   'FEROTECH APMT 113508PDTR PG30 MILLING INSERT 10 PCS',
   'FEROTECH APMT 160408PDER M2 PG25 MILLING INSERT 10 PCS',
   'FEROTECH APMT 160408PDTR H2 PG30 MILLING INSERT 10 PCS',
   'FEROTECH CCMT 060208 AP FS251 10 PCS',
   'FEROTECH RDMT 1204MO PG30 MILLING INSERT 10 PCS',
   'FEROTECH RPMT1204MOE JS PG20 MILLING INSERT 10 PCS',
   'FEROTECH TNMA 160408 HC102 10 PCS',
   'FEROTECH TNMG 160404 MA FS151 10 PCS',
   'FEROTECH TNMG 160408 CM FS251 10 PCS',
   'FEROTECH TNMG 160408 MA FS351 10 PCS',
   'FEROTECH TNMG 160408 MD FS251 TURNING INSERT 10 PCS',
   'FEROTECH TNMG 160412 MD FS251 TURNIN',
   'FEROTECH TNMG 160412 MQ FS151 10 PCS',
   'FEROTECH TNMG 2204080 MF HS251 TURNING INSERT 10 PCS',
   'FEROTECH WNMG 080408 MF HS251 TURNING INSERT 10 PCS',
   'FERTECH RPMT 08T2MO PG30 MILLING INSERT 10 PCS',
   'MGMN 800 M PG20 FEROTECH PARTING INSERT 10 PCS'
];
?>

	<div id="wrapper">
    <div class="overlay"></div>
		<header id="header" class="header">
       <?php
       $menuactive = 'product';
       include('menu.php');
       ?>
      </header>

      <div class="page-title gray-bg">
         <div class="container">
            <h3>TURNING TOOLS</h3>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Our Products</a></li>
               <li class="breadcrumb-item active" aria-current="page">TURNING TOOLS</li>
            </ol>
         </div>
      </div>

      <div id="content">

         <div class="gallery-section wow fadeInUp">
            <div class="container">
               <div class="row">
                  <?php
                     foreach ($products as $producttitle) {
                         $product = str_replace(' ', '-', $producttitle); ?>
                        <div class="col-md-3">
                           <div class="image-col">
                              <div class="image-thumb">
                                 <a href="assets/images/our-products/turning-tools/<?= $product ?>.jpg" data-fancybox="gallery" data-caption="<?= $producttitle ?>">
                                    <img src="assets/images/our-products/turning-tools/thumbs/<?= $product ?>.jpg" alt="<?= $product ?>" />
                                 </a>
                              </div>
                              <h6><?= $producttitle ?></h6>
                           </div>
                        </div>
                     <?php
                     }
                  ?>
                  
               </div>
            </div>
         </div>

      </div>
<?php
include('footer.php');
?>
