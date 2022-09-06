<?php $this->load->view('controlpanel/header.php'); ?>

<div class="vessel">
    <div class="wayfinder">
        <ul>
            <li>
                <a href="#">
                    <span class="icons">
                        <img src="<?php echo base_url('assets/img/patazone--w.svg') ?>" />
                    </span>
                    <span class="brand">
                        <img src="<?php echo base_url('assets/img/WhiteLogo.svg') ?>" />
                    </span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="icons">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url() . 'patadash/addblogs' ?>">
                    <span class="icons">
                        <ion-icon name="add-circle-outline"></ion-icon>
                    </span>
                    <span class="title">Create Post</span>
                </a>
            </li>
            <li>
                <a href="<?= base_url() . 'patadash/viewblogs' ?>">
                    <span class="icons">
                        <ion-icon name="eye-outline"></ion-icon>
                    </span>
                    <span class="title">View Posts</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icons">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>


    <!-- main -->
    <div class="navmain">
        <div class="topbar">
            <!-- wayfinder toggle -->
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <!-- search -->
            <!-- <div class="search">
                <label>
                    <input type="text" placeholder="Search" id="blog_search">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div> -->
        </div>