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

        <!-- link to bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
    </head>
    <body>

        <header>
            <div class="container">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">

                        <a class="navbar-brand" href="{{route('laravel')}}">Laravel</a>
                        <a class="navbar-brand" href="{{route('symfony')}}">Symfony</a>
                        <a class="navbar-brand" href="{{route('codeIgniter')}}">CodeIgniter</a>
                        <a class="navbar-brand" href="{{route('cakePHP')}}">CakePHP</a>
                        <a class="navbar-brand" href="{{route('zend-framework')}}">Zend Framework</a>
                        <a class="navbar-brand" href="{{route('yii-framework')}}">Yii Framework</a>
                        <a class="navbar-brand" href="{{route('aura')}}">Aura</a>
                        <a class="navbar-brand" href="{{route('phalcon-framework')}}">Phalcon Framework</a>

                    </div>
                </nav>
            </div>
        </header>

        <main>
            <div class="container">
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
            </div>    
        </main>
    </body>
</html>
