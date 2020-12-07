<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use HtmlBuilder\HtmlBuilder;

$builder = new HtmlBuilder();

$builder->createCollection('html')->setChildren([

    $builder->createElement('head')->setChildren([
        $builder->createElement('title')->setContent('Bootstrap example'),

        $builder->createElement('link')->setAttributes([
            'href' => 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css',
            'rel' => 'stylesheet',
            'integrity' => 'sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2',
            'crossorigin' => 'anonymous'
        ]),
    ]),

    $builder->createElement('body')->setChildren([

        $builder->createElement('nav')->setAttributes([
            'class' => 'navbar navbar-expand-lg navbar-dark bg-dark'
        ])->setChildren([
            $builder->createElement('div')->setAttributes([
                'class' => 'container'
            ])->setChildren([
                $builder->createElement('a')->setAttributes([
                    'class' => 'navbar-brand',
                    'href' => '#'
                ])->setContent('Navbar'),

                $builder->createElement('button')->setAttributes([
                    'class' => 'navbar-toggler',
                    'type' => 'button',
                    'data-toggle' => 'collapse',
                    'data-target' => '#nav-collapse',
                    'aria-controls' => 'nav-collapse',
                    'aria-expanded' => 'false',
                    'aria-label' => 'Toggle Navigation'
                ])->setChildren([
                    $builder->createElement('span')->setAttributes([
                        'class' => 'navbar-toggler-icon'
                    ])
                ]),

                $builder->createElement('div')->setAttributes([
                    'class' => 'collapse navbar-collapse',
                    'id' => 'nav-collapse'
                ])->setChildren([

                    $builder->createElement('ul')->setAttributes([
                        'class' => 'navbar-nav mr-auto'
                    ])->setChildren([

                        $builder->createElement('li')->setAttributes([
                            'class' => 'nav-item active'
                        ])->setChildren([
                            $builder->createElement('a')->setAttributes([
                                'class' => 'nav-link',
                                'href' => '#'
                            ])->setContent('Home')
                        ]),

                        $builder->createElement('li')->setAttributes([
                            'class' => 'nav-item'
                        ])->setChildren([
                            $builder->createElement('a')->setAttributes([
                                'class' => 'nav-link',
                                'href' => '#'
                            ])->setContent('About')
                        ]),

                        $builder->createElement('li')->setAttributes([
                            'class' => 'nav-item'
                        ])->setChildren([
                            $builder->createElement('a')->setAttributes([
                                'class' => 'nav-link',
                                'href' => '#'
                            ])->setContent('Contact')
                        ]),

                    ]),

                ]),

                $builder->createElement('form')->setAttributes([
                    'class' => 'form-inline my-2 my-lg-0'
                ])->setChildren([

                    $builder->createElement('input')->setAttributes([
                        'class' => 'form-control mr-sm-2',
                        'type' => 'search',
                        'placeholder' => 'Search',
                        'aria-label' => 'Search'
                    ]),

                    $builder->createElement('button')->setAttributes([
                        'class' => 'btn btn-primary my-2 my-sm-0',
                        'type' => 'submit'
                    ])->setContent('Search')

                ]),
            ])
        ]),


        $builder->createElement('div')->setAttributes([
            'class' => 'container my-5'
        ])->setChildren([
            $builder->createElement('div')->setAttributes([
                'class' => 'jumbotron'
            ])->setChildren([

                $builder->createElement('h1')->setAttributes([
                    'class' => 'display-4'
                ])->setContent('Hello, world!'),

                $builder->createElement('p')->setAttributes([
                    'class' => 'lead'
                ])->setContent('This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.'),

                $builder->createElement('hr')->setAttributes([
                    'class' => 'my-4'
                ]),

                $builder->createElement('p')
                    ->setContent('It uses utility classes for typography and spacing to space content out within the larger container.'),

                $builder->createElement('a')->setAttributes([
                    'class' => 'btn btn-primary btn-lg',
                    'href' => '#',
                    'role' => 'button'
                ])->setContent('Learn more'),

            ]),
        ]),

        $builder->createElement('div')->setAttributes([
            'class' => 'container'
        ])->setChildren([
            $builder->createElement('div')->setAttributes([
                'class' => 'row'
            ])->setChildren([

                $builder->createElement('div')->setAttributes([
                    'class' => 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'
                ])->setChildren([
                    $builder->createElement('h2')->setContent('Example heading'),
                    $builder->createElement('p')->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porta a metus et porttitor. Aliquam erat volutpat. Donec ac porttitor dolor.'),
                    $builder->createElement('a')->setAttributes([
                        'class' => 'btn btn-primary'
                    ])->setContent('Learn more')
                ]),

                $builder->createElement('div')->setAttributes([
                    'class' => 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'
                ])->setChildren([
                    $builder->createElement('h2')->setContent('Example heading'),
                    $builder->createElement('p')->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porta a metus et porttitor. Aliquam erat volutpat. Donec ac porttitor dolor.'),
                    $builder->createElement('a')->setAttributes([
                        'class' => 'btn btn-primary'
                    ])->setContent('Learn more')
                ]),

                $builder->createElement('div')->setAttributes([
                    'class' => 'col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'
                ])->setChildren([
                    $builder->createElement('h2')->setContent('Example heading'),
                    $builder->createElement('p')->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porta a metus et porttitor. Aliquam erat volutpat. Donec ac porttitor dolor.'),
                    $builder->createElement('a')->setAttributes([
                        'class' => 'btn btn-primary'
                    ])->setContent('Learn more')
                ]),

            ])
        ]),

        $builder->createElement('div')->setAttributes([
            'class' => 'container'
        ])->setChildren([

            $builder->createElement('hr'),
            $builder->createElement('p')->setAttributes([
                'class' => 'text-muted'
            ])->setContent('&copy; 2020 &mdash; Your Company')

        ]),

        $builder->createElement('script')->setAttributes([
            'src' => 'https://code.jquery.com/jquery-3.5.1.slim.min.js',
            'integrity' => 'sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj',
            'crossorigin' => 'anonymous',
        ]),

        $builder->createElement('script')->setAttributes([
            'src' => 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js',
            'integrity' => 'sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx',
            'crossorigin' => 'anonymous',
        ]),

    ]),

]);

$builder->render();