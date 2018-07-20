<!DOCTYPE html>
<html>
<head>
    @yield('title')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poiret+One|Amatic+SC|Indie+Flower|Lobster|Quicksand|Dosis|Judson" rel="stylesheet">
    

    @yield('css')
    
</head>

<body>

    @include('includes.header')
    <br><br>
    @yield('body')
    <footer>
    </footer>

  
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="/js/post.js"></script>
</body>
</html>
