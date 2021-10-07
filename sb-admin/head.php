<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />

    <title><?= $title ?></title>
    <link rel="icon" href="<?= $logo ?>">

    <?php foreach ($linksCss as $value) : ?>
        <link href="<?= $value ?>" rel="stylesheet" />
    <?php endforeach; ?>
</head>

<body class="<?= $dashboardfixed ? 'sb-nav-fixed' : ''; ?>">
    <nav class="sb-topnav navbar navbar-expand navbar-<?= $dashboardColor ?> bg-<?= $dashboardColor ?>">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?= $mainLink ?>"><?= $title ?></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <div class="ms-auto"></div>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $rango ?> <i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <?php foreach ($menuSession as $ms) : ?>
                        <li><a class="dropdown-item" href="<?= $ms['url'] ?>">
                                <i class="<?= $ms['icon'] ?>"></i>
                                <?= $ms['text'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-<?= $dashboardColor ?>" id="sidenavAccordion">
                <div class="sb-sidenav-menu sb-sidenav-menu-<?= $dashboardColor ?>">
                    <div class="nav">

                        <?php foreach ($linksSidebar as $key => $value) : ?>
                            <?php if (isset($value['header'])) : ?>
                                <div class="sb-sidenav-menu-heading"><?php echo $value['header']; ?></div>
                            <?php endif; ?>

                            <?php if (isset($value['mode']) && $value['mode'] == 'menu') : ?>
                                <a class="nav-link" href="<?php echo $value['url']; ?>">
                                    <div class="sb-nav-link-icon">
                                        <i class="<?php echo $value['icon']; ?>"></i>
                                    </div>
                                    <?php echo $value['text']; ?>
                                </a>
                            <?php endif; ?>

                            <?php if (isset($value['mode']) && $value['mode'] == 'submenu') : ?>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $value['text']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $value['text']; ?>">
                                    <div class="sb-nav-link-icon"><i class="<?php echo $value['icon']; ?>"></i></div>
                                    <?php echo $value['text']; ?>
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapse<?php echo $value['text']; ?>" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <?php foreach ($value['submenu'] as $subValue) : ?>
                                            <a class="nav-link" href="<?php echo $subValue['url']; ?>">
                                                <?php echo $subValue['text']; ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </nav>
                                </div>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </div>
                </div>
                <?php if ($sidenavfooter['aplicar'] == true) : ?>
                    <div class="sb-sidenav-footer">
                        <div class="small"><?php echo $sidenavfooter['title']; ?></div>
                        <?php echo $sidenavfooter['autor']; ?>
                    </div>
                <?php endif; ?>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>