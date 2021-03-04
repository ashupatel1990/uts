<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="index.php"><img src="assets/images/Uni.png" width="262" alt="Unique Tools Solution"></a>
            <button class="navbar-toggler" type="button"></button>
            <div class="collapse navbar-collapse justify-content-md-end" id="collapsibleNavbar">
            <a class="nav-close" href="javascript:void(0)"></a>
            <ul class="navbar-nav">
                <li <?= ($menuactive=='home')?'class="active"':''; ?>><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="about.php">About Us</a></li>
                <li class="dropdown <?= ($menuactive=='product')?'active':''; ?>">
                    <a class="nav-link" href="#">Our Products</a>
                    <div class="dropdown-menu">
                        <ul>
                        <li><a class="dropdown-item" href="boring-series.php">Boring Series</a></li>
                        <li class="submenu">
                            <a class="dropdown-item" href="#">Tool Holders</a>
                            <ul class="submenu-level3">
                                <li><a class="dropdown-item" href="hsk-chuck.php">HSK Chuck</a></li>
                                <li><a class="dropdown-item" href="sk-chunk.php">SK Chuck</a></li>
                                <li><a class="dropdown-item" href="bt-chunk.php">BT Chuck</a></li>
                                <li><a class="dropdown-item" href="chunk-accessories.php">Chuck Accessories</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="miling-cutters.php">Milling Cutters</a></li>
                        <li><a class="dropdown-item" href="turning-tools.php">Turning Tools</a></li>
                        <li><a class="dropdown-item" href="carbide-inserts.php">Carbide Inserts</a></li>
                        <li><a class="dropdown-item" href="non-standard-tool.php">Non-Standard Tool</a></li>
                        <li><a class="dropdown-item" href="special-tools.php">Special Tools</a></li>
                        </ul>
                    </div>
                </li>
                <li <?= ($menuactive=='contact')?'class="active"':''; ?>><a class="nav-link " href="contact.php">Contact Us</a></li>
            </ul>
            </div>
        </nav>
        </div>
    </div>
</div>
