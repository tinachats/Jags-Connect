<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <link rel="stylesheet" href="{{ asset('dist/bootstrap-icons-1.2.2/font/bootstrap-icons.css') }}">
        {{-- App Font Style --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Source+Serif+Pro:wght@600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper bg-light">
            <div class="container">
                <header class="main-header">
                    <nav class="nav align-items-center justify-content-between">
                        <a class="navbar-brand nav-link active" aria-current="page" href="#">
                            <img src="{{ asset('img/app/navbrand.png') }}" alt="" width="120" height="72" class="d-inline-block align-top">
                        </a>
                        <ul class="nav align-items-center justify-content-end">
                            <li class="nav-item mr-3">
                                <a class="nav-link d-flex align-items-center text-sm text-dark" href="#">
                                    <i class="bi bi-list"></i> Menu
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="button" class="btn btn-dark btn-sm px-3 text-sm rounded-0" href="#">Members</a>
                            </li>
                        </ul>
                    </nav>
                </header>
                <div class="row">
                    <div class="col-12 col-xl-8 my-lg-5">
                        <h6 class="lead-2x">
                            We believe in connecting and 
                            empowering parents and careers to 
                            forge a powerful and passionate 
                            movement leading our children to safer 
                            living.
                        </h6>
                    </div>
                </div>
                <div class="d-grid app-media-1">
                    <img src="{{ asset('img/app/placeholder-img-1.png') }}" height="250" alt="" class="rounded-0 w-100">
                    <div class="d-block">
                        <h6 class="lead-2x">Meet our Founder</h6>
                        <p class="text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos sunt sint, eum doloremque maxime itaque inventore earum voluptate, voluptatum a incidunt fuga obcaecati assumenda adipisci reiciendis placeat illo. Quae eum sapiente neque culpa ipsum sit quod perferendis aperiam, quibusdam eius!</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="d-grid app-media-2">
                    <div class="d-block">
                        <h6 class="lead-2x">Meet the Jags Team</h6>
                        <p class="text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos sunt sint, eum doloremque maxime itaque inventore earum voluptate, voluptatum a incidunt fuga obcaecati assumenda adipisci reiciendis placeat illo. Quae eum sapiente neque culpa ipsum sit quod perferendis aperiam, quibusdam eius!</p>
                    </div>
                    <img src="{{ asset('img/app/placeholder-img-2.png') }}" height="250" alt="" class="rounded-0 w-100">
                </div>
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