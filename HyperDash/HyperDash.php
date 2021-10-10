<?php
//THE DARK
$themeDark = false;

//NAVBAR FIJO
$navbarFijo = true;

//sidebar dark = true // light = false;
$SideBarTheme = true;

//SIDEBAR COMPRIMIDO 
$sidebarIcon = false;

//SidebarScrollable
$SidebarScrollable = false;

//COLOR LOGO SIDEBAR
// bg-dark // bg-primary // bg-danger// bg-warning// bg-info // bg-success //
$colorLogoSidebar = 'bg-dark';

//COLOR
$textColorLogo = 'text-white';


// DATOS GENERALES ADMIN
$title = 'HyperDash';
$mainLink = '/';
$logoAdmin = '../public/logo/logo.png';
$logoAdminName = '../public/logo/logo-name.png';

//VER ICONOS DE MENSAJE Y NOTIFICACION
$navSearch = false;
$navNotifications = false;
$language = false;

//DATOS DEL USUARIO ADMIN
$userName = 'Carlos Tucno Vasquez';
$profile = 'Administrador';
$photoUser = '../public/HyperDash/images/users/avatar-1.jpg';
$emailUser = 'cc@bb.com';

//MENU CERRAR O PERFIL DE ADMINISTRADOR
$menuSession = [
    [
        'text' => 'Settings',
        'url'  => 'login/password',
        'icon' => 'mdi mdi-account-edit me-1',
    ],
    [
        'text' => 'Activity Log',
        'url'  => 'dashboard/logs',
        'icon' => 'mdi mdi-lock-outline me-1',
    ],
    [
        'text' => 'Logout',
        'url'  => 'admin/cerrar',
        'icon' => 'mdi mdi-logout me-1',
    ],
];


//CREACION DE ENLACES PARA EL MENU SIDEBAR
$linksSidebar = [
    [
        'mode' => 'menu',
        'text' => 'Dashboard',
        'url'  => '/',
        'icon' => 'uil-home-alt',
    ],
    [
        'header' => 'Addons',
        'span'  => 'UI Components'
    ],
    [
        'mode' => 'menu',
        'text' => 'Usuarios',
        'url'  => '/users',
        'icon' => 'uil-calender',
    ],
    [
        'mode' => 'menu',
        'text' => 'Charts',
        'url'  => '/charts',
        'icon' => 'uil-briefcase',
    ],
    [
        'header' => 'SUBMENU',
        'span'  => 'UI Components'
    ],
    [
        'mode' => 'submenu',
        'text'    => 'Categorias',
        'url'    => '#',
        'icon' => 'uil-rss',
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
        'icon' => 'uil-clipboard-alt',
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
    $linkURL . '/HyperDash/css/icons.min.css',
];

$linksScript = [
    $linkURL . '/HyperDash/js/vendor.min.js',
    $linkURL . '/HyperDash/js/app.min.js',
];
