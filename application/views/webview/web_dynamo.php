<?php $this->load->view('webview/header_blog'); ?>

<header>
    <div class="container">
        <div class="row">
            <p class="hero-text fs-1 text-center"><span style="color: #c7252a">Patazon Marketplace</span></p>
            <p class="hero-text-tag fs-3 text-center pt-0"><span style="color: #FFF">The only choice for premium and accessible shopping experience.</span></p>
            <div class="d-grid d-md-block mx-auto">
                <a class="btn btn-lg btn-danger active" aria-pressed="true" href="#motto"> Find Out More</a>
                <a class="btn btn-lg btn-outline-danger" href="https://patazone.co.ke/">Shop</a>
            </div>
        </div>
    </div>

</header>

<section class="section--motto js--section-motto container page-section" id="motto">
    <h2>Our Core</h2>
    <p class="long-copy text-start">
        Hello, Karibu. We are Patazon. A reliable online store, built from a shared dream of creating a product dedicated to providing great services.
    </p>
    <div class="row mx-auto">
        <div class="col-sm">
            <i class="fas fa-feather-alt icon-motto"></i>
            <h3>Swift</h3>
            <p>
                Stress Free Shopping! With great products, from dependable brands. Friendly customer service, prompt delivery and after sales services.
            </p>
        </div>
        <div class="col-sm">
            <i class="fas fa-stopwatch icon-motto"></i>
            <h3>Fast</h3>
            <p>
                Patazon server is hosted on multiple servers here and abroad. Our inventory is stocked and growing. Couriers ready to be dispatched to any and all locations countrywide.
            </p>
        </div>
        <div class="col-sm">
            <i class="far fa-check-circle icon-motto"></i>
            <h3>Easy</h3>
            <p>
                We are tirelessly working with banks and other financial lenders to provide other payment options especially in these trying times.
            </p>
        </div>
    </div>
</section>

<section class="section--products" id="products">
    <h2> Glimpse of our Products</h2>
    <div class="container">
        <div class="row gx-2 gy-2">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img src="<?= base_url(); ?>assets/img/1.webp" alt="smartphone">
                    <div class="overlay">
                        <a class="info" href="https://patazone.co.ke/shop/Smart%20Phones/MQ==" target="_blank">View Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img src="<?= base_url(); ?>assets/img/2.webp" alt="smartphone">
                    <div class="overlay">
                        <a class="info" href="https://patazone.co.ke/home/search?searchProducts=tv" target="_blank">View Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img src="<?= base_url(); ?>assets/img/3.webp" alt="smartphone">
                    <div class="overlay">
                        <a class="info" href="https://patazone.co.ke/shop/Woofers%20&%20Sub%20Woofers/MjA=" target="_blank">View Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img src="<?= base_url(); ?>assets/img/4.webp" alt="smartphone">
                    <div class="overlay">
                        <a class="info" href="https://patazone.co.ke/shop/Kettles/NDQ=" target="_blank">View Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img src="<?= base_url(); ?>assets/img/5.webp" alt="smartphone">
                    <div class="overlay">
                        <a class="info" href="https://patazone.co.ke/shop/Freezers%20&%20Refrigerators/Mzg=" target="_blank">View Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img src="<?= base_url(); ?>assets/img/6.webp" alt="smartphone">
                    <div class="overlay">
                        <a class="info" href="https://patazone.co.ke/shop/Cookers%20&%20Ovens/Mzc=" target="_blank">View Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img src="<?= base_url(); ?>assets/img/7.webp" alt="smartphone">
                    <div class="overlay">
                        <a class="info" href="https://patazone.co.ke/shop/Water%20Dispensers/Mzk=" target="_blank">View Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img src="<?= base_url(); ?>assets/img/8.webp" alt="smartphone">
                    <div class="overlay">
                        <a class="info" href="https://patazone.co.ke/shop/Furniture%20&%20Bath/Mjk=" target="_blank">View Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--info page-section" id="info">
    <h2>Getting you up and ready</h2>
    <div class="container">
        <div class="row justify-content-center mx-auto gy-3">
            <div class="col-lg-6">
                <div class="info--box">
                    <div>
                        <h5>Great Prices</h5>
                    </div>
                    <div>
                        <ul>
                            <li><i class="fa-solid fa-check icon-small"></i>Affordable prices</li>
                            <li><i class="fa-solid fa-check icon-small"></i>Discounted prices</li>
                            <li><i class="fa-solid fa-check icon-small"></i>Payment plans</li>
                        </ul>
                    </div>
                    <div>
                        <a href="<?php echo base_url() . 'pblog/webpay' ?>" class="btn btn-outline-danger btn-ghost">Find Out More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="info--box">
                    <div>
                        <h5>Quick Delivery</h5>
                    </div>
                    <div>
                        <ul>
                            <li><i class="fa-solid fa-check icon-small"></i>Safe</li>
                            <li><i class="fa-solid fa-check icon-small"></i>Verified Couriers</li>
                            <li><i class="fa-solid fa-check icon-small"></i>Insured</li>
                        </ul>
                    </div>
                    <div>
                        <a href="<?php echo base_url() . 'pblog/webdel' ?>" class="btn btn-outline-danger btn-ghost">Find Out More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--choice page-section" id="choice">
    <h2>101 Questions</h2>
    <div class="container">
        <div class="row justify-content-around">
            <!-- echo '
            <pre>'
            <?= print_r($blogcol) ?>
            echo '</pre>' -->
            <?php foreach ($blogcol['bposts'] as $blogbody) :
                echo '<div class="col-lg-4 col-sm-6">
                <div class="blogbox">
                    <div>
                    <h5>' . $blogbody->title . '</h5>
                    </div>
                    <div>
                    <img src="' . base_url() .  $blogbody->img . '" width="500" height="250" alt="">
                    </div>
                    <div>
                    <p class="blog-cap">' . $blogbody->subtitle . ' </p> 
                    </div>
                    <div>
                    <button class="btn btn-outline-danger" id="viewp" onclick="blogcontent(event, ' . $blogbody->id . ')">Read More</button>
                    </div>
                </div>
            </div>'

            ?>
            <?php endforeach; ?>

            <div id="cont"></div>
        </div>
    </div>
</section>

<?php $this->load->view('webview/footer_blog'); ?>