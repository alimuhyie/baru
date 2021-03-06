<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $judul ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/components.css">

    <style>
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="layout-3">
    <!-- modal -->
    <!-- <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end modal -->
    <div id="app">
        <div class="main-wrapper container">
            <!-- navbar -->
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="<?= base_url('home'); ?>" class="navbar-brand sidebar">MTsN 1 Kolaka</a>
                <div class="navbar-nav">
                    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                </div>
                <!-- <div class="nav-collapse">
                    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a href="#" class="nav-link">Application</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Report Something</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Server Status</a></li>
                    </ul>
                </div> -->
                <!-- <form class="form-inline ml-auto">
                    <ul class="navbar-nav">
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        <div class="search-backdrop"></div>
                        <div class="search-result">
                            <div class="search-header">
                                Histories
                            </div>
                            <div class="search-item">
                                <a href="#">How to hack NASA using CSS</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-item">
                                <a href="#">Kodinger.com</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-item">
                                <a href="#">#Stisla</a>
                                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                            </div>
                            <div class="search-header">
                                Result
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                                    oPhone S9 Limited Edition
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                                    Drone X2 New Gen-7
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                                    Headphone Blitz
                                </a>
                            </div>
                            <div class="search-header">
                                Projects
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <div class="search-icon bg-danger text-white mr-3">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    Stisla Admin Template
                                </a>
                            </div>
                            <div class="search-item">
                                <a href="#">
                                    <div class="search-icon bg-primary text-white mr-3">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    Create a new Homepage Design
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Messages
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b>
                                        <p>Hello, Bro!</p>
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="../assets/img/avatar/avatar-2.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Dedik Sugiharto</b>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="../assets/img/avatar/avatar-3.png" class="rounded-circle">
                                        <div class="is-online"></div>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Agung Ardiansyah</b>
                                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="../assets/img/avatar/avatar-4.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Ardian Rahardiansyah</b>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                        <div class="time">16 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-avatar">
                                        <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle">
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Alfa Zulkarnain</b>
                                        <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                    <a href="#">Mark All As Read</a>
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <a href="#" class="dropdown-item dropdown-item-unread">
                                    <div class="dropdown-item-icon bg-primary text-white">
                                        <i class="fas fa-code"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Template update is available now!
                                        <div class="time text-primary">2 Min Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="far fa-user"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                        <div class="time">10 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-success text-white">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                        <div class="time">12 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-danger text-white">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Low disk space. Let's clean it!
                                        <div class="time">17 Hours Ago</div>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="dropdown-item-icon bg-info text-white">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="dropdown-item-desc">
                                        Welcome to Stisla template!
                                        <div class="time">Yesterday</div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul> -->
            </nav>

            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container ">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">
                            <a href="#" class="nav-link"><span>Beranda</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><span>Profil</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="index-0.html" class="nav-link">Visi Misi</a></li>
                                <li class="nav-item"><a href="index.html" class="nav-link">Sejarah</a></li>
                                <li class="nav-item"><a href="index.html" class="nav-link">Struktur Organisasi</a></li>
                                <li class="nav-item"><a href="index.html" class="nav-link">Guru</a></li>
                                <li class="nav-item"><a href="index.html" class="nav-link">Tata Usaha</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><span>Galeri</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="index-0.html" class="nav-link"></a></li>
                                <li class="nav-item"><a href="index.html" class="nav-link">Sejarah</a></li>
                                <li class="nav-item"><a href="index.html" class="nav-link">Struktur Organisasi</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><span>Berita Sekolah</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link has-dropdown"><i class="far fa-clone"></i><span>Multiple Dropdown</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">Not Dropdown Link</a></li>
                                <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Hover Me</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                                        <li class="nav-item dropdown"><a href="#" class="nav-link has-dropdown">Link 2</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Link</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Link 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of Navbar -->
            <!-- Main Content -->
            <div class="main-content">

                <section class="section">
                    <div class="row">
                        <!-- carousal -->
                        <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h4>Statistics</h4>
                                    <div class="card-header-action">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-primary">Week</a>
                                            <a href="#" class="btn">Month</a>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="card-body">
                                    <!-- <canvas id="myChart" height="182"></canvas>
                                    <div class="statistic-details mt-sm-4">
                                        <div class="statistic-details-item">
                                            <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 7%</span>
                                            <div class="detail-value">$243</div>
                                            <div class="detail-name">Today's Sales</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 23%</span>
                                            <div class="detail-value">$2,902</div>
                                            <div class="detail-name">This Week's Sales</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>9%</span>
                                            <div class="detail-value">$12,821</div>
                                            <div class="detail-name">This Month's Sales</div>
                                        </div>
                                        <div class="statistic-details-item">
                                            <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 19%</span>
                                            <div class="detail-value">$92,142</div>
                                            <div class="detail-name">This Year's Sales</div>
                                        </div>
                                    </div> -->

                                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="../assets/img/news/img01.jpg" alt="First slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Heading</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../assets/img/news/img07.jpg" alt="Second slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Heading</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="../assets/img/news/img08.jpg" alt="Third slide">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Heading</h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of carousal -->
                        <!-- headline -->
                        <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                            <div class="card">
                                <div class="card-header justify-content-center">
                                    <h4>POPULER</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled list-unstyled-border">
                                        <li class="media text-center">
                                            <div class="media-body">
                                                <div class="media-title">PPDB</div>
                                            </div>
                                        </li>
                                        <li class="media text-center">
                                            <div class="media-body">
                                                <div class="media-title">COVID-19</div>
                                            </div>
                                        </li>
                                        <li class="media text-center">
                                            <div class="media-body">
                                                <div class="media-title">MAULID</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="text-center pt-1 pb-1">
                                        <a href="#" class="btn btn-primary btn-lg btn-round">
                                            View All
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- headline -->
                    </div>
                    <!-- sambutan KS -->
                    <div class="section-body">
                        <hr>
                        <div class="bg-light">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 text-center">
                                        <img width="260" height="145" src="<?= base_url() ?>assets/img/ks.jpg" alt="...">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="h3">Sambutan</div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iste enim, quos porro magni odit totam unde alias, obcaecati quisquam non nemo perferendis eveniet, commodi nobis veniam molestiae veritatis iusto!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end of Sambutan KS -->
                    <div class="section-body">
                        <hr>
                        <!-- <div class="card"> -->
                        <!-- <div class="card-header"> -->


                        <!-- <div class="card-body"> -->
                        <!-- artikel -->
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                <article class="article">
                                    <div class="article-header">
                                        <div class="article-image" data-background="<?= base_url() ?>assets/img/ks.jpg">
                                        </div>
                                        <div class="article-title">
                                            <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                        </div>
                                    </div>
                                    <div class="article-details">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. </p>
                                        <div class="article-cta">
                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                <article class="article">
                                    <div class="article-header">
                                        <div class="article-image" data-background="../assets/img/news/img04.jpg">
                                        </div>
                                        <div class="article-title">
                                            <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                        </div>
                                    </div>
                                    <div class="article-details">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. </p>
                                        <div class="article-cta">
                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                <article class="article">
                                    <div class="article-header">
                                        <div class="article-image" data-background="../assets/img/news/img09.jpg">
                                        </div>
                                        <div class="article-title">
                                            <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                        </div>
                                    </div>
                                    <div class="article-details">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. </p>
                                        <div class="article-cta">
                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                <article class="article">
                                    <div class="article-header">
                                        <div class="article-image" data-background="../assets/img/news/img12.jpg">
                                        </div>
                                        <div class="article-title">
                                            <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                                        </div>
                                    </div>
                                    <div class="article-details">
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. </p>
                                        <div class="article-cta">
                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 ">
                                <div class="article-cta text-center">
                                    <a href="#" class="btn btn-primary">Berita Lainnya</a>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                        <!-- end of artikel -->
                        <!-- </div> -->
                        <hr>
                        <div class="bg-light">

                            <div class="row text-center py-3">
                                <div class="col-lg-12 mb-3">
                                    <figure class="avatar mt-1 mr-2 avatar-xl">
                                        <img src="../assets/img/avatar/avatar-1.png" alt="...">
                                    </figure>
                                    <h5 class="mt-1">Kepala Madrasah</h5>
                                    <h6>Drs. H. Abdul Rahim, M.Pd</h6>
                                </div>
                                <div class="col-lg-3">
                                    <figure class="avatar mr-2 avatar-xl">
                                        <img src="../assets/img/avatar/avatar-1.png" alt="...">
                                    </figure>
                                    <h5 class="mt-1">Kepala Madrasah</h5>
                                    <h6>Drs. H. Abdul Rahim, M.Pd</h6>
                                </div>
                                <div class="col-lg-3">
                                    <figure class="avatar mr-2 avatar-xl">
                                        <img src="../assets/img/avatar/avatar-1.png" alt="...">
                                    </figure>
                                    <h5 class="mt-1">Kepala Madrasah</h5>
                                    <h6>Drs. H. Abdul Rahim, M.Pd</h6>
                                </div>
                                <div class="col-lg-3">
                                    <figure class="avatar mr-2 avatar-xl">
                                        <img src="../assets/img/avatar/avatar-1.png" alt="...">
                                    </figure>
                                    <h5 class="mt-1">Kepala Madrasah</h5>
                                    <h6>Drs. H. Abdul Rahim, M.Pd</h6>
                                </div>
                                <div class="col-lg-3">
                                    <figure class="avatar mr-2 avatar-xl">
                                        <img src="../assets/img/avatar/avatar-1.png" alt="...">
                                    </figure>
                                    <h5 class="mt-1">Waka Kurikulum</h5>
                                    <h6>Drs. H. Abdul Rahim, M.Pd</h6>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>


            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
            </div>
            <div class="footer-right">
                2.3.0
            </div>
        </footer>
    </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="<?= base_url('assets/') ?>js/scripts.js"></script>
    <script src="<?= base_url('assets/') ?>js/custom.js"></script>

    <script>
        $('#myModal').modal('show');
    </script>
</body>

</html>