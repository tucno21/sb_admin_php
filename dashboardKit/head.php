<!DOCTYPE html>
<html lang="es">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="icon" href="<?= $logoAdmin ?>">

    <?php foreach ($linksCss as $value) : ?>
        <link href="<?= $value ?>" rel="stylesheet" />
    <?php endforeach; ?>

    <link rel="stylesheet" href="../public/dashboardkit/css/style-<?= $themeDark ?>.css">
</head>

<body class="<?= $sidebarIcon ?>">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Mobile header ] start -->
    <div class="pc-mob-header pc-header <?= $colorNavbar ?>">
        <div class="pcm-logo">
            <img src="<?= $logoAdminName ?>" width="120" alt="" class="logo logo-lg">
        </div>
        <div class="pcm-toolbar">
            <a href="#!" class="pc-head-link" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <!-- <i data-feather="menu"></i> -->
            </a>

            <a href="#!" class="pc-head-link" id="header-collapse">
                <i data-feather="more-vertical"></i>
            </a>
        </div>
    </div>
    <!-- [ Mobile header ] End -->

    <!-- [ navigation menu ] start -->
    <nav class="pc-sidebar <?= $colorSidebar ?>">
        <div class="navbar-wrapper">
            <div class="m-header <?= $colorLogoSidebar ?>">
                <a href="<?= $mainLink ?>" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="<?= $logoAdminName ?>" width="150" alt="" class="logo logo-lg">
                    <img src="<?= $logoAdmin ?>" width="30" alt="" class="logo logo-sm">
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <?php foreach ($linksSidebar as $key => $value) : ?>

                        <?php if (isset($value['header'])) : ?>
                            <li class="pc-item pc-caption">
                                <label><?php echo $value['header']; ?></label>
                                <span><?php echo $value['span']; ?></span>
                            </li>
                        <?php endif; ?>

                        <?php if (isset($value['mode']) && $value['mode'] == 'menu') : ?>

                            <li class="pc-item">
                                <a href="<?php echo $value['url']; ?>" class="pc-link ">
                                    <span class="pc-micon">
                                        <i data-feather="<?php echo $value['icon']; ?>"></i>
                                    </span>
                                    <span class="pc-mtext"><?php echo $value['text']; ?></span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (isset($value['mode']) && $value['mode'] == 'submenu') : ?>

                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link ">
                                    <span class="pc-micon">
                                        <i data-feather="<?php echo $value['icon']; ?>"></i>
                                    </span>
                                    <span class="pc-mtext"><?php echo $value['text']; ?></span>
                                    <span class="pc-arrow">
                                        <i data-feather="chevron-right"></i>
                                    </span>
                                </a>
                                <ul class="pc-submenu">
                                    <?php foreach ($value['submenu'] as $subValue) : ?>
                                        <li class="pc-item">
                                            <a class="pc-link" href="<?php echo $subValue['url']; ?>">
                                                <?php echo $subValue['text']; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>

                        <?php endif; ?>

                    <?php endforeach; ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="pc-header <?= $colorNavbar ?>">
        <div class="header-wrapper">
            <div class="m-header d-flex align-items-center">
                <a class="pc-head-link me-0" href="#" id="vertical-nav-toggle">
                    <i class="material-icons-two-tone">vertical_split</i>
                </a>
            </div>

            <div class="ms-auto">
                <ul class="list-unstyled">
                    <?php if ($navSearch == true) : ?>
                        <li class="dropdown pc-h-item">
                            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="material-icons-two-tone">search</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end pc-h-dropdown drp-search">
                                <form class="px-3">
                                    <div class="mb-0 form-group d-flex align-items-center">
                                        <i data-feather="search"></i>
                                        <input type="search" class="border-0 shadow-none form-control" placeholder="Search here. . .">
                                    </div>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if ($navNotifications == true) : ?>
                        <li class="dropdown pc-h-item pc-cart-menu">
                            <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="material-icons-two-tone">local_mall</i>
                                <span class="badge bg-success pc-h-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end pc-h-dropdown drp-cart">
                                <div class="cart-head">
                                    <h4 class="mb-0">3 Items</h4>
                                    <a href="#!" class="text-danger float-end"><u>Remove All</u></a>
                                    <p class="mb-0">in your cart</p>
                                </div>
                                <div class="cart-item">
                                    <img src="../public/dashboardkit/images/product/prod-1.jpg" alt="Product-img" title="Product-img" class="border rounded me-3">
                                    <div class="cart-desc">
                                        <a href="#!" class="text-body">
                                            <h6 class="mb-0 d-inline-block">Villus Snow Ankle b...</h6>
                                        </a>
                                        <p class="mb-0">Army green,7</p>
                                        <span><span class="text-primary">$ 148.66</span> for <span class="text-primary">9</span> </span>
                                        <a href="#!" class="text-danger float-end"><i data-feather="trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <img src="../public/dashboardkit/images/product/prod-2.jpg" alt="Product-img" title="Product-img" class="border rounded me-3">
                                    <div class="cart-desc">
                                        <a href="#!" class="text-body">
                                            <h6 class="mb-0 d-inline-block">Bullets Wireless Black</h6>
                                        </a>
                                        <p class="mb-0">Dark Black</p>
                                        <span><span class="text-primary">$ 299</span> for <span class="text-primary">5</span> </span>
                                        <a href="#!" class="text-danger float-end"><i data-feather="trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="cart-item">
                                    <img src="../public/dashboardkit/images/product/prod-3.jpg" alt="Product-img" title="Product-img" class="border rounded me-3">
                                    <div class="cart-desc">
                                        <a href="#!" class="text-body">
                                            <h6 class="mb-0 d-inline-block">Parkas Thick Jackets</h6>
                                        </a>
                                        <p class="mb-0">Am Wine Red</p>
                                        <span><span class="text-primary">$ 599</span> for <span class="text-primary">3</span> </span>
                                        <a href="#!" class="text-danger float-end"><i data-feather="trash-2"></i></a>
                                    </div>
                                </div>
                                <div class="table-responsive cart-item">
                                    <table class="table mb-0 table-borderless table-xs">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="m-0">Sub Total:</h6>
                                                </td>
                                                <td class="text-right">
                                                    $1070
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="m-0">Shipping:</h6>
                                                </td>
                                                <td class="text-right">
                                                    FREE
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5 class="m-0">Total:</h5>
                                                </td>
                                                <td class="text-right">
                                                    <h5 class="m-0 text-primary font-weight-bold">$1070</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <button class="mt-2 btn btn-primary btn-sm btn-block">Check out</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    <?php endif; ?>

                    <li class="dropdown pc-h-item">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?= $photoUser ?>" alt="user-image" class="user-avtar">
                            <span>
                                <span class="user-name"><?= $userName ?></span>
                                <span class="user-desc"><?= $profile ?></span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">

                            <?php foreach ($menuSession as $ms) : ?>

                                <a href="<?= $ms['url'] ?>" class="dropdown-item">
                                    <i class="material-icons-two-tone"><?= $ms['icon'] ?></i>
                                    <span><?= $ms['text'] ?></span>
                                </a>
                                <div class="dropdown-divider"></div>

                            <?php endforeach; ?>

                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </header>

    <!-- [ Header ] end -->