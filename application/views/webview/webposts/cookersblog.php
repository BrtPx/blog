<?php $this->load->view('webview/header.php'); ?>

<header class="cooker--header">
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
        <h2>I Can Cook, If only I had...</h2>
    </div>
    <div class="row">
        <p class="longcopy">
            For all your delicious home-cooked meals.<br />
            Patazon provides you with a variety of kitchen appliances to meet your kitchen goals and dinner plans.
        </p>
    </div>
    <div class="row">
        <div class="col span-1-of-2">
            <ul>
                <li><i class="fa-solid fa-circle-dot"></i>Standing ovens</li>
                <li><i class="fa-solid fa-circle-dot"></i>Table-top ovens</li>
                <li><i class="fa-solid fa-circle-dot"></i>Table-top stoves</li>
            </ul>
        </div>
        <div class="col span-1-of-2">
            <ul>
                <li><i class="fa-solid fa-circle-dot"></i>Microwaves </li>
                <li><i class="fa-solid fa-circle-dot"></i>Kettles </li>
                <li><i class="fa-solid fa-circle-dot"></i>Blenders and Juicers</li>
                <li><i class="fa-solid fa-circle-dot"></i>Mixers</li>
                <li><i class="fa-solid fa-circle-dot"></i>Coffee Makers</li>
            </ul>
        </div>
    </div>
</section>

<?php $this->load->view('webview/footer.php'); ?>