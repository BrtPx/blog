<?php $this->load->view('webview/header.php'); ?>

<header class="payment">
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

<section class="section--paymentinfo">
    <div class="row">
        <h2>Money is only part of the equation</h2>
    </div>
    <div class="row">
        <p class="longcopy">
            We accept Lipa na M-Pesa, and have partnered with BNPL companies, to streamline your buying experience.
        </p>
        <h3> Buy Now Pay Later Services</h3>
        <h4><span style="color:#254082">Lipa</span><span style="color:#89B83F">Later</span></h4>
        <p class="longcopy">
            A payment option that provides our customers with the freedom to pay for our products over time in affordable, monthly instalments.<br>
            A customer has to only sign up with LipaLater for credit assessement. Once their credit is determined to be positive, they are awarded a credit limit they can use on any item in our shop.
            <br /><a href="https://app.lipalater.com/ke/customer/signup?ref=PatazoneWebsite" target="_blank">Sign up</a> with Lipa Later today.
        </p>
        <h4><span style="color:#035872">FlexPay</span></h4>
        <p class="longcopy">
            With an initial deposit of Ksh.500. A customer will be given 90 days to complete payment on the product, with 0% interest.
        </p>
        <h4><span style="color:#303030">TRANSSION Mobile</span></h4>
        <p class="longcopy">
            A payment plan that only requires a customer's original ID and a current portrait for a credit assessment.
            Once qualified they pay 25% of the product value as deposit and remit the balance in weekly instalments.
            <br>
            <br>
            This option is only available for TRANSSION mobile products: Tecno, Infinix and Itel.
        </p>
        <p class="longcopy">
            Contact us for more.
        </p>

    </div>

    </div>

</section>



<?php $this->load->view('webview/footer.php'); ?>