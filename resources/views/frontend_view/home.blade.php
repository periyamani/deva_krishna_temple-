@extends('layouts.frontend')

@section('pagestyles')


@stop

@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="col-12 img_align">
            <img src="frontend_css/assets/img/indexBanner/1.png" class="img-fluid" alt="" id="top-img" />
            <img src="frontend_css/assets/img/2_2.png" class="img-fluid" alt="" id="top-img" />
            <img src="frontend_css/assets/img/indexBanner/3.png" class="img-fluid" alt="" id="top-img" />
        </div>
        <div class="aln">
            <img src="frontend_css/assets/img/indexBanner/krishna_chakra_l.png" alt="" class="c1 rotate" />

            <img src="frontend_css/assets/img/indexBanner/name_tamil.png" alt="" class="c2" />

            <img src="frontend_css/assets/img/indexBanner/krishna_chakra_r.png" alt="" class="c3 rotate" />
        </div>
        <div class="img_align">
            <img src="frontend_css/assets/img/2.png" class="img-fluid" alt="" id="line" />
        </div>
        <div class="img_align">
            <img src="frontend_css/assets/img/indexBanner/name_english.png" class="img-fluid" alt="" id="eng_img" />
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>எங்களை பற்றி</h2>
                <h3>கோவிலை பற்றி <span>மேலும் தெரிந்துகொள்ள</span></h3>
                {{-- <p>
                    Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.
                </p> --}}
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="frontend_css/assets/img/aboutUs_img/main_img.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    {{-- <h3>
                        Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.
                    </h3> --}}
                    <p class="fst-italic">
                        பெரியகாடம்பட்டி தாரமங்கலம் ஓமலூர் மெயின் ரோடு சேலம் மாவட்டம் எனும் ஊரில் அமைந்து உள்ளது நமது தேவ
                        கிருஷ்ணா திருக்கோவில்.
                        <br><br> சித்திரை மாதம் 2- ஆம் நாள் (15.04.2022) வெள்ளிக்கிழமை மஹாசம்ப்ரோக்ஷணம் (எனும்) மஹா
                        கும்பாபிஷேக விழா கோலாகலமாக நடைபெற்றது.
                        <br><br>அன்று கோவிலுக்கு வந்த அனைத்து பக்தகோடிகளும் கிருஷ்ணரின் அருளாசியை மனநிறைவுடன்
                        பெற்றுச்சென்றனர்.<br><br>
                        இனிவரவிருக்கும் பக்தகோடிகளுக்கும் தனது பூரண அருளாசியை வழங்க கிருஷ்ண பகவான் கொலு
                        வீற்றிருக்கிறார்.

                    </p>
                    {{-- <ul>
                        <li>
                            <i class="bx bx-store-alt"></i>
                            <div>
                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                <p>
                                    Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-images"></i>
                            <div>
                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                <p>
                                    Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata
                                    redi
                                </p>
                            </div>
                        </li>
                    </ul> --}}
                    <!-- <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                            id est laborum
                        </p> -->
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <img src="frontend_css/assets/img/aboutUs_img/frame 1.jpg" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="frontend_css/assets/img/aboutUs_img/frame 2.jpg" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <img src="frontend_css/assets/img/aboutUs_img/frame 3.jpg" class="img-fluid" alt="" />
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="100">
                    <img src="frontend_css/assets/img/aboutUs_img/frame 4.jpg" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
    <!-- ======= Trust Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>டிரஸ்ட்</h2>
                <h3>டிரஸ்ட் பற்றி <span>மேலும் தெரிந்துகொள்ள</span></h3>
                {{-- <p>
                    Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.
                </p> --}}
            </div>

            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    {{-- <h3>
                        Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.
                    </h3> --}}
                    <p class="fst-italic">
                        பெரியகாடம்பட்டி யில் அமைந்து உள்ள தேவ கிருஷ்ண டிரஸ்ட் எனும் ஸ்தாபனம் மூலமாக நமது தேவ கிருஷ்ண
                        கோவில் நிறுவப்பட்டுள்ளது.<br><br>
                        இதன் நிறுவனர்களான
                        <br>
                        <br>
                        திருமதி U.தேவகி B.Sc.,B.Ed., அவர்கள் <br>
                        Chairman, தேவ கிருஷ்ண டிரஸ்ட்
                        <br>
                        <br>
                        Dr.C.உமாகாந்தன் M.B.B.S., அவர்கள் <br>
                        Secretary, தேவ கிருஷ்ண டிரஸ்ட்
                    </p>
                    {{-- <ul>
                        <li>
                            <i class="bx bx-store-alt"></i>
                            <div>
                                <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                                <p>
                                    Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-images"></i>
                            <div>
                                <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                <p>
                                    Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata
                                    redi
                                </p>
                            </div>
                        </li>
                    </ul> --}}
                    <!-- <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum
              </p> -->
                </div>

                <section id="team" class="team section-bg col-lg-6">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="frontend_css/assets/img/trust/Chairman.jpg" class="img-fluid"
                                            alt="" />
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>திருமதி U.தேவகி B.Sc.,B.Ed.,d</h4>
                                        <span>Chairman</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="200">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="frontend_css/assets/img/trust/Secretary.jpg" class="img-fluid"
                                            alt="" />
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Dr.C.உமாகாந்தன் M.B.B.S.,</h4>
                                        <span>Secretary</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- End Trust Section -->



    <!-- ======= Gallery Section ======= -->
    <section id="services" class="services">
        <div class="section-title">
            <h2>புகைப்படம்</h2>
            <h3>அனைத்து புகைப்படத்தையும்<span>பார்க்கவும்</span></h3>
            <p>
                படங்கள் நமது தேவ கிருஷ்ணா கோவில் மகா கும்பாபிஷேக விழா படங்கள் மற்றும் நமது கோவிலின் படங்களை இங்க
                காணலாம்
            </p>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <img src="frontend_css/assets/img/gallery/g32.jpeg" class="img-fluid" style="object-fit: cover; " />
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="frontend_css/assets/img/gallery/g52.jpeg" class="img-fluid" style="object-fit: cover; " />
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                    data-aos-delay="300">
                    <img src="frontend_css/assets/img/gallery/g29.jpeg" class="img-fluid" style="object-fit: cover; " />
                </div>


            </div>
        </div>
        <div class="text-center mt-5">
            <a href="{{URL::asset('/gallerylist')}}" class="default-btn move-right"><span>View All</span></a>
        </div>

    </section>
    <!-- End Gallery Section -->



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