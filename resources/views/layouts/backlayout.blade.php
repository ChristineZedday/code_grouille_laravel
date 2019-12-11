<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>

<body>

<div class="container">

    <div class="headerback">
        @include('includes.headerback')
    </div>

    <section id='backleft'>
            @include('includes.menuback')
    </section>

    <div id='backright'>
        @yield('content')
    </div>

</div>

<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>
</html>
