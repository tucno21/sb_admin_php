<?php
//MODO SIDEBAR SIDEBAR
//SIDEBAR COMPRIMIDO // 'minimenu'
$sidebarIcon = '';

//COLOR NAVBAR
//bg-primary // bg-danger// bg-warning// bg-info // bg-success // bg-dark
$colorNavbar = 'bg-dark';

//COLOR SIDEBAR
//'light-sidebar' = blanco // '' = natural
$colorSidebar = '';

//COLOR LOGO SIDEBAR
// bg-dark // bg-primary // bg-danger// bg-warning// bg-info // bg-success //
$colorLogoSidebar = 'bg-dark';

//'light' = por defecto  // 'dark'
$themeDark = 'light';

//COLOR
$textColorLogo = 'text-white';


// DATOS GENERALES ADMIN
$title = 'DashboardKit';
$mainLink = '/';
$logoAdmin = '../public/logo/logo.png';
$logoAdminName = '../public/logo/logo-name.png';

//VER ICONOS DE MENSAJE Y NOTIFICACION
$navSearch = false;
$navNotifications = false;

//DATOS DEL USUARIO ADMIN
$userName = 'Carlos Tucno Vasquez';
$profile = 'Administrador';
$photoUser = '../public/dashboardkit/images/user/avatar-2.jpg';
$emailUser = 'cc@bb.com';

//MENU CERRAR O PERFIL DE ADMINISTRADOR
$menuSession = [
    [
        'text' => 'Settings',
        'url'  => 'login/password',
        'icon' => 'account_circle',
    ],
    [
        'text' => 'Activity Log',
        'url'  => 'dashboard/logs',
        'icon' => 'https',
    ],
    [
        'text' => 'Logout',
        'url'  => 'admin/cerrar',
        'icon' => 'chrome_reader_mode',
    ],
];


//CREACION DE ENLACES PARA EL MENU SIDEBAR
$linksSidebar = [
    [
        'mode' => 'menu',
        'text' => 'Dashboard',
        'url'  => '/',
        'icon' => 'list',
    ],
    [
        'header' => 'Addons',
        'span'  => 'UI Components'
    ],
    [
        'mode' => 'menu',
        'text' => 'Usuarios',
        'url'  => '/users',
        'icon' => 'user',
    ],
    [
        'mode' => 'menu',
        'text' => 'Charts',
        'url'  => '/charts',
        'icon' => 'book-open',
    ],
    [
        'header' => 'SUBMENU',
        'span'  => 'UI Components'
    ],
    [
        'mode' => 'submenu',
        'text'    => 'Categorias',
        'url'    => '#',
        'icon' => 'grid',
        'submenu' => [
            [
                'text' => 'Erear',
                'url'  => 'www.google.com',
                'icon' => 'circle ',
            ],
            [
                'text' => 'Editar',
                'url'  => 'www.google.com',
                'icon' => 'circle ',
            ],
        ],
    ],
    [
        'mode' => 'submenu',
        'text'    => 'Productos',
        'url'    => '#',
        'icon' => 'check-square',
        'submenu' => [
            [
                'text' => 'Crear',
                'url'  => 'www.google.com',
                'icon' => 'circle ',
            ],
            [
                'text' => 'Editar',
                'url'  => 'www.google.com',
                'icon' => 'circle ',
            ],
        ],
    ],

    [
        'header' => 'CLIENTES',
        'span'  => 'UI Components'
    ],
];



//ENLACES PARA CSS Y JS html
$linkURL = '../public';

$linksCss = [
    // 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900',
    $linkURL . '/dashboardkit/fonts/cryptofont.css',
    $linkURL . '/dashboardkit/fonts/feather.css',
    $linkURL . '/dashboardkit/fonts/fontawesome.css',
    $linkURL . '/dashboardkit/fonts/material.css',
    $linkURL . '/dashboardkit/css/customizer.css',
];

$linksScript = [
    $linkURL . '/dashboardkit/js/vendor-all.min.js',
    $linkURL . '/dashboardkit/js/plugins/bootstrap.min.js',
    $linkURL . '/dashboardkit/js/plugins/feather.min.js',
    $linkURL . '/dashboardkit/js/pcoded.min.js',
];
