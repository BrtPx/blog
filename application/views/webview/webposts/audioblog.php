<?php $this->load->view('webview/header.php'); ?>

<header class="audio--header">
    <nav>
        <nav>
            <div class="row">
                <a href="<?php echo base_url() . 'pblog/index' ?>">
                    <img src="<?= base_url() . 'assets/img/WhiteLogo.svg' ?>" alt="white_logo" class="logo">
                </a>
                <ul class="main-nav">
                    <li><a href="<?php echo base_url() . 'pblog/index' ?>#motto">Our Core</a></li>
                    <li><a href="<?php echo base_url() . 'pblog/index' ?>#products">Our Products</a></li>
                    <li><a href="<?php echo base_url() . 'pblog/index' ?>#info">Getting Started</a></li>
                    <li><a href="<?php echo base_url() . 'pblog/index' ?>#choice">101 Questions</a></li>
                </ul>
            </div>
        </nav>
        </div>
</header>
<section class="post">
    <div class="row">
        <h2>How Loud Do You want To Be?</h2>
    </div>
    <div class="row">
        <h3>Power</h3>
        <p class="longcopy">
            Power is an important consideration because the speaker driver has to work hard to produce sounds waves audible to the human ear.
            The higher the wattage the more likely the subwoofer will play clean, distortion free sounds at regular room volumes and at high volumes.
        </p>
        <h3>Size</h3>
        <p class="longcopy">
            It is recommended to have a large subwoofer with a lot of power. The audio quality from a large subwoofer at a volume level of 4 is much better than from a small subwoofer at a volume level of 12.
            <br>
        </p>
        <h3>Number of subwoofers</h3>
        <p class="longcopy">
            How many sub-wooofers do you need to cause havoc? 2, 3 or 5.
            <br>
        </p>
        <p class="longcopy">
            Patazon's got you covered.<br><br>
        </p>
    </div>
</section>

<?php $this->load->view('webview/footer.php'); ?>