<!DOCTYPE html>
<html lang="es">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>
    <link rel="icon" href="<?= $logoAdmin ?>">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

    <link href="../public/AppStack/css/<?= $themeDark ?>.css" rel="stylesheet">
    <?php foreach ($linksCss as $value) : ?>
        <link href="<?= $value ?>" rel="stylesheet" />
    <?php endforeach; ?>

</head>


<body data-theme="<?= $colorSidebar ?>" data-layout="<?= $LayoutBody ?>" data-sidebar-position="<?= $positionSidebar ?>" data-sidebar-behavior="<?= $behaviorSidebar ?>">
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="<?= $mainLink ?>">
                    <span class="align-middle me-3"><?= $title ?></span>
                </a>

                <ul class="sidebar-nav">

                    <?php foreach ($linksSidebar as $key => $value) : ?>

                        <?php if (isset($value['header'])) : ?>
                            <li class="sidebar-header">
                                <?php echo $value['header']; ?>
                            </li>
                        <?php endif; ?>

                        <?php if (isset($value['mode']) && $value['mode'] == 'menu') : ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="<?php echo $value['url']; ?>">
                                    <i class="align-middle" data-feather="<?php echo $value['icon']; ?>"></i>
                                    <span class="align-middle">
                                        <?php echo $value['text']; ?>
                                    </span>
                                </a>
                            </li>
                        <?php endif; ?>

                        <?php if (isset($value['mode']) && $value['mode'] == 'submenu') : ?>

                            <li class="sidebar-item">
                                <a data-bs-target="#<?php echo $value['text']; ?>" data-bs-toggle="collapse" class="sidebar-link collapsed">
                                    <i class="align-middle" data-feather="<?php echo $value['icon']; ?>"></i> <span class="align-middle"><?php echo $value['text']; ?></span>
                                </a>
                                <ul id="<?php echo $value['text']; ?>" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                                    <?php foreach ($value['submenu'] as $subValue) : ?>
                                        <li class="sidebar-item">
                                            <a class="sidebar-link" href="<?php echo $subValue['url']; ?>">
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
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <?php if ($navSearch == true) : ?>
                    <form class="d-none d-sm-inline-block">
                        <div class="input-group input-group-navbar">
                            <input type="text" class="form-control" placeholder="Search projects…" aria-label="Search">
                            <button class="btn" type="button">
                                <i class="align-middle" data-feather="search"></i>
                            </button>
                        </div>
                    </form>
                <?php endif; ?>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <?php if ($navMessages == true) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                                    <div class="position-relative">
                                        <i class="align-middle" data-feather="message-circle"></i>
                                        <span class="indicator">4</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                                    <div class="dropdown-menu-header">
                                        <div class="position-relative">
                                            4 New Messages
                                        </div>
                                    </div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <img src="../public/AppStack/img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Ashley Briggs">
                                                </div>
                                                <div class="col-10 ps-2">
                                                    <div class="text-dark">Ashley Briggs</div>
                                                    <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu
                                                        tortor.</div>
                                                    <div class="text-muted small mt-1">15m ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <img src="../public/AppStack/img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="Carl Jenkins">
                                                </div>
                                                <div class="col-10 ps-2">
                                                    <div class="text-dark">Carl Jenkins</div>
                                                    <div class="text-muted small mt-1">Curabitur ligula sapien euismod
                                                        vitae.</div>
                                                    <div class="text-muted small mt-1">2h ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <img src="../public/AppStack/img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Stacie Hall">
                                                </div>
                                                <div class="col-10 ps-2">
                                                    <div class="text-dark">Stacie Hall</div>
                                                    <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
                                                    </div>
                                                    <div class="text-muted small mt-1">4h ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <img src="../public/AppStack/img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Bertha Martin">
                                                </div>
                                                <div class="col-10 ps-2">
                                                    <div class="text-dark">Bertha Martin</div>
                                                    <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
                                                        posuere ac, mattis non.</div>
                                                    <div class="text-muted small mt-1">5h ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-footer">
                                        <a href="#" class="text-muted">Show all messages</a>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($navNotifications == true) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                    <div class="position-relative">
                                        <i class="align-middle" data-feather="bell-off"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                                    <div class="dropdown-menu-header">
                                        4 New Notifications
                                    </div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <i class="text-danger" data-feather="alert-circle"></i>
                                                </div>
                                                <div class="col-10">
                                                    <div class="text-dark">Update completed</div>
                                                    <div class="text-muted small mt-1">Restart server 12 to complete the
                                                        update.</div>
                                                    <div class="text-muted small mt-1">2h ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <i class="text-warning" data-feather="bell"></i>
                                                </div>
                                                <div class="col-10">
                                                    <div class="text-dark">Lorem ipsum</div>
                                                    <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                        hendrerit et.</div>
                                                    <div class="text-muted small mt-1">6h ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <i class="text-primary" data-feather="home"></i>
                                                </div>
                                                <div class="col-10">
                                                    <div class="text-dark">Login from 192.186.1.1</div>
                                                    <div class="text-muted small mt-1">8h ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-2">
                                                    <i class="text-success" data-feather="user-plus"></i>
                                                </div>
                                                <div class="col-10">
                                                    <div class="text-dark">New connection</div>
                                                    <div class="text-muted small mt-1">Anna accepted your request.</div>
                                                    <div class="text-muted small mt-1">12h ago</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu-footer">
                                        <a href="#" class="text-muted">Show all notifications</a>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>

                        <?php if ($language == true) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-flag dropdown-toggle" href="#" id="languageDropdown" data-bs-toggle="dropdown">
                                    <img src="../public/AppStack/img/flags/us.png" alt="English" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                                    <a class="dropdown-item" href="#">
                                        <img src="../public/AppStack/img/flags/us.png" alt="English" width="20" class="align-middle me-1" />
                                        <span class="align-middle">English</span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="../public/AppStack/img/flags/es.png" alt="Spanish" width="20" class="align-middle me-1" />
                                        <span class="align-middle">Spanish</span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="../public/AppStack/img/flags/de.png" alt="German" width="20" class="align-middle me-1" />
                                        <span class="align-middle">German</span>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="../public/AppStack/img/flags/nl.png" alt="Dutch" width="20" class="align-middle me-1" />
                                        <span class="align-middle">Dutch</span>
                                    </a>
                                </div>
                            </li>
                        <?php endif; ?>

                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                                <img src="<?= $photoUser ?>" class="avatar img-fluid rounded-circle me-1" alt="<?= $userName ?>" /> <span class="text-dark"><?= $userName ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">

                                <?php foreach ($menuSession as $ms) : ?>

                                    <a class="dropdown-item" href="<?= $ms['url'] ?>">
                                        <?= $ms['text'] ?>
                                    </a>
                                    <div class="dropdown-divider"></div>

                                <?php endforeach; ?>

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>