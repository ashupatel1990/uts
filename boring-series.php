<?php
$title = 'BORING SERIES - Unique Tools Solution';
include('header.php');
$products = [
   'ABH Rough Back boring Tool',
   'ABH Rough Boring Tool',
   'ABH Twin bit Rough Boring Body',
   'Adapter from DCK to ABS Type Connection',
   'BSA 45 Boring Holder With Square Boring Bit',
   'BSB 90 Boring Holder With Square Boring Bit',
   'BST Boring Adapter',
   'BT ABH Rough Boring Tool',
   'BT CBH Micro boring Tool',
   'BT DBH Rough Boring Tool',
   'BT DCK Boring Adapter',
   'BT FBH Micro boring Tool',
   'CBH Finish Boring Tool',
   'CBH L Boring Tool For Pin Turning Large Diameter',
   'CBH Large Diameter Boring Tool For Finishing',
   'CBH M Boring Tool For Pin Turning',
   'CBS Square Boring Bit',
   'CR Chamfering Cutter',
   'DBH Large Diameter Rough Boring Tool',
   'DBH Rough Boring Tool',
   'DBJ Collet For Solid Carbide Boring Bar',
   'DBJ Micro Boring Tool Kit',
   'DBJ10 Micro Boring Bar',
   'DBJ101216 Micro Boring Head',
   'DBJ12 Micro Boring Bar',
   'DBJ16 Micro Boring Bar',
   'DBJ20 Micro Boring Bar',
   'DCK Chamfering Head',
   'DCK Extension',
   'DCK Reducer',
   'DCK2 FBH25P Micro finishing Boring Kit',
   'DCK3 FBH32P Micro finishing Boring Kit',
   'DCK4 FBH40P Micro finishing Boring Kit',
   'DCK5 FBH50P Micro finishing Boring Kit',
   'DCK6 FBH63P Micro finishing Boring Kit',
   'DCK6 FBH80 Micro finishing Boring Tool',
   'DEB Insert Holder',
   'DSCK Carbide Boring Arbor',
   'DSJ Boring Body DSP Balance Weight',
   'DST Extension Bridge',
   'DT Solid Carbide Boring Holder',
   'DYD Cartridge Boring Tool',
   'FBH Large Diameter Boring Tool',
   'FBH Micro Back borine Tool',
   'FBH Micro boring Bar',
   'FBH Micro boring Body',
   'FBH Micro boring Tool',
   'HSK ABH Rough Boring Tool',
   'HSK DBH Rough Boring Tool',
   'Insert Holder For DYD Cartridge Boring Tool',
   'Insert Holder For FBH Back boring Head',
   'Insert Holder For FBH Boring Tool',
   'Inserts Holder For ABH Rough Back boring Tool',
   'Inserts Holder For ABH Rough Boring Tool',-
   'Inserts Holder For DBH Rough Boring Tool',
   'Inserts Holder SFC For Roughing',
   'Inserts Holder SLC For Roughing',
   'Inserts Holder SSC For Roughing',
   'KSD S Indexable Insert Drill 3xD',
   'KSD S Indexable Insert Drill 4xD',
   'KSD W Indexable Insert Drill 3xD',
   'KSD W Indexable Insert Drill 4xD',
   'MC Face Boring Head',
   'MKT Boring Cartridge',
   'NBH2084 Boring Adapter',
   'NBH2084 Micro Boring Tool Kit',
   'NBH2084 Micro boring Head',
   'SB Twin Bit Rough Boring Tool With Straight Shank',
   'SCB Solid Carbide Boring Holder',
   'SK ABH Rough Boring Tool',
   'SK CBH Micro boring Tool',
   'SK DBH Rough Boring Tool',
   'SK DCK Boring Adapter',
   'SK FBH Micro boring Tool',
   'SSB Boring Holder',
   'TBS Square Boring Bit'
];
?>

	<div id="wrapper">
    <div class="overlay"></div>
		<header id="header" class="header">
       <?php $menuactive = 'product'; include('menu.php'); ?>
      </header>

      <div class="page-title gray-bg">
         <div class="container">
            <h3>BORING SERIES</h3>
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
                                 <a href="assets/images/our-products/boring-series/<?= $product ?>.jpg" data-fancybox="gallery" data-caption="<?= $producttitle ?>">
                                    <img src="assets/images/our-products/boring-series/thumbs/<?= $product ?>.jpg" alt="<?= $product ?>" />
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
