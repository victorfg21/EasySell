<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'easySell',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>easy</b>Sell',

    'logo_mini' => '<b>e</b>S',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        [
            'text' => 'HOME',
            'url'  => 'home',
            'icon' => 'home',
        ],
        'CADASTROS',
        [//Pessoas
            'text'    => 'Pessoas',
            'icon'    => 'users',
            'submenu' => [
                [//Usuários
                    'text'    => 'Usuários',
                    'icon'    => 'users',
                    'submenu' => [
                        [
                            'text' => 'Novo',
                            'url'  => 'admin/usuarios/novo',
                        ],
                        [
                            'text' => 'Editar',
                            'url'  => 'admin/usuarios',
                        ],
                    ],
                ],
                [//Clientes
                    'text'    => 'Clientes',
                    'icon'    => 'user',
                    'submenu' => [
                        [
                            'text' => 'Novo',
                            'url'  => 'admin/clientes/novo',
                        ],
                        [
                            'text' => 'Editar',
                            'url'  => 'admin/clientes',
                        ],
                    ],
                ],
                [//Vendedores
                    'text'    => 'Vendedores',
                    'icon'    => 'briefcase',
                    'submenu' => [
                        [
                            'text' => 'Novo',
                            'url'  => 'admin/vendedores/novo',
                        ],
                        [
                            'text' => 'Editar',
                            'url'  => 'admin/vendedores',
                        ],
                    ],
                ],
                [//Fornecedores
                    'text'    => 'Fornecedores',
                    'icon'    => 'truck',
                    'submenu' => [
                        [
                            'text' => 'Novo',
                            'url'  => 'admin/fornecedores/novo',
                        ],
                        [
                            'text' => 'Editar',
                            'url'  => 'admin/fornecedores',
                        ],
                    ],
                ],
            ],
        ],
        'ESTOQUE',
        [//Produtos
            'text'    => 'Produtos',
            'icon'    => 'cube',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'url'  => 'admin/produtos/novo',
                ],
                [
                    'text' => 'Editar',
                    'url'  => 'admin/produtos',
                ],
                [//Categoria
                    'text'    => 'Categorias',
                    'url'     => '#',
                    'icon'    => 'glass',
                    'submenu' => [
                        [
                            'text' => 'Novo',
                            'url'  => 'admin/categorias/novo',
                        ],
                        [
                            'text' => 'Editar',
                            'url'  => 'admin/categorias',
                        ],
                    ],
                ],
                [//Modelo
                    'text'    => 'Modelos',
                    'url'     => '#',
                    'icon'    => 'cogs',
                    'submenu' => [
                        [
                            'text' => 'Novo',
                            'url'  => 'admin/modelos/novo',
                        ],
                        [
                            'text' => 'Editar',
                            'url'  => 'admin/modelos',
                        ],
                    ],
                ],
                [//Marca
                    'text'    => 'Marcas',
                    'url'     => '#',
                    'icon'    => 'flag',
                    'submenu' => [
                        [
                            'text' => 'Novo',
                            'url'  => 'admin/marcas/novo',
                        ],
                        [
                            'text' => 'Editar',
                            'url'  => 'admin/marcas',
                        ],
                    ],
                ],
            ],
        ],
        [//Estoque
            'text'    => 'Estoque',
            'icon'    => 'cubes',
            'submenu' => [
                [
                    'text' => 'Geral',
                    'url'  => 'admin/estoque',
                ],
                [
                    'text' => 'Saída',
                    'url'  => 'admin/estoque/entrada',
                ],
                [
                    'text' => 'Entrada',
                    'url'  => 'admin/estoque/saida',
                ],
            ],
        ],
        'FINANCEIRO',
        [//Pagamentos
            'text'    => 'Pagamentos',
            'icon'    => 'dollar',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'url'  => 'admin/pagamentos/novo',
                ],
                [
                    'text' => 'Editar',
                    'url'  => 'admin/pagamentos',
                ],
                [//Condições
                    'text' => 'Condições',
                    'url'  => '#',
                    'icon' => 'credit-card',
                    'submenu' => [
                        [
                            'text' => 'Novo',
                            'url'  => 'admin/condicoes/novo',
                        ],
                        [
                            'text' => 'Editar',
                            'url'  => 'admin/condicoes',
                        ],
                    ]
                ],
            ],
        ],
        [//Vendas
            'text'    => 'Vendas',
            'icon'    => 'shopping-cart',
            'submenu' => [
                [
                    'text' => 'Geral',
                    'url'  => 'admin/vendas',
                ],
                [
                    'text' => 'Novo',
                    'url'  => 'admin/vendas/novo',
                ],
            ],
        ],
        [//Relatórios
            'text'    => 'Relatórios',
            'icon'    => 'line-chart',
            'submenu' => [
                [
                    'text' => 'Venda X Cliente',
                    'url'  => '#',
                ],
                [
                    'text' => 'Venda X Vendedores',
                    'url'  => '#',
                ],
                [
                    'text' => 'Venda X Produtos',
                    'url'  => '#',
                ],
                [
                    'text' => 'Total Vendas',
                    'url'  => '#',
                ],
                [
                    'text' => 'Fornecedores',
                    'url'  => '#',
                ],
                [
                    'text' => 'Balancete Período',
                    'url'  => '#',
                ],
            ],
        ],
        [//Promoções
            'text'    => 'Promoções',
            'icon'    => 'bullhorn',
            'submenu' => [
                [
                    'text' => 'Novo',
                    'url'  => 'admin/promocoes/novo',
                ],
                [
                    'text' => 'Editar',
                    'url'  => 'admin/promocoes',
                ],
            ],
        ],
        'AVISOS',
        [//Novo Aviso
            'text' => 'Novo',
            'url'  => 'admin/avisos/novo',
        ],
        [//Novo Aviso
            'text' => 'Editar',
            'url'  => 'admin/avisos',
        ],
        [//Todos Avisos
            'text'       => 'Todos',
            'icon_color' => 'green',
            'url'        => 'admin/avisos/0',
            'submenu'    => [
                    [//Importante
                        'text'       => 'Importante',
                        'icon_color' => 'red',
                        'url'  => 'admin/avisos/1',
                    ],
                    [//Atenção
                        'text'       => 'Atenção',
                        'icon_color' => 'yellow',
                        'url'  => 'admin/avisos/2',
                    ],
                    [//Informação
                        'text'       => 'Informação',
                        'icon_color' => 'aqua',
                        'url'  => 'admin/avisos/3',
                    ],
                ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
