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
        {{-- <link rel="stylesheet" href="{{ asset('dist/bootstrap-md-5 p-sm-3.0.0-beta1-dist/css/bootstrap.min.css') }}"> --}}
        {{-- App Core CSS --}}
        <link rel="stylesheet" href="{{ asset('css/jagsconnect.min.css') }}">
        <!-- Owl-Carousel -->
        <link rel="stylesheet" href="{{ asset('dist/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
        {{-- Bootstrap Icons --}}
        <link rel="stylesheet" href="{{ asset('dist/bootstrap-icons-1.2.2/font/bootstrap-icons.css') }}">
        {{-- App Font Style --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Source+Serif+Pro:wght@600&display=swap" rel="stylesheet">
        {{-- Font Awesome --}}
        <script src="https://kit.fontawesome.com/0fdb1beb57.js" crossorigin="anonymous"></script>
        {{-- AOS --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        {{-- AnimateCSS --}}

    </head>
    <body>
        {{-- Menu --}}
        <div class="app-menu bg-white shadow-sm">
            <div class="container">
                <nav class="nav align-items-center justify-content-between">
                    <img src="{{ asset('img/app/logo.png') }}" height="120" width="120" class="mt-2" alt="">
                    <i class="bi bi-x fa-2x cursor toggle-menu" title="Close menu"></i>
                </nav>
                <div class="row align-items-end">
                    <div class="col-12 col-md-6 order-md-2">
                        <a href="#our-work" class="text-dark">
                            <h1>What we do</h1>
                        </a>
                        <a href="#about-us" class="text-dark">
                            <h1>About Us</h1>
                        </a>
                        <a href="#news" class="text-dark">
                            <h1>News / Events</h1>
                        </a>
                        <a href="#resources" class="text-dark">
                            <h1>Resources</h1>
                        </a>
                        <a href="#contact-us" class="text-dark">
                            <h1>Contact Us</h1>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 order-md-1">
                        <div class="row align-items-end">
                            <div class="col-12 col-md-6">
                                <div class="d-flex flex-column">
                                    <a href="#contact-us" class="text-sm text-underline font-weight-bold text-dark">
                                        <small>Contact Us</small>
                                    </a>
                                    <a href="#faqs" class="text-sm text-underline font-weight-bold text-dark">
                                        <small>FAQs</small>
                                    </a>
                                    <a href="#donate" class="text-sm text-underline font-weight-bold text-dark">
                                        <small>Donate</small>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center my-2">
                                    <a href="" class="text-dark bordered-icon">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="" class="mx-2 text-dark bordered-icon mx-3">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="" class="text-dark bordered-icon">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="text-sm text-justify">
                                    <small>
                                        We exist to boldly create a united movement to end youth violence and lead a better world.
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Menu --}}

        {{-- Scroll Indicator --}}
        <div class="header d-none">
            <div class="progress-container">
              <div class="progress-bar" id="myBar"></div>
            </div>
        </div>  
        {{-- /.Scroll Indicator --}}        

        <div class="content-wrapper">
            {{-- Home Page --}}
            <div href="#homepage" class="border-bottom">
                {{-- First Page Section --}}
                <section class="bg-white first-section mb-sm-0">
                    <div class="container pb-5 mb-sm-0">
                        <div class="content">
                            {{-- Nav --}}
                            <nav class="nav justify-content-between align-items-center main-nav">
                                <a class="navbar-brand nav-link active" aria-current="page" href="#">
                                    <img src="{{ asset('img/app/logo.PNG') }}" height="120" width="120" class="d-inline-block align-top nav-logo" alt="">
                                </a>
                                <ul class="nav align-items-center justify-content-end nav-list">
                                    <li class="nav-item mr-3">
                                        <a class="nav-link toggle-menu align-items-center text-sm text-dark" href="#">
                                            <i class="fa fa-bars mr-2"></i> <span>Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="button" class="btn btn-dark btn-sm px-3 text-sm rounded-0" href="#">Members</a>
                                    </li>
                                </ul>
                            </nav>
                            {{-- /.Nav --}}

                            <div class="row justify-content-center py-sm-3 py-md-3 py-xl-5">
                                <div class="col-12 col-xl-6 py-sm-3 py-md-3 py-xl-5 text-sm-center">
                                    <h1>
                                        We lead a powerful community towards safer and more promising lives.
                                    </h1>
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis inventore praesentium veritatis itaque officia, blanditiis repellat aspernatur deleniti minus corrupti!
                                    </p>
                                    <div class="d-flex justify-content-center py-4">
                                        <a href="#services" role="button" class="btn btn-dark btn-lg px-5 oval-btn">About us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.First Page Section --}}

                {{-- Partners Section --}}
                <section class="bg-light py-sm-3 py-md-3 py-xl-5">
                    <div class="container my-sm-0">
                        <div class="row justify-content-md-around justify-content-sm-center">
                            <div class="col-12 col-xl-3 text-sm-center">
                                <h1 class="lead-2x">Our Partners</h1>
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dignissimos odit, accusamus nobis praesentium nesciunt autem aperiam vel inventore tempora!
                                </p>
                            </div>
                            <div class="col-12 col-xl-9">
                                <div class="d-grid grid-xl-3 grid-g-1">
                                    @for ($i = 0; $i < 9; $i++)
                                        <img src="{{ asset('img/app/logo.png') }}" alt="" class="grid-img" height="150" width="200">
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center py-sm-3 py-md-3 py-xl-5">
                            <div class="col-12 col-xl-9 text-center">
                                <h6 class="lead-2x">
                                    Stats help about how JAGS help. 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, non.
                                </h6>
                                <h1 class="my-md-5 my-sm-5 lead-2x">
                                    Stats help about how JAGS help. 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, non.
                                </h1>
                                <h1 class="lead-2x">
                                    Stats help about how JAGS help. 
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, non.
                                </h1>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.Partners Section --}}

                {{-- Services Section --}}
                <section class="bg-white py-sm-3 py-md-3 py-xl-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-xl-3">
                                <h6 class="lead-2x">Our Services</h6>
                            </div>
                            <div class="col-12 col-xl-9">
                                <div class="d-block">
                                    <h1 class="text-capitalize mb-0">Online support material</h1>
                                    <a href="#" class="text-dark text-sm">
                                        Find out more <i class="bi bi-chevron-right ml-2"></i>
                                    </a>
                                </div>
                                <div class="d-block my-4">
                                    <h1 class="text-capitalize mb-0">Community Forum</h1>
                                    <a href="#" class="text-dark text-sm">
                                        Find out more <i class="bi bi-chevron-right ml-2"></i>
                                    </a>
                                </div>
                                <div class="d-block mb-4">
                                    <h1 class="text-capitalize mb-0">F2F consultations</h1>
                                    <a href="#" class="text-dark text-sm">
                                        Find out more <i class="bi bi-chevron-right ml-2"></i>
                                    </a>
                                </div>
                                <div class="d-block mb-4">
                                    <h1 class="text-capitalize mb-0">Community programmes</h1>
                                    <a href="#" class="text-dark text-sm">
                                        Find out more <i class="bi bi-chevron-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.Services Section --}}

                {{-- Stories --}}
                <section class="bg-light opening-section py-sm-3 py-md-3 py-xl-5 w-100">
                    <img src="{{ asset('img/app/opening.png') }}" alt="" id="right-opening" class="door-opening">
                    <img src="{{ asset('img/app/opening.png') }}" alt="" id="left-opening" class="door-opening">
                    <img src="{{ asset('img/app/oval.png') }}" alt="" id="left-leaf" class="leaf">
                    <img src="{{ asset('img/app/oval.png') }}" alt="" id="right-leaf" class="leaf">
                    <div class="container">
                        <div class="row justify-content-center py-sm-3 py-md-3 py-xl-2">
                            <div class="col-12 col-xl-5 text-center py-sm-3 py-md-3 py-xl-2">
                                <h1 class="text-dark">Follow our stories and stand with us.</h1>
                                <div class="d-flex justify-content-center py-4">
                                    <a href="#" role="button" class="btn btn-outline-dark btn-lg px-5 oval-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.Stories --}}

                {{-- Upcoming Events --}}
                <section class="bg-white upcoming-events py-sm-3 py-md-3 py-xl-5">
                    <div class="container py-sm-3 py-md-3 py-xl-5">
                        <div class="row justify-content-sm-center">
                            <div class="col-12 col-xl-3 text-sm-center">
                                <h6 class="lead-2x text-dark heading">Upcoming events</h6>
                                <p class="text-sm text-justify">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur totam autem similique reprehenderit magnam enim delectus necessitatibus maiores maxime molestias.
                                </p>
                            </div>
                            <div class="col-12 col-xl-9 text-sm-center justify-content-sm-center">
                                {{-- Events Carousel --}}
                                <div class="owl-carousel owl-theme w-100">
                                    <div class="item">
                                        <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" alt="">
                                    </div>
                                </div>
                                {{-- /.Events Carousel --}}
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.Upcoming Events --}}
            </div>
            {{-- / Home Page --}}

            {{-- What We Do Page --}}
            <div href="#what-we-do" class="border-bottom">
                {{-- First Page Section --}}
                <section class="bg-light first-section">
                    <div class="container pb-5">
                        <div class="content">
                            {{-- Nav --}}
                            <nav class="nav justify-content-between align-items-center main-nav">
                                <a class="navbar-brand nav-link active" aria-current="page" href="#">
                                    <img src="{{ asset('img/app/logo.PNG') }}" height="120" width="120" class="d-inline-block align-top nav-logo" alt="">
                                </a>
                                <ul class="nav align-items-center justify-content-end nav-list">
                                    <li class="nav-item mr-3">
                                        <a class="nav-link toggle-menu align-items-center text-sm text-dark" href="#">
                                            <i class="fa fa-bars mr-2"></i> <span>Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="button" class="btn btn-dark btn-sm px-3 text-sm rounded-0" href="#">Members</a>
                                    </li>
                                </ul>
                            </nav>
                            {{-- /.Nav --}}

                            <div class="row justify-content-center py-sm-3 py-md-3 py-xl-5">
                                <div class="col-12 col-xl-6 text-sm-center py-sm-3 py-md-3 py-xl-5">
                                    <h1>
                                        We deliver the resources you need to identify and intervene in youth violence.
                                    </h1>
                                    <p class="text-sm">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis inventore praesentium veritatis itaque officia, blanditiis repellat aspernatur deleniti minus corrupti!
                                    </p>
                                    <div class="d-flex justify-content-center py-4">
                                        <a href="#services" role="button" class="btn btn-dark btn-lg px-5 oval-btn">Scroll for services</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-xl-between">
                                <div class="col-12 col-xl-4">
                                    <h1>Online Support Material</h1>
                                </div>
                                <div class="col-12 col-xl-8">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="story-card mb-sm-5">
                                                <img src="{{ asset('img/app/placeholder-img-1.PNG') }}" height="200" class="w-100" alt="">
                                                <div class="d-block">
                                                    <p class="text-sm">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsa quos assumenda!
                                                    </p>
                                                    <small class="text-sm font-weight-bold">
                                                        By Author
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="story-card mb-sm-5">
                                                <img src="{{ asset('img/app/placeholder-img-1.PNG') }}" height="200" class="w-100" alt="">
                                                <div class="d-block">
                                                    <p class="text-sm">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsa quos assumenda!
                                                    </p>
                                                    <small class="text-sm font-weight-bold">
                                                        By Author
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-md-5 my-sm-5">
                                        <div class="col-12">
                                            <div class="story-card mb-sm-5">
                                                <img src="{{ asset('img/app/placeholder-img-1.PNG') }}" height="300" class="w-100" alt="">
                                                <div class="d-block">
                                                    <p class="text-sm">
                                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi facilis eos, magnam hic fugit deserunt aliquam saepe distinctio aut rerum culpa consequatur, omnis id, error officiis impedit eum alias ab debitis assumenda fuga dolorum quod? Voluptatum facilis sint quae voluptates?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-xl-start justify-content-sm-center py-lg-4">
                                                <a href="#discover" role="button" class="btn btn-dark btn-lg px-5 oval-btn">Discover more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.First Page Section --}}

                {{-- Second Section --}}
                <section class="bg-white w-100">
                    <div class="container">
                        <div class="row justify-content-center py-2">
                            <div class="col-12 col-xl-7 text-sm-center py-sm-3 py-md-3 py-xl-5">
                                <h1>
                                    A forum for parents to connect 24/7 to chat, 
                                    share expreiences and share learnings.
                                </h1>
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis inventore praesentium veritatis itaque officia, blanditiis repellat aspernatur deleniti minus corrupti!
                                </p>
                                <div class="d-flex justify-content-center py-4">
                                    <a href="#services" role="button" class="btn btn-dark btn-lg px-5 oval-btn">Join now</a>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 content-box-section">
                            <div class="bg-dark content-box content-box-1">
                                <div class="p-md-5 p-sm-3 text-light w-100">
                                    <h1>F2F Consultations</h1>
                                    <p class="text-sm">
                                        <small>
                                            Consultations based on listening to needs and carers of at-risk
                                            youth, identifying areas of need eg. mental health, safety, etcl and connecting with JAGS.
                                        </small>
                                    </p>
                                    <p class="text-sm">
                                        <small>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, deleniti cum natus mollitia fuga asperiores non placeat suscipit quam assumenda veniam amet esse quasi illo vitae exercitationem numquam impedit. Quidem?
                                        </small>
                                    </p>
                                    <div class="d-flex justify-content-xl-start my-2">
                                        <a href="#" class="btn btn-link text-light">
                                            Enquire <i class="bi bi-chevron-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-secondary content-box content-box-2">
                                <div class="p-md-5 p-sm-3 text-light w-100">
                                    <h1>Community Programmes</h1>
                                    <p class="text-sm">
                                        <small>
                                            Targeted workshops on prominent current issues impacting the 
                                            community and available support systems, packaging the curriculum for the 
                                            digital community.
                                        </small>
                                    </p>
                                    <p class="text-sm">
                                        <small>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, deleniti cum natus mollitia fuga asperiores non placeat suscipit quam assumenda veniam amet esse quasi illo vitae exercitationem numquam impedit. Quidem?
                                        </small>
                                    </p>

                                    <div class="d-flex justify-content-xl-start my-2">
                                        <a href="#" class="btn btn-link text-light">
                                            Find events <i class="bi bi-chevron-right ml-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center" id="pillar-section">
                            <div class="col-12 col-xl-6 py-sm-3 py-md-3 py-xl-5 text-center">
                                <h1>
                                    How will we measure our success?
                                </h1>
                            </div>
                        </div>
                        <div class="row justify-content-md-around justify-content-sm-center">
                            <div class="col-12 col-xl-4 text-sm-center">
                                <h6>Pillar One</h6>
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis inventore praesentium veritatis itaque officia, blanditiis repellat aspernatur deleniti minus corrupti!
                                </p>
                            </div>
                            <div class="col-12 col-xl-4 text-sm-center">
                                <h6>Pillar Two</h6>
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis inventore praesentium veritatis itaque officia, blanditiis repellat aspernatur deleniti minus corrupti!
                                </p>
                            </div>
                            <div class="col-12 col-xl-4 text-sm-center">
                                <h6>Pillar Three</h6>
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis inventore praesentium veritatis itaque officia, blanditiis repellat aspernatur deleniti minus corrupti!
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.Second Section --}}
            </div>
            {{-- /.What We Do Page --}}

            {{-- About Us Page --}}
            <div href="#about-us" class="border-bottom">
                {{-- First Page Section --}}
                <section class="bg-light first-section">
                    <div class="container pb-5">
                        <img src="{{ asset('img/app/oval.png') }}" class="oval" alt="">
                        <div class="content">
                            {{-- Nav --}}
                            <nav class="nav justify-content-between align-items-center main-nav">
                                <a class="navbar-brand nav-link active" aria-current="page" href="#">
                                    <img src="{{ asset('img/app/logo.PNG') }}" height="120" width="120" class="d-inline-block align-top nav-logo" alt="">
                                </a>
                                <ul class="nav align-items-center justify-content-end nav-list">
                                    <li class="nav-item mr-3">
                                        <a class="nav-link toggle-menu align-items-center text-sm text-dark" href="#">
                                            <i class="fa fa-bars mr-2"></i> <span>Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="button" class="btn btn-dark btn-sm px-3 text-sm rounded-0" href="#">Members</a>
                                    </li>
                                </ul>
                            </nav>
                            {{-- /.Nav --}}

                            {{-- Hero Content --}}
                            <h6 class="hero lead-2x my-md-5 my-sm-5 w-lg-75 w-sm-100 text-sm-center">
                                We believe in connecting and 
                                empowering parents and careers to 
                                forge a powerful and passionate 
                                movement leading our children to safer 
                                living.
                            </h6>
                            {{-- /.Hero Content --}}

                            {{-- Founder Section --}}
                            <div class="d-grid align-items-center app-media-1">
                                <img src="{{ asset('img/app/placeholder-img-1.png') }}" height="250" alt="" class="rounded-0 w-100">
                                <div class="d-block">
                                    <h6 class="lead-2x">Meet our Founder</h6>
                                    <p class="text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos sunt sint, eum doloremque maxime itaque inventore earum voluptate, voluptatum a incidunt fuga obcaecati assumenda adipisci reiciendis placeat illo. Quae eum sapiente neque culpa ipsum sit quod perferendis aperiam, quibusdam eius!</p>
                                </div>
                            </div>
                            {{-- /.Founder Section --}}
                        </div>
                    </div>
                </section>
                {{-- /.First Page Section --}}

                {{-- Second Page Section --}}
                <section class="bg-white second-section">
                    <div class="container">
                        <div class="d-grid app-media-2">
                            <div class="d-block">
                                <h6 class="lead-2x">Meet the Jags Team</h6>
                                <p class="text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos sunt sint, eum doloremque maxime itaque inventore earum voluptate, voluptatum a incidunt fuga obcaecati assumenda adipisci reiciendis placeat illo. Quae eum sapiente neque culpa ipsum sit quod perferendis aperiam, quibusdam eius!</p>
                            </div>
                            <img src="{{ asset('img/app/placeholder-img-2.png') }}" height="250" alt="" class="rounded-0 w-100">
                        </div>
                        <div class="text-center">
                            <p class="mt-md-5 mt-sm-5">Our Values</p>
                            <h6 class="lead-2x">We create space.</h6>
                            <div class="row justify-content-center w-100">
                                <p class="text-sm w-lg-50 w-sm-100">
                                    We hold space for voice and perspectives to come together 
                                    through love and support. We invite dialogue and collaboration
                                    to build change within.
                                </p>
                            </div>
                            <div class="row justify-content-center my-md-5 my-sm-5 w-100">
                                <h6 class="lead-2x">We choose to contribute.</h6>
                                <p class="text-sm w-lg-50 w-sm-100">
                                    We take pride in the way we contribute to our community.
                                    We require it of others and of ourselves. We're here to prevent violence.
                                </p>
                            </div>
                            <div class="row justify-content-center w-100 mb-5">
                                <h6 class="lead-2x">We empower change.</h6>
                                <p class="text-sm w-lg-50 w-sm-100">
                                    We believe that change is not an end goal, it is a constant 
                                    action needed to build momentum. We create a circular motion of change 
                                    to which
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.Second Page Section --}}

                {{-- Third Section --}}
                <section class="bg-light">
                    <div class="container">
                        <h6 class="lead-2x py-sm-3 py-md-3 py-xl-5 text-sm-center">Our Community Stories</h6>
                        <div class="row mb-5">
                            <div class="col-12 col-md-6">
                                {{-- Story Card --}}
                                <div class="row story-card mb-sm-5">
                                    <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" class="col-12 col-xl-5 h-auto" alt="">
                                    <div class="col-12 col-xl-7 info-column">
                                        <h6 class="font-600 text-capitalize ml-2">with zainab</h6>
                                        <div class="stories-content">
                                            <p class="text-dark text-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium totam quod repellendus ea, mollitia unde.
                                            </p>
                                            <a href="#" class="text-sm text-dark">
                                                <strong class="text-sm">
                                                    Read more <i class="bi bi-chevron-right ml-2"></i>
                                                </strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- /.Story Card --}}
                            </div>

                            <div class="col-12 col-md-6">
                                {{-- Story Card --}}
                                <div class="row story-card mb-sm-5">
                                    <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" class="col-12 col-xl-5 h-auto" alt="">
                                    <div class="col-12 col-xl-7 info-column">
                                        <h6 class="font-600 text-capitalize ml-2">with zainab</h6>
                                        <div class="stories-content">
                                            <p class="text-dark text-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium totam quod repellendus ea, mollitia unde.
                                            </p>
                                            <a href="#" class="text-sm text-dark">
                                                <strong class="text-sm">
                                                    Read more <i class="bi bi-chevron-right ml-2"></i>
                                                </strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- /.Story Card --}}
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6">
                                <h6 class="lead-2x">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste facere numquam repudiandae enim.
                                </h6>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="story-card mb-sm-5">
                                            <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="150" class="w-100" alt="">
                                            <div class="d-block">
                                                <h6 class="font-weight-bold text-dark text-capitalize mt-1">with our sister</h6>
                                                <p class="text-sm">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsa quos assumenda!
                                                </p>
                                                <a href="" class="text-dark text-sm">
                                                    <strong class="text-sm">
                                                        Read more <i class="bi bi-chevron-right ml-2"></i>
                                                    </strong>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="story-card mb-sm-5">
                                            <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="150" class="w-100" alt="">
                                            <div class="d-block">
                                                <h6 class="font-weight-bold text-dark text-capitalize mt-1">with young women</h6>
                                                <p class="text-sm">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsa quos assumenda!
                                                </p>
                                                <a href="" class="text-dark text-sm">
                                                    <strong class="text-sm">
                                                        Read more <i class="bi bi-chevron-right ml-2"></i>
                                                    </strong>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start py-sm-3 py-md-3 py-xl-5">
                            <div class="col-12 col-md-6 col-xl-9">
                                {{-- Story Card --}}
                                <div class="row story-card mb-sm-5">
                                    <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" class="col-12 col-xl-5 h-auto" alt="">
                                    <div class="col-12 col-xl-7 info-column">
                                        <h6 class="font-600 text-capitalize ml-2">with zainab</h6>
                                        <div class="stories-content">
                                            <p class="text-dark text-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium totam quod repellendus ea, mollitia unde.
                                            </p>
                                            <a href="#" class="text-sm text-dark">
                                                <strong class="text-sm">
                                                    Read more <i class="bi bi-chevron-right ml-2"></i>
                                                </strong>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- /.Story Card --}}
                            </div>
                            <div class="col-12 col-md-6 col-xl-3">
                                <div class="story-card mb-sm-5">
                                    <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" class="w-100" alt="">
                                    <div class="d-block">
                                        <h6 class="font-weight-bold text-dark text-capitalize mt-1">with emily</h6>
                                        <p class="text-sm">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsa quos assumenda!
                                        </p>
                                        <a href="" class="text-dark text-sm">
                                            <strong class="text-sm">
                                                Read more <i class="bi bi-chevron-right ml-2"></i>
                                            </strong>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.Third Section --}}
            </div>
            {{-- /.About Us Page --}}

            {{-- News Page --}}
            <div href="#news" class="border-bottom">
                {{-- First Page Section --}}
                <section class="bg-white">
                    <div class="container pb-5">
                        <div class="content">
                            {{-- Nav --}}
                            <nav class="nav justify-content-between align-items-center main-nav">
                                <a class="navbar-brand nav-link active" aria-current="page" href="#">
                                    <img src="{{ asset('img/app/logo.PNG') }}" height="120" width="120" class="d-inline-block align-top nav-logo" alt="">
                                </a>
                                <ul class="nav align-items-center justify-content-end nav-list">
                                    <li class="nav-item mr-3">
                                        <a class="nav-link toggle-menu align-items-center text-sm text-dark" href="#">
                                            <i class="fa fa-bars mr-2"></i> <span>Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="button" class="btn btn-dark btn-sm px-3 text-sm rounded-0" href="#">Members</a>
                                    </li>
                                </ul>
                            </nav>
                            {{-- /.Nav --}}

                            {{-- Subnav --}}
                            <div class="d-flex justify-content-between mt-md-5 mt-sm-5">
                                <div class="d-block">
                                    <h1 class="mb-0">News / Blog</h1>
                                    <h1 class="mt-0">Events</h1>
                                </div>
                                <div class="d-block">
                                    <div class="d-flex flex-column">
                                        <a href="#news" class="text-dark text-sm">News</a>
                                        <a href="#blog" class="text-dark text-sm">Blog Articles</a>
                                        <a href="#events" class="text-dark text-sm">JAGS Events</a>
                                    </div>
                                </div>
                            </div>
                            {{-- /.Subnav --}}

                            <hr>

                            {{-- Articles --}}
                            <div class="row">
                                <div class="col-12 col-xl-6 col-xxl-8">
                                    <div class="row">
                                        {{-- Story Card --}}
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                            <div class="mb-5">
                                                <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" width="250" alt="" class="col-12 col-xl-12 align-self-start">
                                                <div class="col-12 col-xl-12">
                                                    <p class="text-dark text-dark">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium totam quod repellendus ea, mollitia unde.
                                                    </p>
                                                    <small class="text-dark">
                                                        <strong>News - Dec 21, 2000</strong>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /.Story Card --}}

                                        {{-- Story Card --}}
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                            <div class="mb-5">
                                                <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" width="250" alt="" class="col-12 col-xl-12 align-self-start">
                                                <div class="col-12 col-xl-12">
                                                    <p class="text-dark text-dark">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium totam quod repellendus ea, mollitia unde.
                                                    </p>
                                                    <small class="text-dark">
                                                        <strong>News - Dec 21, 2000</strong>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /.Story Card --}}

                                        {{-- Story Card --}}
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                            <div class="mb-5">
                                                <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" width="250" alt="" class="col-12 col-xl-12 align-self-start">
                                                <div class="col-12 col-xl-12">
                                                    <p class="text-dark text-dark">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium totam quod repellendus ea, mollitia unde.
                                                    </p>
                                                    <small class="text-dark">
                                                        <strong>News - Dec 21, 2000</strong>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /.Story Card --}}

                                        {{-- Story Card --}}
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                            <div class="mb-5">
                                                <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" width="250" alt="" class="col-12 col-xl-12 align-self-start">
                                                <div class="col-12 col-xl-12">
                                                    <p class="text-dark text-dark">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium totam quod repellendus ea, mollitia unde.
                                                    </p>
                                                    <small class="text-dark">
                                                        <strong>News - Dec 21, 2000</strong>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /.Story Card --}}

                                        {{-- Story Card --}}
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                            <div class="mb-5">
                                                <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" width="250" alt="" class="col-12 col-xl-12 align-self-start">
                                                <div class="col-12 col-xl-12">
                                                    <p class="text-dark text-dark">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium totam quod repellendus ea, mollitia unde.
                                                    </p>
                                                    <small class="text-dark">
                                                        <strong>News - Dec 21, 2000</strong>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /.Story Card --}}

                                        {{-- Story Card --}}
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-6">
                                            <div class="mb-5">
                                                <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" width="250" alt="" class="col-12 col-xl-12 align-self-start">
                                                <div class="col-12 col-xl-12">
                                                    <p class="text-dark text-dark">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium totam quod repellendus ea, mollitia unde.
                                                    </p>
                                                    <small class="text-dark">
                                                        <strong>News - Dec 21, 2000</strong>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /.Story Card --}}
                                    </div>
                                </div>
                                <div class="col-12 col-xl-6 col-xxl-4">
                                    <div class="row">
                                        {{-- Story Card --}}
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-12">
                                            <div class="d-flex flex-column vertical-card mb-5">
                                                <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" alt="" class="align-self-start w-100 h-100">
                                                <div class="d-flex flex-column">
                                                    <div class="stories-content mt-auto">
                                                        <p class="text-dark text-dark">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium totam quod repellendus ea, mollitia unde.
                                                        </p>
                                                        <small class="text-dark">
                                                            <strong class="text-sm">
                                                                News - December 21, 2020
                                                            </strong>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /.Story Card --}}

                                        {{-- Story Card --}}
                                        <div class="col-12 col-md-6 col-lg-4 col-xl-12">
                                            <div class="d-flex flex-column vertical-card mb-5">
                                                <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" alt="" class="align-self-start w-100 h-100">
                                                <div class="d-flex flex-column">
                                                    <div class="stories-content mt-auto">
                                                        <p class="text-dark text-dark">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium totam quod repellendus ea, mollitia unde.
                                                        </p>
                                                        <small class="text-dark">
                                                            <strong class="text-sm">
                                                                News - December 21, 2020
                                                            </strong>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /.Story Card --}}
                                    </div>
                                </div>
                            </div>
                            {{-- /.Articles --}}

                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <a href="#" class="text-sm text-dark">
                                        <strong>Load more</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.First Page Section --}}
            </div>
            {{-- /.News Page --}}

            {{-- Resources Page --}}
            <div href="#resources" class="border-bottom">
                {{-- First Page Section --}}
                <section class="bg-white first-section">
                    <div class="container">
                        <div class="content">
                            {{-- Nav --}}
                            <nav class="nav justify-content-between align-items-center main-nav">
                                <a class="navbar-brand nav-link active" aria-current="page" href="#">
                                    <img src="{{ asset('img/app/logo.PNG') }}" height="120" width="120" class="d-inline-block align-top nav-logo" alt="">
                                </a>
                                <ul class="nav align-items-center justify-content-end nav-list">
                                    <li class="nav-item mr-3">
                                        <a class="nav-link toggle-menu align-items-center text-sm text-dark" href="#">
                                            <i class="fa fa-bars mr-2"></i> <span>Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="button" class="btn btn-dark btn-sm px-3 text-sm rounded-0" href="#">Members</a>
                                    </li>
                                </ul>
                            </nav>
                            {{-- /.Nav --}}

                            <div class="row justify-content-center py-sm-3 py-md-3 py-xl-5">
                                <div class="col-12 col-xl-8 text-sm-center py-sm-3 py-md-3 py-xl-5">
                                    <h1>
                                        A collection of resources. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, perferendis perspiciatis?
                                    </h1>
                                    <p class="text-sm mt-md-5 mt-sm-5">
                                        <small>Browse Topics & Resources</small>
                                    </p>
                                </div>
                            </div>

                            <div class="row justify-content-xl-between">
                                <div class="col-12">
                                    <h1>Self-help guides</h1>
                                </div>
                            </div>
                            <div class="d-grid grid-xl-3 grid-g-2">
                                @for ($i = 0; $i < 6; $i++)
                                    <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="200" class="w-100" alt="">
                                @endfor
                            </div>

                            <div class="row align-items-md-start py-sm-3 py-md-3 pt-xl-5">
                                <div class="col-12 col-md-6">
                                    <h1>Videos</h1>
                                    <p>Topic of video here</p>
                                </div>
                                {{-- Videos --}}
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        {{-- Video Card --}}
                                        <div class="col-12 col-xl-6">
                                            <div class="video-card">
                                                <video type="video/mp4" controls>
                                                    <source src="{{ asset('vids/Professor Lumumba.mp4') }}" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                                <div class="card-text">
                                                    <p class="text-sm">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, sunt.
                                                    </p>
                                                    <p class="text-sm font-weight-bold">
                                                        <small class="text-capitalize">by author</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /.Video Card --}}
                                        
                                        {{-- Video Card --}}
                                        <div class="col-12 col-xl-6">
                                            <div class="video-card">
                                                <video type="video/mp4" controls>
                                                    <source src="{{ asset('vids/Professor Lumumba.mp4') }}" type="video/mp4">
                                                    Sorry, your browser doesn't support embedded videos.
                                                </video>
                                                <div class="card-text">
                                                    <p class="text-sm">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, sunt.
                                                    </p>
                                                    <p class="text-sm font-weight-bold">
                                                        <small class="text-capitalize">by author</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- /.Video Card --}}
                                    </div>
                                </div>
                                {{-- /.Videos --}}
                            </div>

                            <div class="row align-items-md-start py-sm-3 py-md-3 py-xl-5">
                                <div class="col-12 col-md-6">
                                    <p class="font-weight-bold">Topic of video here</p>
                                </div>
                                {{-- Video Card --}}
                                <div class="col-12 col-md-6">
                                    <div class="video-card">
                                        <video type="video/mp4" controls>
                                            <source src="{{ asset('vids/Professor Lumumba.mp4') }}" type="video/mp4">
                                            Sorry, your browser doesn't support embedded videos.
                                        </video>
                                        <div class="card-text">
                                            <p class="text-sm">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, sunt.
                                            </p>
                                            <p class="text-sm font-weight-bold">
                                                <small class="text-capitalize">by author</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{-- /.Video Card --}}
                            </div>

                            {{-- Relevant links --}}
                            <div class="row align-items-md-start py-sm-3 py-md-3 py-xl-5">
                                <div class="col-12 col-md-6">
                                    <h6 class="lead-2x">Relevant links</h6>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-grid grid-xl-2 grid-g-2">
                                        @for ($i = 0; $i < 4; $i++)
                                            <img src="{{ asset('img/app/placeholder-img-2.PNG') }}" height="150" class="w-100" alt="">
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            {{-- /.Relevant links --}}
                        </div>
                    </div>
                </section>
                {{-- /.First Page Section --}}
            </div>
            {{-- /.Resources Page --}}

            {{-- Contact Us Page --}}
            <div href="#contact-us" class="border-bottom">
                {{-- First Page Section --}}
                <section class="bg-white first-section">
                    <div class="container pb-5">
                        <div class="content">
                            {{-- Nav --}}
                            <nav class="nav justify-content-between align-items-center main-nav">
                                <a class="navbar-brand nav-link active" aria-current="page" href="#">
                                    <img src="{{ asset('img/app/logo.PNG') }}" height="120" width="120" class="d-inline-block align-top nav-logo" alt="">
                                </a>
                                <ul class="nav align-items-center justify-content-end nav-list">
                                    <li class="nav-item mr-3">
                                        <a class="nav-link toggle-menu align-items-center text-sm text-dark" href="#">
                                            <i class="fa fa-bars mr-2"></i> <span>Menu</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="button" class="btn btn-dark btn-sm px-3 text-sm rounded-0" href="#">Members</a>
                                    </li>
                                </ul>
                            </nav>
                            {{-- /.Nav --}}

                            <div class="row justify-content-sm-center justify-content-md-start py-sm-3 py-md-3 py-xl-5">
                                <div class="col-12 col-xl-6 text-sm-center py-sm-3 py-md-3 py-xl-5">
                                    <h1>
                                        Need someone to speak to? Call OR text us or 
                                        send us an email and will get back to you immediately.
                                    </h1>
                                    <div class="row align-items-md-center justify-content-md-between">
                                        <div class="col-12 col-md-6">
                                            <p class="text-sm mt-md-5 mt-sm-5 mb-0">
                                                <small>+44 (0) 208 663 5336</small>
                                            </p>
                                            <p class="text-sm mt-0 mb-0">
                                                <small>admin@jagsfoundation.org</small>
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-6 text-left">
                                            <p class="text-sm mt-md-5 mt-sm-5 mb-0">
                                                <small>Follow us on social media</small>
                                            </p>
                                            <div class="d-flex justify-content-sm-center align-items-center">
                                                <a href="" class="text-dark bordered-icon">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                                <a href="" class="mx-2 text-dark bordered-icon mx-3">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="" class="text-dark bordered-icon">
                                                    <i class="fa fa-facebook-f"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.First Page Section --}}

                {{-- Overlapping Boxes --}}
                <section class="container" id="overlapping-section">
                    <div class="bg-dark overlapping-box"></div>
                    <div class="bg-secondary overlapping-box"></div>
                </section>
                {{-- /.Overlapping Boxes --}}

                {{-- Jobs Section --}}
                <section class="bg-white py-sm-3 py-md-3 py-xl-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-xl-3">
                                <h6 class="lead-2x">Join us</h6>
                                <p class="text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, cumque.
                                </p>
                            </div>
                            <div class="col-12 col-xl-9">
                                <div class="d-block">
                                    <h1 class="text-capitalize mb-0">Social Media Exec</h1>
                                    <a href="#" class="text-dark text-sm">
                                        Apply Now <i class="bi bi-chevron-right ml-2"></i>
                                    </a>
                                </div>
                                <div class="d-block my-4">
                                    <h1 class="text-capitalize mb-0">Project Manager</h1>
                                    <a href="#" class="text-dark text-sm">
                                        Apply Now <i class="bi bi-chevron-right ml-2"></i>
                                    </a>
                                </div>
                                <div class="d-block mb-4">
                                    <h1 class="text-capitalize mb-0">Events Coordinator</h1>
                                    <a href="#" class="text-dark text-sm">
                                        Apply Now <i class="bi bi-chevron-right ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.Jobs Section --}}

                {{-- Fourth Section --}}
                <section class="bg-dark fourth-section mt-0 pt-0">
                    <div class="container">
                        <div class="row justify-content-center py-sm-3 py-md-3">
                            <div class="col-12 col-xl-5 text-md-justify text-sm-center py-sm-3 py-md-3">
                                <h1 class="text-light">Stand with us and help us move with action.</h1>
                                <p class="text-sm text-light">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, cupiditate corrupti illo voluptatum sint error voluptatem ipsa quia nesciunt blanditiis!
                                </p>
                                <div class="d-flex justify-content-center py-4">
                                    <a href="#donate" role="button" class="btn btn-light btn-lg px-5 oval-btn">Donate Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.Fourth Section --}}

                {{-- Fifth Section --}}
                <section class="bg-white fifth-section">
                    <div class="container">
                        <div class="row justify-content-sm-center justify-content-md-start align-items-center">
                            <div class="col-12 text-sm-center text-md-center text-xl-start">
                                <img src="{{ asset('img/app/logo.PNG') }}" height="120" width="120" class="my-3" alt="">
                            </div>
                            <div class="col-12 col-xl-6 text-sm-center">
                                <h1>
                                    We exist to boldly create a united movement and to end youth violence 
                                    and lead a better world.
                                </h1>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="d-flex flex-column">
                                            <a href="#our-work" class="text-dark text-capitalize text-sm">What we do</a>
                                            <a href="#about-us" class="text-dark text-capitalize text-sm">about us</a>
                                            <a href="#news" class="text-dark text-capitalize text-sm">News/Events</a>
                                            <a href="#resources" class="text-dark text-capitalize text-sm">resources</a>
                                            <a href="#faqs" class="text-dark text-capitalize text-sm">FAQs</a>
                                            <a href="#forum" class="text-dark text-capitalize text-sm">member forum</a>
                                            <a href="#donate" class="text-dark text-capitalize text-sm">donate</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-8 text-sm-center">
                                        <div class="d-flex flex-column">
                                            <a href="#contact-us" class="text-dark text-capitalize text-sm text-underline mb-2">
                                                <strong>contact us</strong>
                                            </a>
                                            <p class="text-sm font-weight-bold text-dark mb-sm-0">
                                                0208 663 5636
                                            </p>
                                            <p class="text-sm font-weight-bold text-dark my-sm-0">
                                                admin@jagsfoundation.org
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-between align-items-center py-md-3 py-xl-5 w-100">
                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="d-flex justify-content-sm-center align-items-center">
                                            <a href="" class="text-dark bordered-icon">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a href="" class="mx-2 text-dark bordered-icon mx-3">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a href="" class="text-dark bordered-icon">
                                                <i class="fa fa-facebook-f"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-8 text-sm-center">
                                        <p class="text-sm text-dark my-0">
                                            <small>
                                                &copy;<span>{{ date('Y') }}</span>. Terms and Conditions
                                            </small>
                                        </p>
                                        <p class="text-sm text-dark my-0">
                                            <small>
                                                Made with <i class="bi bi-heart-fill text-danger mx-1"></i> by <a href="https://twitter.com/TinaKing92">@TinaKing</a>
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- /.Fifth Section --}}
            </div>
            {{-- /.Contact Us Page --}}
        </div>

        {{-- JQuery --}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="{{ asset('dist/jquery/jquery.min.js') }}"></script>
        {{-- Bootstrap Core JS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="{{ asset('dist/bootstrap-md-5 p-sm-3.0.0-beta1-dist/js/bootstrap.bundle.min.js') }}"></script>
        <!-- OwlCarousel -->
        <script src="{{ asset('dist/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
        {{-- AOS --}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        {{-- App Core JS --}}
        <script src="{{ asset('js/jagsconnect.min.js') }}"></script>
    </body>
</html>