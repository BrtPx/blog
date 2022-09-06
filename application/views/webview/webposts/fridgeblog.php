<?php $this->load->view('webview/header.php'); ?>

<header class="fridge--header">
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
        <h2>It's Freezing In Here!</h2>
    </div>
    <div class="row">
        <h3>Size?</h3>
        <p class="longcopy">
            It is best to get a fridge that can comfortably fit in your kitchen. A standard refrigerator is usually 1 meter wide, 1-2 meter high and 1 meter deep.
        </p>
        <h3>Type of refrigerator?</h3>
        <p class="longcopy">
            French door fridges have two doors up top to open the refrigerator section and freezer drawer at the bottom.
            <br>Side-by-Side fridges feature two doors that open from the center.
            <br>Top-mount fridges place the freezer above the refrigerator compartment, each with its own door.
            <br>Bottom-mount fridges places the freezer below the refrigerator compartment, each with its own door.
            <br>Display fridges are upright refrigerators with a commercial glass door.
        </p>
        <h3>Fresh foods or Frozen foods?</h3>
        <p class="longcopy">
            A top-mount fridge is better for those who consume plenty of frozen foods because it is typically larger than the bottom-mount freezer.
            <br>A side-by-side refrigerators is evenly split between the fridge and freezer spaces.<br><br>
        </p>
    </div>
</section>

<?php $this->load->view('webview/footer.php'); ?>