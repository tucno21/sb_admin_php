<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="icon" href="<?= $logoAdmin ?>">

    <?php foreach ($linksCss as $value) : ?>
        <link href="<?= $value ?>" rel="stylesheet" />
    <?php endforeach; ?>
    <link href="../public/HyperDash/css/app-<?php echo $themeDark ? 'dark' : 'light'; ?>.min.css" rel="stylesheet" type="text/css">
</head>

<body class="loading" data-layout-config='{
    "leftSideBarTheme":"<?php echo $SideBarTheme ? 'dark' : 'light'; ?>",
    "layoutBoxed":<?php echo $navbarFijo ? 'false' : 'true'; ?>,
    "leftSidebarCondensed":<?php echo $sidebarIcon ? 'true' : 'false'; ?>,
    "leftSidebarScrollable":<?php echo $sidebarIcon ? 'true' : 'false'; ?>,
    "darkMode":false,
    "showRightSidebarOnStart": false}'>

    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            <a href="<?= $mainLink ?>" class="text-center logo logo-light">
                <span class="logo-lg">
                    <img src="<?= $logoAdminName ?>" alt="" height="35">
                </span>
                <span class="logo-sm">
                    <img src="<?= $logoAdmin ?>" alt="" height="35">
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <?php foreach ($linksSidebar as $key => $value) : ?>

                        <?php if (isset($value['header'])) : ?>
                            <li class="side-nav-title side-nav-item"><?php echo $value['header']; ?></li>
                        <?php endif; ?>

                        <?php if (isset($value['mode']) && $value['mode'] == 'menu') : ?>
                            <li class="side-nav-item">
                                <a href="<?php echo $value['url']; ?>" class="side-nav-link">
                                    <i class="<?php echo $value['icon']; ?>"></i>
                                    <span> <?php echo $value['text']; ?> </span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (isset($value['mode']) && $value['mode'] == 'submenu') : ?>

                            <li class="side-nav-item">
                                <a data-bs-toggle="collapse" href="#sidebar<?php echo $value['text']; ?>" aria-expanded="false" aria-controls="sidebar<?php echo $value['text']; ?>" class="side-nav-link">
                                    <i class="<?php echo $value['icon']; ?>"></i>
                                    <span class="menu-arrow"></span>
                                    <span> <?php echo $value['text']; ?> </span>
                                </a>
                                <div class="collapse" id="sidebar<?php echo $value['text']; ?>">
                                    <ul class="side-nav-second-level">
                                        <?php foreach ($value['submenu'] as $subValue) : ?>
                                            <li>
                                                <a href="<?php echo $subValue['url']; ?>"><?php echo $subValue['text']; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </li>
                        <?php endif; ?>

                    <?php endforeach; ?>

                </ul>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="mb-0 list-unstyled topbar-menu float-end">
                        <?php if ($navSearch == true) : ?>
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="p-0 dropdown-menu dropdown-menu-animated dropdown-lg">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($language == true) : ?>
                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="../public/HyperDash/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
                                    <span class="align-middle d-none d-sm-inline-block">English</span> <i class="align-middle mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="../public/HyperDash/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="../public/HyperDash/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="../public/HyperDash/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="../public/HyperDash/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                    </a>

                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($navNotifications == true) : ?>
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div style="max-height: 230px;" data-simplebar>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="../public/HyperDash/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="mb-0 text-muted user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="../public/HyperDash/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="mb-0 text-muted user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="text-center dropdown-item text-primary notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>
                        <?php endif; ?>


                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="<?= $photoUser ?>" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name"><?= $userName ?></span>
                                    <span class="account-position"><?= $profile ?></span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="m-0 text-overflow">Welcome !</h6>
                                </div>

                                <?php foreach ($menuSession as $ms) : ?>

                                    <a href="<?= $ms['url'] ?>" class="dropdown-item notify-item">
                                        <i class="<?= $ms['icon'] ?>"></i>
                                        <span><?= $ms['text'] ?></span>
                                    </a>

                                <?php endforeach; ?>

                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <?php if ($navSearch == true) : ?>
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text btn-primary" type="submit">Search</button>
                                </div>
                            </form>

                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="mb-2 text-overflow">Found <span class="text-danger">17</span> results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-notes font-16 me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-life-ring font-16 me-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-cog font-16 me-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="mb-2 text-overflow text-uppercase">Users</h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex">
                                            <img class="d-flex me-2 rounded-circle" src="../public/HyperDash/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Erwin Brown</h5>
                                                <span class="mb-0 font-12">UI Designer</span>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="d-flex">
                                            <img class="d-flex me-2 rounded-circle" src="../public/HyperDash/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">Jacob Deo</h5>
                                                <span class="mb-0 font-12">Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- end Topbar -->