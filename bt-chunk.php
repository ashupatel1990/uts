<?php

$title = 'BT Chuck - Unique Tools Solution';
include('header.php');
$products = [
   'BT DC Precision Slim Collet Chuck',
   'BT DHP Hydraulic Chuck',
   'BT DHP Super Slim Hydraulic Chuck',
   'BT DSF Shrink Fit Holder',
   'BT DSK High Precision Chuck',
   'BT ER Spring Collet Chuck',
   'BT FMA BG Face Mill Holder With Extra Taper Shank',
   'BT FMA Face Mill Holder',
   'BT FMB BG Face Mill Holder With Extra Taper Shank',
   'BT FMB Face Mill Holder',
   'BT GSK High Precision Chuck',
   'BT HPC High speed Milling Chuck',
   'BT HPM High Speed Milling Chuck',
   'BT MLC Power Chuck Kit',
   'BT MLC Power Milling Chuck For Heavy Duty',
   'BT MTA Morse Taper Holder',
   'BT MTB Morse Taper Holder',
   'BT SF Shrink Fit Holder',
   'BT SLN Side lock Holder',
   'BT SLO Oil feed Holder',
   'BT SPU Drill Chuck Holder',
   'BT TER Tapping Chuck',
   'BT TPG Rigid Tapping Chuck',
   'BT TPM Tapping Chuck With High Rigidity',
   'BT VER Tapping Chuck',
   'CSO Reducing Sleeve',
   'PB Oil feed Holder Positioning Block'
];
?>
	<div id="wrapper">
    <div class="overlay"></div>
		<header id="header" class="header">
       <?php $menuactive = 'product'; include('menu.php'); ?>
      </header>

      <div class="page-title gray-bg">
         <div class="container">
            <h3>BT Chuck</h3>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Our Products</a></li>
               <li class="breadcrumb-item active" aria-current="page">BT Chuck</li>
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
                                 <a href="assets/images/our-products/tool-holders/bt-chuck/<?= $product ?>.jpg" data-fancybox="gallery" data-caption="<?= $producttitle ?>">
                                    <img src="assets/images/our-products/tool-holders/bt-chuck/thumb/<?= $product ?>.jpg" alt="<?= $product ?>" />
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

