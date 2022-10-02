<!DOCTYPE html>
<html lang="en">

@include('inc.head')

<body>

    <!-- ======= Header ======= -->
    @include('inc.nav')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        @include('inc.breadcumb')
        <!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        @include('inc.about-us')

        <!-- ======= Mission & Value Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                    </path>
                                </svg>
                                <i class="bx bxl-dribbble"></i>
                            </div>
                            <h4><a href="">Our Mission</a></h4>
                            <p>To make a mark as provider of efficient and professional services to our customers.</p>
                        </div>
                    </div>

                    <div class="col-lg col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box iconbox-orange ">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                        d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426">
                                    </path>
                                </svg>
                                <i class="bx bx-file"></i>
                            </div>
                            <h4><a href="">Our Value</a></h4>
                            <p>Our values revolves around honesty, team work, client focus, respect and leadership.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= our goals Section ======= -->
        <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-right">

                        <h1>Our Goals</h1>
                        <p>Our service delivery is constantly benchmarked on effectively utilizing these competencies
                            which are;</p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Safe and efficient service delivery</li>
                            <li class="list-group-item">Effective information management</li>
                            <li class="list-group-item">Cost effective services</li>
                            <li class="list-group-item">Effective risk management</li>
                            <li class="list-group-item">Promptness</li>
                            <li class="list-group-item">Regular operations update</li>
                            <li class="list-group-item">Two-way communication</li>
                        </ul>

                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->


        <!-- ======= our contact Section ======= -->
        @include('inc.cont')
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('inc.footer')

</body>

</html>
