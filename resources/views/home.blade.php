<?php

    $frameworks = [
        'Laravel',
        'Symfony',
        'CodeIgniter',
        'CakePHP',
        'Zend Framework',
        'Yii Framework',
        'Aura',
        'Phalcon Framework'
    ];

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
        <h1>This is my first page with Laravel</h1>

        <div>
            <p>There are many php frameworks:</p>
            <ul>
                @foreach ($frameworks as $framework)
                    <li>{{ $framework }}</li>
                @endforeach
            </ul>
            <p>But Laravel is the best.</p>
        </div>
    </body>
</html>
