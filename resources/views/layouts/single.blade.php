<!doctype html  lang="fr">
<html>
    <head>
        @include('includes.head')
    </head>

<body>

<a id='burger'><img class='pict' src='/img/picto/hamburger.png'/></a>

<div id='hiddenheader'>
        @include('includes.header')
</div>

<div class="container">

    <div class='header'>
        @include('includes.header')
    </div>

    <div class='content single'>
         @yield('content')
    </div>

    <footer class='float'>
        @include('includes.footer')
    </footer>

</div>

<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>
</html>
