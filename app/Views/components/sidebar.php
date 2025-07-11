<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li><!-- End Keranjang Nav -->
        <?php
        if (session()->get('role') == 'admin') {
        ?>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'kategori-produk') ? "" : "collapsed" ?>" href="kategori-produk">
                    <i class="bi bi-tags"></i>
                    <span>Kategori Produk</span>
                </a>
            </li><!-- End Kategori Produk Nav -->
            
            <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'faq') ? "" : "collapsed" ?>" href="faq">
                    <i class="bi bi-question-circle-fill"></i>
                    <span>F.A.Q</span>
                </a>    
            <!-- End Produk Nav -->
        <?php
        }
        ?>

        <?php if (session()->get('role') == 'admin'): ?>
            <li><a class="nav-link" href="<?= base_url('diskon') ?>"><i class="bi bi-tag"></i> <span>Diskon</span></a></li>
        <?php endif; ?>


        <li class="nav-item">
    <a class="nav-link <?php echo (uri_string() == 'profile') ? "" : "collapsed" ?>" href="profile">
        <i class="bi bi-person"></i>
        <span>Profile</span>
    </a>
    </li><!-- End Profile Nav -->

    </ul>

</aside><!-- End Sidebar-->