<?php
//NAVBAR ICON NO COMPATIBLE MODO CELULAR
$navbarIcon = false;


// DATOS GENERALES ADMIN
$title = 'Bubbly';
$mainLink = '/';
$logoAdmin = '../public/logo/logo.png';
$logoAdminName = '../public/logo/logo-name.png';

//VER ICONOS DE MENSAJE Y NOTIFICACION
$navSearch = false;
$navNotifications = false;
$navMessages = false;

//DATOS DEL USUARIO ADMIN
$userName = 'Carlos Tucno Vasquez';
$profile = 'Administrador';
$photoUser = '../public/bubblyDash/img/avatar-1.jpg';
$emailUser = 'cc@bb.com';

//MENU CERRAR O PERFIL DE ADMINISTRADOR
$menuSession = [
    [
        'text' => 'Settings',
        'url'  => 'login/password',
        'icon' => 'settings',
    ],
    [
        'text' => 'Activity Log',
        'url'  => 'dashboard/logs',
        'icon' => 'log-out',
    ],
    [
        'text' => 'Logout',
        'url'  => 'admin/cerrar',
        'icon' => 'log-out',
    ],
];

$linkIconsOrion = '../public/';

//CREACION DE ENLACES PARA EL MENU SIDEBAR
$linksSidebar = [
    [
        'mode' => 'menu',
        'text' => 'Dashboard',
        'url'  => '/',
        'icon' => 'real-estate-1',
    ],
    [
        'header' => 'Addons',
        'span'  => 'UI Components'
    ],
    [
        'mode' => 'menu',
        'text' => 'Usuarios',
        'url'  => '/users',
        'icon' => 'real-estate-1',
    ],
    [
        'mode' => 'menu',
        'text' => 'Charts',
        'url'  => '/charts',
        'icon' => 'real-estate-1',
    ],
    [
        'header' => 'SUBMENU',
        'span'  => 'UI Components'
    ],
    [
        'mode' => 'submenu',
        'text'    => 'Categorias',
        'url'    => '#',
        'icon' => 'reading-1',
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
        'icon' => 'reading-1',
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
    'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;display=swap" rel="stylesheet',
    'https://use.fontawesome.com/releases/v5.7.1/css/all.css',
    $linkURL . '/bubblyDash/css/style.bootstrap.css',
    $linkURL . '/bubblyDash/css/style.mod.css',
];

$linksScript = [
    $linkURL . '/bubblyDash/js/bootstrap.bundle.min.js',
    'https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js',
    $linkURL . '/bubblyDash/js/theme.413b8ff4.js',

];
