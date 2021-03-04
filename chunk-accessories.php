<?php

$title = 'BT Chuck - Unique Tools Solution';
include('header.php');
$products = [
   'BT Pull Stud With Cooling Hole',
   'BT Pull Stud Without Hole',
   'Clamping Nut For ER Collet Chuck',
   'Clamping Nuts For DSK Collet Chuck',
   'Clamping Nuts For GSK Collet Chuck',
   'DC Collet Extender',
   'DC Slim Collet',
   'DIN2080 Pull Stud',
   'DSF Shrink Fit Extender',
   'DSK Collet Extender',
   'DSK Precision Collet',
   'ER Collet Extender M Type',
   'ER Collet Extender',
   'ER Collet',
   'Hydraulic Collet Flange Cooling',
   'Hydraulic Collet Internal Cooling',
   'J Nut for High Speed Tool Holder',
   'MAZAK Pull Stud',
   'MTB Tension Screw',
   'SC Straight Collet',
   'SF 3500 SHRINK FIT MACHINE',
   'SF Shrink Fit Extender',
   'SK Pull Stud With Cooling Hole',
   'Seal Ring For ER Clamping Nut',
   'TPD316 Tapping Collet',
   'TPD830 Tapping Collet',
   'TPE1024 Tapping Collet',
   'TPE312 Tapping Collet',
   'VER Synchronized Tapping Extender',
   'Wrench For DC Extender',
   'Wrench For DSK Tool Holder',
   'Wrench For Drill Chuck SPU',
   'Wrench For ER Tool Holder',
   'Wrench For GSK Tool Holder',
   'Wrench For MSK Nuts Seal',
   'Wrench For Milling Chuck HPM',
   'Wrench For TPD Tapping Collet',
   'Wrench For Tool Holder MLCHPC',
   'Wrench for HSK Coolant Pipe'
];
?>
	<div id="wrapper">
    <div class="overlay"></div>
		<header id="header" class="header">
       <?php $menuactive = 'product'; include('menu.php'); ?>
      </header>

      <div class="page-title gray-bg">
         <div class="container">
            <h3>Chuck Accessories</h3>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Our Products</a></li>
               <li class="breadcrumb-item active" aria-current="page">Chuck Accessories</li>
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
                                 <a href="assets/images/our-products/tool-holders/chuck-accessories/<?= $product ?>.jpg" data-fancybox="gallery" data-caption="<?= $producttitle ?>">
                                    <img src="assets/images/our-products/tool-holders/chuck-accessories/thumb/<?= $product ?>.jpg" alt="<?= $product ?>" />
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

