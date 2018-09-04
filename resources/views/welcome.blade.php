<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Single Page Application with angilarJS</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body ng-app="ngApp">
    <div class="container">
        <br />
        <br />
        <br />
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="#/!">Home</a></li>
                    <li><a href="#!page-1">Page 1</a></li>
                    <li><a href="#!page-2">Page 2</a></li>
                    <li><a href="#!page-3">Page 3</a></li>
                </ul>
            </div>
        </nav>
        <div ng-view></div>
    </div>
    </body>

    <script>
        var app = angular.module("ngApp", ["ngRoute"]);
        app.config(function($routeProvider) {
            $routeProvider
                .when("/", {
                    templateUrl : "{{URL('/home')}}"
                })
                .when("/page-1", {
                    templateUrl : "{{URL('page-1')}}"
                })
                .when("/page-2", {
                    templateUrl : "{{URL('page-2')}}"
                })
                .when("/page-3", {
                    templateUrl : "{{URL('page-3')}}"
                });
        });
    </script>

</html>
