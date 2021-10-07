<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>
    <link rel="icon" href="<?= $logo ?>">

    <?php foreach ($linksCss as $value) : ?>
        <link href="<?= $value ?>" rel="stylesheet" />
    <?php endforeach; ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= $mainLink ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="<?= $icon ?>"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= $title ?></div>
            </a>

            <?php foreach ($linksSidebar as $key => $value) : ?>

                <?php if (isset($value['line'])) : ?>
                    <hr class="sidebar-divider <?php echo $value['line']; ?>">
                <?php endif; ?>

                <?php if (isset($value['header'])) : ?>
                    <div class="sidebar-heading">
                        <?php echo $value['header']; ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($value['mode']) && $value['mode'] == 'menu') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $value['url']; ?>">
                            <i class="<?php echo $value['icon']; ?>"></i>
                            <span><?php echo $value['text']; ?></span></a>
                    </li>
                <?php endif; ?>

                <?php if (isset($value['mode']) && $value['mode'] == 'submenu') : ?>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse<?php echo $value['text']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $value['text']; ?>">
                            <i class="<?php echo $value['icon']; ?>"></i>
                            <span><?php echo $value['text']; ?></span>
                        </a>
                        <div id="collapse<?php echo $value['text']; ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <?php foreach ($value['submenu'] as $subValue) : ?>
                                    <a class="collapse-item" href="<?php echo $subValue['url']; ?>"><?php echo $subValue['text']; ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </li>
                <?php endif; ?>

            <?php endforeach; ?>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $nameUser ?> </span>
                                <img class="img-profile rounded-circle" src="<?= $photoUser ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <?php foreach ($menuSession as $ms) : ?>
                                    <a class="dropdown-item" href="<?= $ms['url'] ?>">
                                        <i class="<?= $ms['icon'] ?> fa-sm fa-fw mr-2 text-gray-400"></i>
                                        <?= $ms['text'] ?>
                                    </a>

                                <?php endforeach; ?>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->