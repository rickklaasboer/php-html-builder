<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use HtmlBuilder\HtmlBuilder;

$builder = new HtmlBuilder();

$builder->createCollection('html')->setChildren([

    $builder->createElement('head')->setChildren([
        $builder->createElement('title')->setContent('Building HTML with PHP is awesome!'),
    ]),

    $builder->createElement('body')->setChildren([

        $builder->createElement('h1')
            ->setContent('Hello there')
            ->setAttributes([
                'id' => 'heading1',
                'class' => 'eggs bacon'
            ]),

        $builder->createElement('h2')
            ->setContent('General kenobi.')
            ->setAttributes([
                'id' => 'heading2',
                'class' => 'bacon'
            ]),

        $builder->createElement('p')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ex arcu, rhoncus in purus ac, dapibus egestas mi.')
            ->setAttributes([
                'id' => 'paragraph',
                'class' => 'eggs-benedict'
            ]),

        $builder->createElement('ul')->setChildren([
            $builder->createElement('li')->setContent('Item 1'),
            $builder->createElement('li')->setContent('Item 2'),
            $builder->createElement('li')->setContent('Item 3'),
            $builder->createElement('li')->setContent('Item 4'),
        ]),

        $builder->createElement('form')
            ->setAttributes([
                'method' => 'GET',
                'action' => '/',
            ])
            ->setChildren([
                $builder->createElement('label')
                    ->setAttributes([
                        'for' => 'name'
                    ])
                    ->setContent('Name'),
                $builder->createElement('br'),
                $builder->createElement('input')
                    ->setAttributes([
                        'id' => 'name',
                        'name' => 'name',
                        'type' => 'text',
                    ]),

                $builder->createElement('button')
                    ->setAttributes([
                        'type' => 'submit',
                    ])
                    ->setContent('Verzenden')
            ]),
    ]),
]);

$builder->render();