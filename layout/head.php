<!DOCTYPE html>
<html lang="es">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->

    <?php foreach ($linksCss as $value) : ?>
        <link href="<?= $value ?>" rel="stylesheet" />
    <?php endforeach; ?>
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header bg-dark">
        <a class="app-header__logo bg-dark" href="<?= $mainLink ?>"><i class="far fa-heart"></i> <?= $title ?></a>
        <!-- Sidebar toggle button-->
        <a class="app-sidebar__toggle bg-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>

        <!-- Navbar Right Menu-->
        <ul class="app-nav bg-dark">

            <?php if ($navSearch == true) : ?>
                <li class="app-search">
                    <input class="app-search__input" type="search" placeholder="Search">
                    <button class="app-search__button"><i class="fa fa-search"></i></button>
                </li>
            <?php endif; ?>

            <a class="app-nav__item expandir" href="#">
                <i class="fas fa-expand"></i>
            </a>
            <?php if ($navNotifications == true) : ?>
                <!--Notification Menu-->
                <li class="dropdown">

                    <a class="app-nav__item" href="#" id="notificaciones" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-bell fa-lg fonticono"></i>
                    </a>


                    <ul class="app-notification dropdown-menu dropdown-menu-right" aria-labelledby="notificaciones">
                        <li class="app-notification__title ">You have 4 new notifications.</li>
                        <div class="app-notification__content">
                            <li>
                                <a class="app-notification__item " href="javascript:;">
                                    <span class="app-notification__icon">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                            <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </span>
                                    <div>
                                        <p class="app-notification__message">Lisa sent you a mail</p>
                                        <p class="app-notification__meta">2 min ago</p>
                                    </div>
                                </a>
                            </li>
                            <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                                    <div>
                                        <p class="app-notification__message">Mail server not working</p>
                                        <p class="app-notification__meta">5 min ago</p>
                                    </div>
                                </a></li>
                            <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                                    <div>
                                        <p class="app-notification__message">Transaction complete</p>
                                        <p class="app-notification__meta">2 days ago</p>
                                    </div>
                                </a></li>
                            <div class="app-notification__content">
                                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                                        <div>
                                            <p class="app-notification__message">Lisa sent you a mail</p>
                                            <p class="app-notification__meta">2 min ago</p>
                                        </div>
                                    </a></li>
                                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                                        <div>
                                            <p class="app-notification__message">Mail server not working</p>
                                            <p class="app-notification__meta">5 min ago</p>
                                        </div>
                                    </a></li>
                                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                                        <div>
                                            <p class="app-notification__message">Transaction complete</p>
                                            <p class="app-notification__meta">2 days ago</p>
                                        </div>
                                    </a></li>
                            </div>
                        </div>
                        <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
                    </ul>
                </li>
            <?php endif; ?>
            <!-- User Menu-->
            <li class="dropdown">
                <a class="app-nav__item" href="#" id="menuUser" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="far fa-user fa-lg"></i>
                </a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right" aria-labelledby="menuUser">
                    <?php foreach ($menuSession as $ms) : ?>
                        <li><a class="dropdown-item" href="<?= $ms['url'] ?>">
                                <i class="<?= $ms['icon'] ?>  fa-lg"></i>
                                <?= $ms['text'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= $photoUser ?>" alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><?= $userName ?></p>
                <p class="app-sidebar__user-designation"><?= $profile ?></p>
            </div>
        </div>
        <ul class="app-menu">

            <?php foreach ($linksSidebar as $key => $value) : ?>
                <?php if (isset($value['header'])) : ?>
                    <div class="menu-heading text-light"><?php echo $value['header']; ?></div>
                <?php endif; ?>

                <?php if (isset($value['mode']) && $value['mode'] == 'menu') : ?>
                    <a class="app-menu__item" href="<?php echo $value['url']; ?>">
                        <i class="<?php echo $value['icon']; ?>"></i>
                        <span class="app-menu__label"><?php echo $value['text']; ?></span>
                    </a>
                <?php endif; ?>

                <?php if (isset($value['mode']) && $value['mode'] == 'submenu') : ?>
                    <li class="treeview">

                        <a class="app-menu__item" href="#">
                            <i class="<?php echo $value['icon']; ?>"></i>
                            <span class="app-menu__label"><?php echo $value['text']; ?></span>
                            <i class="treeview-indicator fa fa-angle-right"></i>
                        </a>
                        <ul class="treeview-menu">

                            <?php foreach ($value['submenu'] as $subValue) : ?>
                                <li>
                                    <a class="treeview-item" href="<?php echo $subValue['url']; ?>">
                                        <i class="icon far fa-circle"></i>
                                        <?php echo $subValue['text']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </aside>