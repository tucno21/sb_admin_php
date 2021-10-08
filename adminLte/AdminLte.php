<?php
//MODOS DE  DASHBOARD // 1 = true, 0 = false
$CustomizeAdminLTE =
    [
        'darkMode' => [0 => ' dark-mode'], //modo oscuro
        'layoutFixed' => [1 => ' layout-fixed'], //sidebar fijo
        'navbarFixed' => [1 => ' layout-navbar-fixed'], //menu superior fijo
        'reduceBody' => [0 => ' text-sm'], //reducir todo el body
        'sidebarCollapse' => [0 => ' sidebar-collapse'], //ocultar sidebar
        'sidebaMini' => [1 => ' sidebar-mini'], //Sidebar reducido -- DEBE estar activo 'sidebarCollapse'
        'sidebaMini-md' => [0 => ' sidebar-mini-md'], //Sidebar reducido tablet-- DEBE estar activo 'sidebarCollapse'
        'sidebaMini-xs' => [0 => ' sidebar-mini-xs'], //Sidebar reducido celular-- DEBE estar activo 'sidebarCollapse'
    ];

//'nav-flat' == para sub menus amplios, 'nav-legacy' = menu sin seleccion boton, 
//'nav-compact' sibebar comprimido, 'text-sm' = sidebar con texto pequeño
$navSidebar = '';
//navbar pequeño SLIMSCRO  , 'text-sm' = menu superior pequeño
$navSmoll = '';
//navbar Logo pequeño SLIMSCRO  , 'text-sm' = menu superior pequeño
$navSmollLogo = '';

//COLOR NAVBAR
//navbar-white navbar-light = BLANCO -- ORININAL
//'navbar-white'(color de fondo) 'navbar-light'(color letra light=negro, dark=blanco)
//NEGRO(navbar-dark), PLOMO(navbar-gray), PLOMO oscuro(navbar-gray-dark), VERDE(navbar-success)
//CELESTE FUERTE(navbar-info), AZUL MARINO(navbar-navy), AZUL(navbar-primary)
//rojo(navbar-danger), morado fuerte(navbar-indigo), morado(navbar-purple), rosado(navbar-pink), amarillo(navbar-warning),
$navColor = 'navbar-dark navbar-dark';
//COLOR SIDEBAR
//sidebar-dark-primary = NEGRO
//sidebar-light-primary = BLANCO
//Se puede cambiar la ultima palabra
$sidebarColor = 'sidebar-dark-primary';



// DATOS GENERALES ADMIN
$title = 'AdminLTE 3 | Blank Page';
$mainLink = '/';
$logoAdmin = '../public/backend_adminlte/dist/img/AdminLTELogo.png';

//VER ICONOS DE MENSAJE Y NOTIFICACION
$navSearch = false;
$navMessages = false;
$navNotifications = false;


//DATOS DEL USUARIO ADMIN
$userName = 'Carlos Tucno Vasquez';
$profile = 'Administrador';
$photoUser = '../public/backend_adminlte/dist/img/user2-160x160.jpg';

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
    'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
    $linkURL . '/backend_adminlte/plugins/fontawesome-free/css/all.min.css',
    $linkURL . '/backend_adminlte/dist/css/adminlte.min.css',
];

$linksScript = [
    $linkURL . '/backend_adminlte/plugins/jquery/jquery.min.js',
    $linkURL . '/backend_adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js',
    $linkURL . '/backend_adminlte/dist/js/adminlte.min.js',
    $linkURL . '/backend_adminlte/dist/js/demo.js',
];
