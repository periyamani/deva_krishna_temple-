@extends('layouts.frontend')

@section('pagestyles')


@stop

@section('content')


<section id="services" class="services">

    <div class="section-title">
        <h2>புகைப்படம்</h2>
        <h3>அனைத்து புகைப்படத்தையும்<span>பார்க்கவும்</span></h3>
        <p>
            படங்கள் நமது தேவ கிருஷ்ணா கோவில் மகா கும்பாபிஷேக விழா படங்கள் மற்றும் நமது கோவிலின் படங்களை இங்க
            காணலாம்
        </p>
    </div>
    <!-- <div class="text-center mt-5">
        <a href="{{URL::asset('/frontend_view.home')}}" class="default-btn move-right"><span>Back To Home</span></a>
    </div> -->
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio1" class="portfolio">
        <div class="container" data-aos="fade-up">


            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


                @php $gallery = DB::table('gallery')->where('active', '1')->orderBy('id','desc')->get();@endphp
                @foreach($gallery as $image)

                @foreach(explode(' /', $image->photo) as $value)

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <a href="{{URL::asset('')}}gallery/{{$value}}" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link"><img src="{{URL::asset('')}}gallery/{{$value}}"
                            class="img-fluid" alt="" /></a>
                </div>

                <!-- </div> -->
                @endforeach

                @endforeach
            </div>
        </div>
    </section>

    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>தொடர்புக்கு</h2>
                <h3><span>எங்களை தொடர்பு கொள்ள</span></h3>
                {{-- <p>
                    Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.
                </p> --}}
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>முகவரி</h3>
                        <p>
                            பெரியகாடம்பட்டி, தாரமங்கலம், ஓமலூர் மெயின் ரோடு, சேலம் மாவட்டம்
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>மின்னஞ்சல் முகவரி</h3>
                        <p>contact@example.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>தொலைபேசி எண்</h3>
                        <p>+91 98432 37478</p>
                    </div>
                </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62507.41488226253!2d77.92751669883727!3d11.714697830762008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babfd6ca402046f%3A0x24bd9e1486ad4a4d!2sDeva%20krishna%20statue!5e0!3m2!1sen!2sin!4v1653646360428!5m2!1sen!2sin"
                        frameborder="0" style="border: 0; width: 100%; height: 384px" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required />
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
    </main>



    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h3>தேவ கிருஷ்ணா திருக்கோவில்<span>.</span></h3>
                        <p>
                            மது கிருஷ்ணா பகவான் தமது அருள்நிறைந்த ஆசிர்வாதங்களை நமக்கு வழங்கும் வண்ணம் அருள்பாளித்து
                            கொண்டிருக்கிறார் இந்த தேவ கிருஷ்ணரின் உருவச்சிலையை காண காண மனம் அனைத்து துயரையும் மறந்து
                            மகிழ்ச்சியில் திளைக்கிறது.
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>பயனுள்ள இணைப்புகள்</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#hero">முகப்பு</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#main">எங்களை பற்றி
                                </a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#portfolio1">புகைப்படம்</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>எங்கள் சமூக வலைப்பின்னல்s</h4>
                        {{-- <p>
                        Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies
                    </p> --}}
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Deva Krishna Temple</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by
                <a href="https://tamilzorous.com/">Tamilzorous Infotech</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->

    @endsection

    @section('pageScript')

    @stop