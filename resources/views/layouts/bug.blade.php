<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>

<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>


    <div id="content">
            <h1 id='error'>Page not found !!</h1>
    </div>

    <footer>
        @include('includes.footer')
    </footer>

</div>

<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

</body>
</html>
