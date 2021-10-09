<?php
//MODOS DE  DASHBOARD
$sidebarNormal = ['m1' => '', 'm2' => 'toggle-sidebar'];
$sidebarNoFixed = ['m1' => 'static-sidebar', 'm2' => 'toggle-sidebar'];
$sidebarIcon = ['m1' => 'sidebar_minimize', 'm2' => 'toggle-sidebar'];
$sidebarOculto = ['m1' => 'overlay-sidebar', 'm2' => 'sidenav-overlay-toggler'];
//seleccione una de arriba
$ModoSidebar = ['wrapper' => $sidebarNormal['m1'], 'toggle' => $sidebarNormal['m2']];

//blue, red, dark, purple, light-blue, green, orange, white, dark2, blue2, purple2, light-blue2, green2, orange2, red2
$colorBase = 'dark2';
//COLOR Logo Header
$colorLogoHeader = $colorBase;
//COLOR NAV
$colorNav = $colorBase;
//COLOR SIDEBAR
$colorSidebar = $colorBase;
//COLOR BODY //bg2 = blanco // bg1 = blanco oscuro // bg3 = plomo // dark // 
$colorBody = '';


// DATOS GENERALES ADMIN
$title = 'Atlantis';
$mainLink = '/';
$logoAdmin = '../public/logo/logo.png';

//VER ICONOS DE MENSAJE Y NOTIFICACION
$navSearch = false;
$navMessages = false;
$navNotifications = false;
$navActions = false;


//DATOS DEL USUARIO ADMIN
$userName = 'Carlos Tucno Vasquez';
$profile = 'Administrador';
$photoUser = '../public/backAtlaintis/assets/img/profile.jpg';
$emailUser = 'cc@bb.com';

//MENU CERRAR O PERFIL DE ADMINISTRADOR
$menuSession = [
    [
        'text' => 'Settings',
        'url'  => 'login/password',
        'icon' => 'fas fa-cogs',
    ],
    [
        'text' => 'Activity Log',
        'url'  => 'dashboard/logs',
        'icon' => 'fas fa-list',
    ],
    [
        'text' => 'Logout',
        'url'  => 'admin/cerrar',
        'icon' => 'fas fa-sign-out-alt',
    ],
];


//CREACION DE ENLACES PARA EL MENU SIDEBAR
$linksSidebar = [
    [
        'mode' => 'menu',
        'text' => 'Dashboard',
        'url'  => '/',
        'icon' => 'fas fa-tachometer-alt',
    ],
    ['header' => 'Addons'],
    [
        'mode' => 'menu',
        'text' => 'Usuarios',
        'url'  => '/users',
        'icon' => 'fas fa-user',
    ],
    [
        'mode' => 'menu',
        'text' => 'Charts',
        'url'  => '/charts',
        'icon' => 'fas fa-table',
    ],
    ['header' => 'SUBMENU'],
    [
        'mode' => 'submenu',
        'text'    => 'Categorias',
        'url'    => '#',
        'icon' => 'fas fa-certificate',
        'submenu' => [
            [
                'text' => 'Erear',
                'url'  => 'www.google.com',
                'icon' => 'far fa-circle ',
            ],
            [
                'text' => 'Editar',
                'url'  => 'www.google.com',
                'icon' => 'far fa-circle ',
            ],
        ],
    ],
    [
        'mode' => 'submenu',
        'text'    => 'Productos',
        'url'    => '#',
        'icon' => 'fab fa-product-hunt',
        'submenu' => [
            [
                'text' => 'Crear',
                'url'  => 'www.google.com',
                'icon' => 'far fa-circle ',
            ],
            [
                'text' => 'Editar',
                'url'  => 'www.google.com',
                'icon' => 'far fa-circle ',
            ],
        ],
    ],

    ['header' => 'CLIENTES'],
];



//ENLACES PARA CSS Y JS html
$linkURL = '../public';

$linksCss = [
    'https://fonts.googleapis.com/css?family=Lato:300,400,700,900',
    $linkURL . '/backAtlaintis/assets/css/bootstrap.min.css',
    $linkURL . '/backAtlaintis/assets/css/atlantis.css',
    $linkURL . '/backAtlaintis/assets/css/demo.css',
];

$linksScript = [
    $linkURL . '/backAtlaintis/assets/js/plugin/webfont/webfont.min.js',
    $linkURL . '/backAtlaintis/assets/js/core/jquery.3.2.1.min.js',
    $linkURL . '/backAtlaintis/assets/js/core/popper.min.js',
    $linkURL . '/backAtlaintis/assets/js/core/bootstrap.min.js',
    $linkURL . '/backAtlaintis/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',
    $linkURL . '/backAtlaintis/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js',
    $linkURL . '/backAtlaintis/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js',
    $linkURL . '/backAtlaintis/assets/js/atlantis.min.js',
];
