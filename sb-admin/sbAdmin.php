<?php
//COLOR DASHBOARD  
//azul- 'primary' - plomo- 'secondary' - verde- 'success' - negro- 'dark' - rojo- 'danger' - amarillo- 'warning' - blanco- 'light' - celeste- 'info'
$dashboardColor = 'dark';
//BARRA LATERAL FIJO
$dashboardfixed = true;

// DATOS GENERALES ADMIN
$title = 'SB-Admin';
$icon = 'fas fa-laugh-wink';
$mainLink = '/';
$logo = 'public/logo/logo.png';

//DATOS DEL USUARIO ADMIN
$nameUser = 'Carlos Tucno Vasquez';
$photoUser = '../public/img/undraw_profile.svg';

//MENU CERRAR O PERFIL DE ADMINISTRADOR
$menuSession = [
    [
        'text' => 'Administrador',
        'url'  => '#',
        'icon' => 'fas fa-user',
    ],
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
    ['line' => 'my-0'],
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
    $linkURL . '/vendor/fontawesome-free/css/all.min.css',
    'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
    $linkURL . '/css/sb-admin-2.min.css',
];

$linksScript = [
    $linkURL . '/vendor/jquery/jquery.min.js',
    $linkURL . '/vendor/bootstrap/js/bootstrap.bundle.min.js',
    $linkURL . '/vendor/jquery-easing/jquery.easing.min.js',
    $linkURL . '/js/sb-admin-2.js',
];
