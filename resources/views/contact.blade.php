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

        <!-- ======= Contact Section ======= -->
        <div class="map-section">

            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d15858.468390457725!2d3.3513489672111567!3d6.443187047296032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x103b8bbbffffffff%3A0xf64e6391f38bb56!2sInterocean%20Maritime%20Services%2C%2018B%20Balogun%20Bisi%20Street%20(Hindra%20Streer%2C%20Apapa%20GRA%2C%20Lagos!3m2!1d6.4553139999999996!2d3.3641756!5e0!3m2!1sen!2sng!4v1664720249632!5m2!1sen!2sng"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>


        <section id="contact" class="contact">
            <div class="container">

                @include('inc.cont')

                <div class="row mt-5 justify-content-center" data-aos="fade-up">
                    <div class="col-lg">
                        <form action="{{ route('contactus') }}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                @if (Session::has('message'))
                                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                                @endif
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    @include('inc.footer')

</body>

</html>
