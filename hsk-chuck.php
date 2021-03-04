<?php
$title = 'HSK Chuck - Unique Tools Solution';
include('header.php');

$products = [
   'HSK A DC Precision Slim Collet Chuck',
   'HSK A DHP Hydraulic Chuck',
   'HSK A DHP Super Slim Hydraulic Chuck',
   'HSK A DSF Shrink Fit Holder',
   'HSK A ER Spring Collet Chuck',
   'HSK A FMB Face Mill Holder',
   'HSK A GSK High speed Collet Chuck',
   'HSK A HPC High Speed Milling Chuck',
   'HSK A HPM High Speed Milling Chuck',
   'HSK A MTA Morse Taper Adapter',
   'HSK A SF Shrink Fit Holder',
   'HSK A SLN Side lock Holder',
   'HSK A SLNB Side lock Holder',
   'HSK A SPU Drill Chuck Holder',
   'HSK A TPG Rigid Tapping Chuck',
   'HSK A VER Tapping Chuck'
];
?>
	<div id="wrapper">
    <div class="overlay"></div>
		<header id="header" class="header">
       <?php $menuactive = 'product'; include('menu.php'); ?>
      </header>

      <div class="page-title gray-bg">
         <div class="container">
            <h3>HSK Chuck</h3>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Our Products</a></li>
               <li class="breadcrumb-item active" aria-current="page">HSK Chuck</li>
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
                                 <a href="assets/images/our-products/tool-holders/hsk-chuck/<?= $product ?>.jpg" data-fancybox="gallery" data-caption="<?= $producttitle ?>">
                                    <img src="assets/images/our-products/tool-holders/hsk-chuck/thumb/<?= $product ?>.jpg" alt="<?= $product ?>" />
                                 </a>
                              </div>
                              <h6><?= $producttitle ?></h6>
                           </div>
                        </div>
                     <?php
                     }
                  ?>
                  <?php
                  /*
                  <!--
                  <div class="col-md-3">
                     <div class="image-col">
                        <div class="image-thumb">
                           <a href="assets/images/our-products/milling-cutters/DEREK-BULL-DIA.25MM-FOR-RDMT10T3-TRS-C25-5R25-200-2T.jpg" data-fancybox="gallery" data-caption="DEREK-BULL-DIA.25MM-FOR-RDMT10T3-TRS-C25-5R25-200-2T">
                              <img src="assets/images/our-products/milling-cutters/DEREK-BULL-DIA.25MM-FOR-RDMT10T3-TRS-C25-5R25-200-2T.jpg" alt="DEREK-BULL-DIA.25MM-FOR-RDMT10T3-TRS-C25-5R25-200-2T" />
                           </a>
                        </div>
                        <h6>DEREK BULL DIA.25MM FOR RDMT10T3 TRS C25 5R25 200 2T</h6>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="image-col">
                        <div class="image-thumb">
                           <a href="assets/images/our-products/milling-cutters/DEREK-END-MILL-DIA.16MM-FOR-APKT11T3-ZAP-C16-16-200-2T.jpg" data-fancybox="gallery">
                              <img src="assets/images/our-products/milling-cutters/DEREK-END-MILL-DIA.16MM-FOR-APKT11T3-ZAP-C16-16-200-2T.jpg" alt="DEREK-END-MILL-DIA.16MM-FOR-APKT11T3-ZAP-C16-16-200-2T" />
                           </a>
                        </div>
                        <h6>DEREK END MILL DIA.16MM FOR APKT11T3 ZAP C16 16 200 2T</h6>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="image-col">
                        <div class="image-thumb">
                           <a href="assets/images/our-products/milling-cutters/DEREK-HIGH-FEED-DIA.32MM-FOR-EPNW0603TN-ASR-C32-32-160-4T.jpg" data-fancybox="gallery" title="DEREK-HIGH-FEED-DIA.32MM-FOR-EPNW0603TN-ASR-C32-32-160-4T">
                              <img src="assets/images/our-products/milling-cutters/DEREK-HIGH-FEED-DIA.32MM-FOR-EPNW0603TN-ASR-C32-32-160-4T.jpg" alt="DEREK-HIGH-FEED-DIA.32MM-FOR-EPNW0603TN-ASR-C32-32-160-4T">
                           </a>
                        </div>
                        <h6>DEREK HIGH FEED DIA.32MM FOR EPNW0603TN ASR C32 32 160 4T</h6>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="image-col">
                        <div class="image-thumb">
                        <a href="assets/images/our-products/milling-cutters/DEREK-HIGH-FEED-DIA.32MM-FOR-WDMW0805-SKS-C32-32-200-2T.jpg" data-fancybox="gallery" data-caption="DEREK-HIGH-FEED-DIA.32MM-FOR-WDMW0805-SKS-C32-32-200-2T">
            <img src="assets/images/our-products/milling-cutters/DEREK-HIGH-FEED-DIA.32MM-FOR-WDMW0805-SKS-C32-32-200-2T.jpg" alt="DEREK-HIGH-FEED-DIA.32MM-FOR-WDMW0805-SKS-C32-32-200-2T">
        </a></div>
        <h6>DEREK HIGH FEED DIA.32MM FOR WDMW0805 SKS C32 32 200 2T</h6>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <div class="image-col">
                        <div class="image-thumb">
                        <a href="assets/images/our-products/milling-cutters/FEROTECH-AOMT-123608PDTR-PG30-MILLING-INSERT-10-PCS.jpg" data-fancybox="gallery" data-caption="FEROTECH-AOMT-123608PDTR-PG30-MILLING-INSERT-10-PCS">
            <img src="assets/images/our-products/milling-cutters/FEROTECH-AOMT-123608PDTR-PG30-MILLING-INSERT-10-PCS.jpg" alt="FEROTECH-AOMT-123608PDTR-PG30-MILLING-INSERT-10-PCS">
        </a></div>
        <h6>FEROTECH AOMT 123608PDTR PG30 MILLING INSERT 10 PCS</h6>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="image-col">
                        <div class="image-thumb">
                           <a href="assets/images/our-products/milling-cutters/SMOXH-HIGH-FEED-FACE-MILL-DIA.63MM-FOR-SDMT09T3-HTK-SDMT09-D63-A22-Z06-H.jpg" data-fancybox="gallery" data-caption="SMOXH-HIGH-FEED-FACE-MILL-DIA.63MM-FOR-SDMT09T3-HTK-SDMT09-D63-A22-Z06-H">
                               <img src="assets/images/our-products/milling-cutters/SMOXH-HIGH-FEED-FACE-MILL-DIA.63MM-FOR-SDMT09T3-HTK-SDMT09-D63-A22-Z06-H.jpg" alt="SMOXH-HIGH-FEED-FACE-MILL-DIA.63MM-FOR-SDMT09T3-HTK-SDMT09-D63-A22-Z06-H">
                             </a>
                        </div>
                          <h6>SMOXH HIGH FEED FACE MILL DIA.63MM FOR SDMT09T3 HTK SDMT09 D63 A22 Z06 H</h6>
                     </div>
                  </div>-->
                  */
                  ?>
               </div>
            </div>
         </div>

      </div>
<?php
include('footer.php');
?>
