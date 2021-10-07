<?php
//COLOR DASHBOARD  
//azul- 'primary' - plomo- 'secondary' - verde- 'success' - negro- 'dark' - rojo- 'danger' - amarillo- 'warning' - blanco- 'light' - celeste- 'info'
$dashboardColor = 'dark';
//BARRA LATERAL FIJO
$dashboardfixed = true;

// DATOS GENERALES ADMIN
$title = 'SbAdmin';
$mainLink = '/';
$logo = 'public/logo/logo.png';

//DATOS DEL USUARIO ADMIN
$rango = 'Administrador';

//MENU CERRAR O PERFIL DE ADMINISTRADOR
$menuSession = [
    [
        'text' => 'Carlos Tucno',
        'url'  => '#',
        'icon' => 'fas fa-user',
    ],
    [
        'text' => 'Cambiar Contraseña',
        'url'  => 'login/password',
        'icon' => 'fas fa-key',
    ],
    [
        'text' => 'Logs',
        'url'  => 'dashboard/logs',
        'icon' => 'fas fa-sign-out-alt',
    ],
    [
        'text' => 'Cerrar sesión',
        'url'  => 'admin/cerrar',
        'icon' => 'fas fa-times-circle',
    ],
];

//CREACION DE ENLACES PARA EL MENU SIDEBAR
$linksSidebar = [
    ['header' => 'Dashboard'],
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


//FOOTER DE MENU LATERAL
$sidenavfooter = [
    'aplicar' => true,
    'title'  => 'Trabajo realizado',
    'autor' =>  'Carlos Tucno',
];


//ENLACES PARA CSS Y JS html
$linkURL = '../public';

$linksCss = [
    'https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css',
    $linkURL . '/css/styles.css',
];

$linksScript = [
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js',
    $linkURL . '/js/scripts.js',
];
