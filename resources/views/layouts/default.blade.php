<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>

<body>

<a id='burger'><img class='pict' src='./img/picto/hamburger.png'/></a>

<div id='hiddenheader'>
        @include('includes.header')
</div>

<div class='background'>
    @yield('background')
</div>


<div class="container">

    <header>
        @include('includes.header')
    </header>

    <div class='content'>
     @yield('content')
    </div>

    <footer>
        @include('includes.footer')
    </footer>

</div>

<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>
</html>
