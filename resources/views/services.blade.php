<!DOCTYPE html>
<html lang="en">

@include('inc.head')

<body>

    <!-- ======= Header ======= -->
    @include('inc.nav')
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        @include('inc.breadcumb')
        <!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        @include('inc.service')
        <!-- End Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Why Choose Us</h2>

                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="card border-0">
                            <div class="card-header">
                                <h4>Competitive Rate</h4>
                            </div>
                            <div class="card-body">

                                <p class="card-text">Being efficient without regard to effectiveness is out default
                                    mode.</p>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
                        <div class="card border-0">
                            <div class="card-header">
                                <h4>Excellent Customer Experience</h4>
                            </div>
                            <div class="card-body">

                                <p class="card-text">We consider each customer as a family member who deserves nothing
                                    but the best
                                    services.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mt-4 mt-md-0">
                        <div class="card border-0">
                            <div class="card-header">
                                <h4>Document Archiving</h4>
                            </div>
                            <div class="card-body">

                                <p class="card-text">We have a retention period of 7 years for all clearing documents.
                                </p>

                            </div>
                        </div>

                    </div>

                </div>
        </section><!-- End Features Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('inc.footer')

</body>

</html>
