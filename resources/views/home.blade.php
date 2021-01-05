<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="Tinashe. M. Chaterera">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title ?? config('app.name', 'Jags Connect')}}</title>
        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('img/app/logo.png') }}" type="image/x-icon">
        {{-- Bootstrap Core CSS --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        {{-- App Core CSS --}}
        <link rel="stylesheet" href="{{ asset('css/jagsconnect.min.css') }}">
        {{-- Bootstrap Icons --}}
        <link rel="stylesheet" href="{{ asset('dist/bootstrap-icons-1.2.2/fonts/bootstrap-icons.css') }}">
        {{-- App Font Style --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Source+Serif+Pro:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <header class="main-header"></header>
            <div class="content">
                <a href="#" class="text-capitalize text-dark page-links">
                    <h1>What We do</h1>
                </a>
                <a href="#" class="text-capitalize text-dark page-links">
                    <h1>About Us</h1>
                </a>
                <a href="#" class="text-capitalize text-dark page-links">
                    <h1>News/Events</h1>
                </a>
                <a href="#" class="text-capitalize text-dark page-links">
                    <h1>Resources</h1>
                </a>
                <a href="#" class="text-capitalize text-dark page-links">
                    <h1>contact us</h1>
                </a>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro, adipisci et? Mollitia, commodi eius pariatur labore dolores non corrupti quae.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, ipsa.</p>
            </div>
            <footer class="footer"></footer>
        </div>
        {{-- JQuery --}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        {{-- Bootstrap Core JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        {{-- App Core JS --}}
        <script src="{{ asset('js/jagsconnect.min.js') }}"></script>
    </body>
</html>