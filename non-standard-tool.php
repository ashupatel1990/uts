<?php
$title = 'NON-STANDARD TOOL - Unique Tools Solution';
include('header.php');

$products = [
   'FEROTECH AOMT 123608PDTR PG30 MILLING INSERT 10 PCS',
   'FEROTECH APKT 1003PDTR PG30 MILLING INSERT 10 PCS',
   'FEROTECH APKT 1604PDTR PG30 MILLING INSERT 10 PCS',
   'FEROTECH APMT 113508PDTR PG30 MILLING INSERT 10 PCS',
   'FEROTECH APMT 160408PDER M2 PG25 MILLING INSERT 10 PCS',
   'FEROTECH APMT 160408PDTR H2 PG30 MILLING INSERT 10 PCS',
   'FEROTECH END MILL D4X10X50X4F 45HRC 10 PCS',
   'FEROTECH RDMT 1204MO PG30 MILLING INSERT 10 PCS',
   'FEROTECH RPMT1204MOE JS PG20 MILLING INSERT 10 PCS',
   'FERTECH RPMT 08T2MO PG30 MILLING INSERT 10 PCS',
   'MGMN 800 M PG20 FEROTECH PARTING INSERT 10 PCS',
   'MICRON BT40 TOOL LOCKING DEVICE'
];
?>

	<div id="wrapper">
    <div class="overlay"></div>
		<header id="header" class="header">
       <?php $menuactive = 'product'; include('menu.php'); ?>
      </header>

      <div class="page-title gray-bg">
         <div class="container">
            <h3>NON-STANDARD TOOL</h3>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Our Products</a></li>
               <li class="breadcrumb-item active" aria-current="page">NON-STANDARD TOOL</li>
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
                                 <a href="assets/images/our-products/non-standard-tool/<?= $product ?>.jpg" data-fancybox="gallery" data-caption="<?= $producttitle ?>">
                                    <img src="assets/images/our-products/non-standard-tool/thumbs/<?= $product ?>.jpg" alt="<?= $product ?>" />
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
