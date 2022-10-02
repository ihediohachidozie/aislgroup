<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <img src="" alt="" sizes="" srcset="">
        <img src="" alt="" srcset="">
        <h1 class="logo me-auto"><a href="index.html">
                <img src="assets/img/logo_s.png" alt="" width="50" height="100">
            </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>


                @if ($tag == 'Home')
                    <li><a href='/' class="active">Home</a></li>
                @else
                    <li><a href="/">Home</a></li>
                @endif

                @if ($tag == 'About Us')
                    <li><a href="/about" class="active">About</a></li>
                @else
                    <a href="/about">About </a>
                @endif

                @if ($tag == 'Services')
                    <li><a href="/services" class="active">Services</a></li>
                @else
                    <li><a href="/services">Services</a></li>
                @endif

                @if ($tag == 'Contact')
                    <li><a href="/contact" class="active">Contact</a></li>
                @else
                    <li><a href="/contact">Contact</a></li>
                @endif

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex">
            <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        </div>

    </div>
</header><!-- End Header -->
