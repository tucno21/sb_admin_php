<?php
//theme light // dark 
$themeDark = 'light';
//COLOR SIDEBAR
//'default' = negro, // 'colored' = azul // light = blanco
$colorSidebar = 'default';
//POSITION SIDEBAR
//'left // right
$positionSidebar = 'left';
//FORMA DE COMPORTAMIENTO SIDEBAR
//''sticky' cada independiente // 'fixed' los dos se mueven // 'compact' sidebar comprimido
$behaviorSidebar = 'sticky';
//Layout BODY
//'fluid // boxed
$LayoutBody = 'fluid';




// DATOS GENERALES ADMIN
$title = 'AppStack';
$mainLink = '/';
$logoAdmin = '../public/logo/logo.png';

//VER ICONOS DE MENSAJE Y NOTIFICACION
$navSearch = false;
$navMessages = false;
$navNotifications = false;
$language = false;


//DATOS DEL USUARIO ADMIN
$userName = 'Carlos Tucno Vasquez';
$profile = 'Administrador';
$photoUser = '../public/AppStack/img/avatars/avatar.jpg';
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
        'icon' => 'list',
    ],
    ['header' => 'Addons'],
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
    ['header' => 'SUBMENU'],
    [
        'mode' => 'submenu',
        'text'    => 'Categorias',
        'url'    => '#',
        'icon' => 'check-square',
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

    ['header' => 'CLIENTES'],
];



//ENLACES PARA CSS Y JS html
$linkURL = '../public';

$linksCss = [
    // 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900',
    // $linkURL . '/backAtlaintis/assets/css/bootstrap.min.css',
    // $linkURL . '/backAtlaintis/assets/css/atlantis.css',
    // $linkURL . '/backAtlaintis/assets/css/demo.css',
];

$linksScript = [
    $linkURL . '/AppStack/js/app.js',
];
