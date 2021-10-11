<!DOCTYPE html>
<html>

<!-- Mirrored from demo.bootstrapious.com/bubbly/1-2/pages-contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Oct 2021 11:25:37 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" href="<?= $logoAdmin ?>">

    <?php foreach ($linksCss as $value) : ?>
        <link href="<?= $value ?>" rel="stylesheet" />
    <?php endforeach; ?>
</head>

<body>
    <!-- navbar-->
    <header class="header">
        <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow">
            <a class="sidebar-toggler text-gray-500 me-4 me-lg-5 lead" href="#">
                <i class="fas fa-align-left"></i>
            </a>
            <a class="navbar-brand fw-bold text-uppercase text-base" href="index.html">
                <span class="d-none d-brand-partial"><?= $title ?></span>
            </a>
            <ul class="ms-auto d-flex align-items-center list-unstyled mb-0">
                <?php if ($navSearch == true) : ?>
                    <li class="nav-item dropdown">
                        <form class="ms-auto me-4 d-none d-lg-block" id="searchForm">
                            <div class="input-group input-group-sm input-group-navbar">
                                <input class="form-control" id="searchInput" type="search" placeholder="Search">
                                <button class="btn" type="button"> <i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                <?php endif; ?>

                <?php if ($navNotifications == true) : ?>
                    <li class="nav-item dropdown me-2"><a class="nav-link nav-link-icon text-gray-400 px-1" id="notifications" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="svg-icon svg-icon-md svg-icon-heavy">
                                <use xlink:href="<?= $linkIconsOrion ?>bubblyDash/icons/orion-svg-sprite.57a86639.svg#sales-up-1"> </use>
                            </svg><span class="notification-badge bg-green"></span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated text-sm" aria-labelledby="notifications"><a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-sm bg-indigo text-white"><i class="fab fa-twitter"></i></div>
                                    <div class="text ms-2">
                                        <p class="mb-0">You have 2 followers</p>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-sm bg-green text-white"><i class="fas fa-envelope"></i></div>
                                    <div class="text ms-2">
                                        <p class="mb-0">You have 6 new messages</p>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-sm bg-blue text-white"><i class="fas fa-upload"></i></div>
                                    <div class="text ms-2">
                                        <p class="mb-0">Server rebooted</p>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="icon icon-sm bg-indigo text-white"><i class="fab fa-twitter"></i></div>
                                    <div class="text ms-2">
                                        <p class="mb-0">You have 2 followers</p>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-center" href="#"><small class="fw-bold text-uppercase">View all notifications</small></a>
                        </div>
                    </li>
                <?php endif; ?>

                <?php if ($navMessages == true) : ?>
                    <!-- Messages                        -->
                    <li class="nav-item dropdown me-2 me-lg-3"> <a class="nav-link nav-link-icon text-gray-400 px-1" id="messages" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg class="svg-icon svg-icon-md svg-icon-heavy">
                                <use xlink:href="<?= $linkIconsOrion ?>bubblyDash/icons/orion-svg-sprite.57a86639.svg#paper-plane-1"> </use>
                            </svg><span class="notification-badge notification-badge-number bg-primary">10</span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated text-sm" aria-labelledby="messages"><a class="dropdown-item d-flex align-items-center p-3" href="#"> <img class="avatar avatar-sm p-1 me-2" src="../public/bubblyDash/img/avatar-0.jpg" alt="Jason Doe">
                                <div class="pt-1">
                                    <h6 class="fw-bold mb-0">Jason Doe</h6><span class="text-muted text-sm">Sent you a message</span>
                                </div>
                            </a><a class="dropdown-item d-flex align-items-center p-3" href="#"> <img class="avatar avatar-sm p-1 me-2" src="../public/bubblyDash/img/avatar-1.jpg" alt="Frank Williams">
                                <div class="pt-1">
                                    <h6 class="fw-bold mb-0">Frank Williams</h6><span class="text-muted text-sm">Sent you a message</span>
                                </div>
                            </a><a class="dropdown-item d-flex align-items-center p-3" href="#"> <img class="avatar avatar-sm p-1 me-2" src="../public/bubblyDash/img/avatar-2.jpg" alt="Ashley Wood">
                                <div class="pt-1">
                                    <h6 class="fw-bold mb-0">Ashley Wood</h6><span class="text-muted text-sm">Sent you a message</span>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-center" href="#"> <small class="fw-bold text-uppercase">View all messages </small></a>
                        </div>
                    </li>
                <?php endif; ?>

                <li class="nav-item dropdown ms-auto">
                    <a class="nav-link pe-0" id="userInfo" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="avatar p-1" src="<?= $photoUser ?>" alt="<?= $profile ?>">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated" aria-labelledby="userInfo">
                        <div class="dropdown-header text-gray-700">
                            <h6 class="text-uppercase font-weight-bold"><?= $userName ?></h6>
                            <small><?= $profile ?></small>
                        </div>
                        <div class="dropdown-divider"></div>

                        <?php foreach ($menuSession as $ms) : ?>

                            <a class="dropdown-item" href="<?= $ms['url'] ?>"><?= $ms['text'] ?></a>
                            <div class="dropdown-divider"></div>

                        <?php endforeach; ?>

                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <div class="d-flex align-items-stretch">
        <div class="sidebar py-3 <?php echo $navbarIcon ? 'shrink show' : '' ?>" id="sidebar">

            <?php foreach ($linksSidebar as $key => $value) : ?>

                <?php if (isset($value['header'])) : ?>
                    <h6 class="sidebar-heading"><?php echo $value['header']; ?></h6>
                <?php endif; ?>

                <?php if (isset($value['mode']) && $value['mode'] == 'menu') : ?>
                    <ul class="list-unstyled">
                        <li class="sidebar-list-item">
                            <a class="sidebar-link text-muted" href="<?php echo $value['url']; ?>">
                                <svg class="svg-icon svg-icon-md me-3">
                                    <use xlink:href="<?= $linkIconsOrion ?>bubblyDash/icons/orion-svg-sprite.57a86639.svg#<?php echo $value['icon']; ?>"> </use>
                                </svg>
                                <span class="sidebar-link-title"><?php echo $value['text']; ?></span>
                            </a>
                        </li>
                    </ul>
                <?php endif; ?>

                <?php if (isset($value['mode']) && $value['mode'] == 'submenu') : ?>

                    <ul class="list-unstyled">
                        <li class="sidebar-list-item">
                            <a class="sidebar-link text-muted " href="#" data-bs-target="#<?php echo $value['text']; ?>Dropdown" role="button" aria-expanded="false" data-bs-toggle="collapse">
                                <svg class="svg-icon svg-icon-md me-3">
                                    <use xlink:href="<?= $linkIconsOrion ?>bubblyDash/icons/orion-svg-sprite.57a86639.svg#<?php echo $value['icon']; ?>"> </use>
                                </svg>
                                <span class="sidebar-link-title">
                                    <?php echo $value['text']; ?>
                                </span>
                            </a>
                            <ul class="sidebar-menu list-unstyled collapse " id="<?php echo $value['text']; ?>Dropdown">
                                <?php foreach ($value['submenu'] as $subValue) : ?>
                                    <li class="sidebar-list-item">
                                        <a class="sidebar-link text-muted" href="<?php echo $subValue['url']; ?>">
                                            <?php echo $subValue['text']; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </li>
                    </ul>

                <?php endif; ?>

            <?php endforeach; ?>


        </div>
        <div class="page-holder bg-gray-100 p-3">