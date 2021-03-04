<?php

$title = 'SK Chuck - Unique Tools Solution';
include('header.php');
$products = [
   'CSO Oil feed Holder Reducing Sleeve',
   'PB Oil feed Holder Positioning Block',
   'SK DC Precision Slim Collet Chuck',
   'SK DHP Hydraulic Chuck',
   'SK DSF Shrink Fit Holder',
   'SK DSK High Speed Milling Holder',
   'SK ER Spring Collet Chuck',
   'SK FMB Face Milling Holder',
   'SK GSK High Speed Milling Holder',
   'SK HPC High Speed Milling Chuck',
   'SK HPM High Speed Milling Chuck',
   'SK MLC Power Chuck Kit',
   'SK MLC Power Milling Chuck',
   'SK MTA Morse Taper Holder',
   'SK MTB Morse Taper Holder',
   'SK SF Shrink Fit Holder',
   'SK SLN Side Lock Holder',
   'SK SLO Oil feed Holder',
   'SK SPU Drill Chuck Holder',
   'SK TER Tapping Chuck',
   'SK TPG Rigid Tapping Chuck',
   'SK TPM Tapping Chuck With High Rigidity',
   'SK VER Tapping Chuck'
];
?>
	<div id="wrapper">
    <div class="overlay"></div>
		<header id="header" class="header">
       <?php $menuactive = 'product'; include('menu.php'); ?>
      </header>

      <div class="page-title gray-bg">
         <div class="container">
            <h3>SK Chuck</h3>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Our Products</a></li>
               <li class="breadcrumb-item active" aria-current="page">SK Chuck</li>
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
                                 <a href="assets/images/our-products/tool-holders/sk-chuck/<?= $product ?>.jpg" data-fancybox="gallery" data-caption="<?= $producttitle ?>">
                                    <img src="assets/images/our-products/tool-holders/sk-chuck/thumb/<?= $product ?>.jpg" alt="<?= $product ?>" />
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

