@extends('layout.default')

@section('content')
<!--slide banner section start-->
<div class="hero_banner_section hero_banner4  d-flex align-items-center" data-bgimg="assets/img/bg/bigimg4.jpg">

</div>
<!--slider area end-->

<!-- contact section start -->
<section class="contact_page_section">
    <div class="container">
        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area breadcrumbs_contact">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center wow fadeInUp" data-wow-delay="0.1s"
                        data-wow-duration="1.1s">
                        <H2>Contact <span>Us</span></H2>
                        <ul>
                            <li><a href="index.html">home / </a></li>
                            <li><span>Contact</span></li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->
        <div class="contact_info d-flex justify-content-center">
            <div class="contact_info_list wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <i class="ei ei-mobile"></i>
                <h3>Phone</h3>
                <p><span>Phone 01: </span><a href="tel:(091)8547632521">(091) 8547 632521</a></p>
                <p><span>Phone 02: </span><a href="tel:(084)9654788">(084) 965 4788</a></p>
            </div>
            <div class="contact_info_list wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                <i class="ei ei-pin_alt"></i>
                <h3>Address</h3>
                <p>69 Halsey St, New York, Ny 10002, <br> United States.</p>
            </div>
            <div class="contact_info_list wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                <i class="ei ei-mail_alt"></i>
                <h3>Email</h3>
                <p><a href="#">support@Asoretheme.com</a></p>
                <p><a href="#">hello@Asoretheme.com</a></p>
            </div>
        </div>
        <!--contact map start-->
        <div class="contact_map mt-70">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004082.928417291!2d-104.65713107818928!3d37.275578278180674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1606327234905!5m2!1sen!2sbd"
                style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!--contact map end-->
    </div>
</section>
<!-- contact section end -->

@endsection