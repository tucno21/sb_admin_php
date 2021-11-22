<?php

// DATOS GENERALES ADMIN
$title = 'Vlady';
$mainLink = '/';
$logoAdmin = '../public/logo/logo.png';

//VER ICONOS DE MENSAJE Y NOTIFICACION
$navSearch = false;
$navNotifications = false;
$navMessages = true;

//DATOS DEL USUARIO ADMIN
$userName = 'Carlos Tucno Vasquez';
$profile = 'Administrador';
$photoUser = '../public/img/user.png';
// $emailUser = 'cc@bb.com';

//MENU CERRAR O PERFIL DE ADMINISTRADOR
$menuSession = [
    [
        'text' => 'Settings',
        'url'  => 'login/password',
        'icon' => 'fa fa-cog',
    ],
    [
        'text' => 'Activity Log',
        'url'  => 'dashboard/logs',
        'icon' => 'fas fa-clipboard-list',
    ],
    [
        'text' => 'Logout',
        'url'  => 'admin/cerrar',
        'icon' => 'fa fa-sign-out',
    ],
];


//CREACION DE ENLACES PARA EL MENU SIDEBAR
$linksSidebar = [
    ['header' => 'Dashboard'],
    [
        'mode' => 'menu',
        'text' => 'Dashboard',
        'url'  => '/',
        'icon' => 'fa fa-dashboard',
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
    ['header' => 'submenus'],
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
];



//ENLACES PARA CSS Y JS html
$linkURL = '../public';

$linksCss = [
    $linkURL . '/buildDash/css/bootstrap.css',
    'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css',
    'https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css',
    'https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css',
    $linkURL . '/buildDash/css/styles.css',
];

$linksScript = [
    'https://kit.fontawesome.com/1d88763075.js',
    $linkURL . '/buildDash/js/bootstrap.bundle.js',
    'https://code.jquery.com/jquery-3.5.1.js',
    'https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js',
    'https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js',
    'https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js',
    $linkURL . '/buildDash/js/main.js',
];
