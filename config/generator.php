<?php

return [
    /**
     * If any input file(image) as default will use options below.
     */
    "image" => [
        /**
         * Path for store the image.
         *
         * Available options:
         * 1. public
         * 2. storage
         * 3. S3
         */
        "disk" => "storage",

        /**
         * Will be used if image is nullable and default value is null.
         */
        "default" => "https://via.placeholder.com/350?text=No+Image+Avaiable",

        /**
         * Crop the uploaded image using intervention image.
         */
        "crop" => true,

        /**
         * When set to true the uploaded image aspect ratio will still original.
         */
        "aspect_ratio" => true,

        /**
         * Crop image size.
         */
        "width" => 500,
        "height" => 500,
    ],

    "format" => [
        /**
         * Will be used to first year on select, if any column type year.
         */
        "first_year" => 1970,

        /**
         * If any date column type will cast and display used this format, but for input date still will used Y-m-d format.
         *
         * another most common format:
         * - M d Y
         * - d F Y
         * - Y m d
         */
        "date" => "Y-m-d",

        /**
         * If any input type month will cast and display used this format.
         */
        "month" => "Y/m",

        /**
         * If any input type time will cast and display used this format.
         */
        "time" => "H:i",

        /**
         * If any datetime column type or datetime-local on input, will cast and display used this format.
         */
        "datetime" => "Y-m-d H:i:s",

        /**
         * Limit string on index view for any column type text or long text.
         */
        "limit_text" => 100,
    ],

    /**
     * It will be used for generator to manage and showing menus on sidebar views.
     *
     * Example:
     * [
     *   'header' => 'Main',
     *
     *   // All permissions in menus[] and submenus[]
     *   'permissions' => ['test view'],
     *
     *   menus' => [
     *       [
     *          'title' => 'Main Data',
     *          'icon' => '<i class="bi bi-collection-fill"></i>',
     *          'route' => null,
     *
     *          // permission always null when isset submenus
     *          'permission' => null,
     *
     *          // All permissions on submenus[] and will empty[] when submenus equals to []
     *          'permissions' => ['test view'],
     *
     *          'submenus' => [
     *                 [
     *                     'title' => 'Tests',
     *                     'route' => '/tests',
     *                     'permission' => 'test view'
     *                  ]
     *               ],
     *           ],
     *       ],
     *  ],
     *
     * This code below always changes when you use a generator, and maybe you must format the code.
     */
    "sidebars" => [
    [
        'header' => 'Main',
        'permissions' => [
            'test view',
            'brand view',
            'category view',
            'project view',
            'fundingsource view',
            'wing view',
            'item view',
            'issue view',
            'repair view',
            'itemclass view',
            'itemtype view',
            'vendor view',
            'designation view',
            'employee view',
            'section view',
            'condition view',
            'return view',
            'itemreturn view'
        ],
        'menus' => [
            // [
            //     'title' => 'Main Data',
            //     'icon' => '<i class="bi bi-collection-fill"></i>',
            //     'route' => null,
            //     'permission' => null,
            //     'permissions' => [
            //         'test view'
            //     ],
            //     'submenus' => [
            //         [
            //             'title' => 'Tests',
            //             'route' => '/tests',
            //             'permission' => 'test view'
            //         ]
            //     ]
            // ],
            [
                'title' => 'Items',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/items',
                'permission' => 'item view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Issues',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/issues',
                'permission' => 'issue view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Returns',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/itemreturns',
                'permission' => 'itemreturn view',
                'permissions' => [],
                'submenus' => []
            ],
            
            [
                'title' => 'Repairs',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/repairs',
                'permission' => 'repair view',
                'permissions' => [],
                'submenus' => []
            ],
            
            [
                'title' => 'Repairs Returns',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/repairs',
                'permission' => 'repair view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Brands',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/brands',
                'permission' => 'brand view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Categories',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/categories',
                'permission' => 'category view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Projects',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/projects',
                'permission' => 'project view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Funding Sources',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/fundingsources',
                'permission' => 'fundingsource view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Wings',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/wings',
                'permission' => 'wing view',
                'permissions' => [],
                'submenus' => []
            ],
            
            [
                'title' => 'Itemclasses',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/itemclasses',
                'permission' => 'itemclass view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Itemtypes',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/itemtypes',
                'permission' => 'itemtype view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Vendors',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/vendors',
                'permission' => 'vendor view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Designations',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/designations',
                'permission' => 'designation view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Employees',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/employees',
                'permission' => 'employee view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Sections',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/sections',
                'permission' => 'section view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Conditions',
                'icon' => '<i class="bi bi-folder-fill"></i>',
                'route' => '/conditions',
                'permission' => 'condition view',
                'permissions' => [],
                'submenus' => []
            ]
            // [
            //     'title' => 'Returns',
            //     'icon' => '<i class="bi bi-folder-fill"></i>',
            //     'route' => '/returns',
            //     'permission' => 'return view',
            //     'permissions' => [],
            //     'submenus' => []
            // ],
            
        ]
    ],
    [
        'header' => 'Users',
        'permissions' => [
            'user view',
            'role & permission view'
        ],
        'menus' => [
            [
                'title' => 'Users',
                'icon' => '<i class="bi bi-people-fill"></i>',
                'route' => '/users',
                'permission' => 'user view',
                'permissions' => [],
                'submenus' => []
            ],
            [
                'title' => 'Roles & permissions',
                'icon' => '<i class="bi bi-person-check-fill"></i>',
                'route' => '/roles',
                'permission' => 'role & permission view',
                'permissions' => [],
                'submenus' => []
            ]
        ]
    ]
]
];