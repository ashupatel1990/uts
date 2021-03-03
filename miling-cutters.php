<?php
$title = 'MILING CUTTERS - Unique Tools Solution';
include('header.php');

$products = [
   'DEREK BULL DIA.25MM FOR RDMT10T3 TRS C25 5R25 200 2T',
   'DEREK END MILL DIA.16MM FOR APKT11T3 ZAP C16 16 200 2T',
   'DEREK HIGH FEED DIA.32MM FOR EPNW0603TN ASR C32 32 160 4T',
   'DEREK HIGH FEED DIA.32MM FOR WDMW0805 SKS C32 32 200 2T',
   'FEROTECH AOMT 123608PDTR PG30-MILLING INSERT 10 PCS',
   'FEROTECH APKT 1003PDTR PG30 MILLING INSERT 10 PCS',
   'FEROTECH APKT 1604PDTR PG30 MILLING INSERT 10 PCS',
   'FEROTECH APMT 113508PDTR PG30-MILLING INSERT 10 PCS',
   'FEROTECH ODMT 060508 PG30 MILLING INSERT 10 PCS',
   'FEROTECH OFMT 05T308TN PG30 MILLING INSERT 10 PCS',
   'FEROTECH RDKW 10T3MO PG25 MILLING INSERT 10 PCS',
   'FEROTECH RDMT 1204MO PG30 MILLING INSERT 10 PCS',
   'FEROTECH RDMW 1204MO PG30 MILLING INSERT 10 PCS',
   'FEROTECH RPMT1204MOE JS PG20 MILLING INSERT 10 PCS',
   'FEROTECH SEKT 1204AFTN PG30 MILLING INSERT 10 PCS',
   'FEROTECH SEKT 12T3AGTN PG30 MILLING INSERT 10 PCS',
   'FEROTECH TPKR 2204PDTR HS251 MILLING INSERT 10 PCS',
   'FERTECH RPMT 08T2MO PG30 MILLING INSERT 10 PCS',
   'HOLEX MODULAR VICE 300MM OPEN',
   'JDMT1505 SHOULDER MILLING CUTTER',
   'MICRON ER11 COLLETS',
   'NICON HYDRAULIC MACHINE VICE 300MM OPEN',
   'NICON LOCK DOWN JAW MACHINE VICE 205MM OPEN',
   'NICON MODULAR VICE 160MM OPEN',
   'RDMT10T3 INDEXABLE MILLING CUTTER',
   'RPMW1003 ROUND INSERT FACE MILL',
   'SMOXH END MILL DIA.25MM FOR ANGX1105 ST90 AN11 D25 W25 L150 Z02 H',
   'SMOXH END MILL DIA.25MM FOR LNGX1205 ST90 LN12 D25 W25 L150 Z02',
   'SMOXH END MILL DIA.25MM FOR RDMT1204 ST RD12 D25 W25 L150 Z02',
   'SMOXH FACE MILL DIA.100MM FOR R245 12T3 TK45 SE12 D100 A32 Z07 H',
   'SMOXH FACE MILL DIA.100MM FOR R290 12 TK90 R290.12 D100 A32 Z09 H',
   'SMOXH FACE MILL DIA.50MM FOR LNGX1205 TK90 LN12 D50 A22 Z04',
   'SMOXH FACE MILL DIA.63MM FOR LNGX1205 TK90 LN12 D63 A22 Z06 H',
   'SMOXH FACE MILL DIA.80MM FOR SOMT12T3 TK90 SO12 D80 A27 Z07 H',
   'SMOXH FACE MILL DIA.80MM FOR WNGU0806 TK90 WN08 D80 A27 Z07 H',
   'SMOXH FACE MILL DIA.80MM FOR XNEX0806 TK90 XN08 D80 A27 Z07 H',
   'SMOXH FACE MILL DIA.80MM FOR XOMX1806 TK90 XO18 D80 A27 Z07 H',
   'SMOXH HIGH FEED DIA.16MM FOR JOMT06T2 HST JO06 D16 W16 L120 Z02 H',
   'SMOXH HIGH FEED DIA.25MM FOR WNMX09T3 HST WN09T3 D25 W25 L150 Z02 H',
   'SMOXH HIGH FEED DIA.32MM FOR JDMW09T3 HST JD09 D32 W32 L150 Z03 H',
   'SMOXH HIGH FEED DIA.32MM FOR SDMT09T3 HST SD09T3 D32 W25 L150 Z03 H',
   'SMOXH HIGH FEED FACE MILL DIA.50MM FOR JDMW09T3 HTK JD09 D50 A22 Z05 H',
   'SMOXH HIGH FEED FACE MILL DIA.63MM FOR SDMT09T3 HTK SDMT09 D63 A22 Z06 H',
];
?>


	<div id="wrapper">
    <div class="overlay"></div>
		<header id="header" class="header">
       <?php include('menu.php'); ?>
      </header>

      <div class="page-title gray-bg">
         <div class="container">
            <h3>MILLING CUTTERS</h3>
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Our Products</a></li>
               <li class="breadcrumb-item active" aria-current="page">BORING SERIES</li>
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
                                 <a href="assets/images/our-products/milling-cutters/<?= $product ?>.jpg" data-fancybox="gallery" data-caption="<?= $producttitle ?>">
                                    <img src="assets/images/our-products/milling-cutters/<?= $product ?>.jpg" alt="<?= $product ?>" />
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
