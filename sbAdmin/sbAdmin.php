<?php
//NAVBAR FIJO
$navbarFijo = true;

//sidebar dark = true // light = false;
$SideBarDark = true;

//navbar derecha 
$navbarRight = false;

//COLOR NAVBAR // beta
//navbar-light , navbar-dark //bg-white - success- danger - info, etc
// $navbarColor = 'navbar-light bg-white';
$navbarColor = 'navbar-dark bg-dark';



// DATOS GENERALES ADMIN
$title = 'SB Admin';
$mainLink = '/';
$logoAdmin = '../public/logo/logo.png';
$logoAdminName = '../public/logo/logo-name.png';

//VER ICONOS DE MENSAJE Y NOTIFICACION
$navSearch = false;
$navNotifications = true;
$navMessages = true;

//DATOS DEL USUARIO ADMIN
$userName = 'Carlos Tucno Vasquez';
$profile = 'Administrador';
$photoUser = '../public/img/user.png';
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

$sivebarFooter = false;

//CREACION DE ENLACES PARA EL MENU SIDEBAR
$linksSidebar = [
    [
        'mode' => 'menu',
        'text' => 'Dashboard',
        'url'  => '/',
        'icon' => 'fas fa-pager',
    ],
    [
        'header' => 'Addons',
        'span'  => 'UI Components'
    ],
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
        'icon' => 'fas fa-chart-bar',
    ],
    [
        'header' => 'SUBMENU',
        'span'  => 'UI Components'
    ],
    [
        'mode' => 'submenu',
        'text'    => 'Categorias',
        'url'    => '#',
        'icon' => 'fas fa-adjust',
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
        'icon' => 'fab fa-product-hunt',
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
    'https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css',
    $linkURL . '/sbAdmin/css/styles.css',
];

$linksScript = [
    // $linkURL . '/sbAdmin/js/feather.min.js',
    'https://code.jquery.com/jquery-3.6.0.js',
    'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js',
    'https://kit.fontawesome.com/1d88763075.js',
    'https://cdn.jsdelivr.net/npm/simple-datatables@latest',
    $linkURL . '/sbAdmin/js/bootstrap.bundle.min.js',
    $linkURL . '/sbAdmin/js/scripts.js',
    $linkURL . '/sbAdmin/js/datatable.js',
];
