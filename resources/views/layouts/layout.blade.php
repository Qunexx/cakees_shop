<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.png")}}" type="">

    <title> CakeesShop</title>



    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.scss")}}" />
    <!-- Bootstrap JS and dependencies -->





    <!-- font awesome style -->
    <link href="{{asset("assets/css/font-awesome.min.css")}}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{asset("assets/css/responsive.css")}}" rel="stylesheet" />


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="sub_page">

<div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{route("index")}}">
            <span>
              Торт’ Эль
            </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route("index")}}">Главная</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route("about")}}">О нас</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route("catalog")}}">Каталог</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("contact")}}">Связь с нами</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("delivery")}}">Доставка</a>
                        </li>
                        <!-- Cart icon in the navigation bar -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("cart")}}" id="cart-icon" data-bs-toggle="modal" data-bs-target="#cartModal">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="ht   tp://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
            <g>
                <g>
                    <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                </g>
            </g>
                                    <g>
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                    </g>
        </svg>
                            </a>
                        </li>

                        <!-- Heart icon for favorites -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('favorites') }}" id="favorites-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="bi bi-heart" width="24" height="24">
                                    <path fill-rule="evenodd"
                                          d="M12 4.318a6.24 6.24 0 0 0-8.832 8.832l.086.085L12 20.576l8.746-8.746.086-.085a6.24 6.24 0 0 0-8.832-8.832zM11.293 5.293a4.24 4.24 0 0 1 6 6L12 17.586 6.707 12.293a4.24 4.24 0 0 1 6-6z"
                                    />
                                </svg>
                            </a>
                        </li>

                        <!-- Cart Modal -->
                        <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="cartModalLabel">Корзина товаров</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">

                                        </div>
                                        <div class="total-box">
                                            <h3>Total: $<span id="total-price">213</span></h3>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                        <a href="{{route('order')}}" class="btn btn-primary">Оплата</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            // Example JavaScript to handle quantity changes and remove item
                            function removeItem(itemId) {
                                // Implement the remove item logic here
                            }

                            function updateTotal() {
                                let total = 0;
                                document.querySelectorAll('.quantity-box input').forEach(input => {
                                    const price = parseFloat(input.closest('.detail-box').querySelector('h6').textContent.replace('$', ''));
                                    const quantity = parseInt(input.value);
                                    total += price * quantity;
                                });
                                document.getElementById('total-price').textContent = total.toFixed(2);
                            }

                            document.querySelectorAll('.quantity-box input').forEach(input => {
                                input.addEventListener('change', updateTotal);
                            });

                            updateTotal();
                        </script>
                            </a>
                            <!-- Authentication Links справа -->

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('account') }}">
                                        {{ __('Мой аккаунт') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('order.history') }}">
                                        {{ __('История заказов') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('favorites') }}">
                                        {{ __('Избранные товары') }}
                                    </a>
                                    <form id="account-form" action="{{ route('account') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest

                            </li>
            </ul>
</div>

            </nav>
        </div>
    </header>
</div>
<!-- end header section -->



@yield('content')
@yield('content1')
@yield('content2')
@yield('content3')

@yield('content4')

@yield('content5')

<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-col">
                <div class="footer_contact">
                    <h4>
                        Reach at..
                    </h4>
                    <div class="contact_link_box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                  Location
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                  Call +01 1234567890
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                  demo@gmail.com
                </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="footer_detail">
                    <a href="" class="footer-logo">
                        Торт’ Эль
                    </a>
                    <p>
                        Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                    </p>
                    <div class="footer_social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-col">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-info">
            <p>
                &copy; <span id="displayYear"></span> Design was taken from
                <a href="https://html.design/">Free Html Templates</a>
                and updated by Qunexx
            </p>
        </div>
    </div>
</footer>
<!-- footer section -->
<!-- jQery -->
<script src="{{asset("asset/js/jquery-3.4.1.min.js")}}"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- bootstrap js -->
<script src="{{asset("/asset/js/bootstrap.js")}}"></script>
<!-- owl slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<!-- custom js -->
<script src="{{asset("asset/js/custom.js")}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<!-- End Google Map -->






</body>

</html>
