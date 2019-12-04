<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>

<body>

<div class="container">

    <header class="row">
        @include('includes.headerback')
    </header>

    <section id='backleft'>
            @include('includes.menuback')
    </section>

    <div id="content">
        @yield('content')
    </div>

</div>

<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>
</html>
