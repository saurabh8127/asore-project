@extends('layout.default')

@section('content')
 <!--slide banner section start-->
 <section class="hero_banner_section hero_banner3  d-flex align-items-center" data-bgimg="assets/img/bg/bigimg3.jpg">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="hero_banner_inner">
                  <!--breadcrumbs area start-->
                  <div class="breadcrumb_content breadcrumb_portfolio text-center">
                      <H2 class="text-white">Latest <span class="text-white">Projects</span></H2>
                      <ul>
                          <li><a href="index.html">home / </a></li>
                          <li><a href="portfolio.html">Portfolio</a></li>
                      </ul>
                  </div>
                  <!--breadcrumbs area end-->
              </div>
          </div>
      </div>
  </div>
</section>
<!--slider area end-->

<!--portfolio section start-->
<section class="portfolio_section mb-140">
  <div class="container-fluid">
      <div class="portfolio_messonry_button d-flex justify-content-center">
          <button class="active" data-filter="*">all</button>
          <button data-filter=".business">Business </button>
          <button data-filter=".entertaiment">Entertaiment </button>
          <button data-filter=".life"> Life style </button>
          <button data-filter=".technology">Technology </button>
          <button data-filter=".others">others</button>
      </div>
      <div class="row no-gutters portfolio_page_gallery">
          <div class="col-lg-4 col-md-6 col-sm-6 gird_item entertaiment life technology">
              <figure class="portfolio_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                  <a href="single-portfolio.html"><img src="assets/img/others/portfolio1.jpg" alt=""></a>
                  <div class="portfolio_text">
                      <h3>Rubber Stamp</h3>
                      <span>Branding</span>
                  </div>
              </figure>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 gird_item business entertaiment others">
              <figure class="portfolio_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                  <a href="single-portfolio.html"><img src="assets/img/others/portfolio2.jpg" alt=""></a>
                  <div class="portfolio_text">
                      <h3>Rubber Stamp</h3>
                      <span>Branding</span>
                  </div>
              </figure>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 gird_item entertaiment life technology">
              <figure class="portfolio_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                  <a href="single-portfolio.html"><img src="assets/img/others/portfolio3.jpg" alt=""></a>
                  <div class="portfolio_text">
                      <h3>Rubber Stamp</h3>
                      <span>Branding</span>
                  </div>
              </figure>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 gird_item business entertaiment technology">
              <figure class="portfolio_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                  <a href="single-portfolio.html"><img src="assets/img/others/portfolio4.jpg" alt=""></a>
                  <div class="portfolio_text">
                      <h3>Rubber Stamp</h3>
                      <span>Branding</span>
                  </div>
              </figure>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 gird_item business entertaiment others">
              <figure class="portfolio_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                  <a href="single-portfolio.html"><img src="assets/img/others/portfolio5.jpg" alt=""></a>
                  <div class="portfolio_text">
                      <h3>Rubber Stamp</h3>
                      <span>Branding</span>
                  </div>
              </figure>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 gird_item entertaiment entertaiment life technology">
              <figure class="portfolio_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                  <a href="single-portfolio.html"><img src="assets/img/others/portfolio6.jpg" alt=""></a>
                  <div class="portfolio_text">
                      <h3>Rubber Stamp</h3>
                      <span>Branding</span>
                  </div>
              </figure>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 gird_item entertaiment entertaiment life technology">
              <figure class="portfolio_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                  <a href="single-portfolio.html"><img src="assets/img/others/portfolio7.jpg" alt=""></a>
                  <div class="portfolio_text">
                      <h3>Rubber Stamp</h3>
                      <span>Branding</span>
                  </div>
              </figure>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 gird_item entertaiment entertaiment life technology">
              <figure class="portfolio_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                  <a href="single-portfolio.html"><img src="assets/img/others/portfolio8.jpg" alt=""></a>

                  <div class="portfolio_text">
                      <h3>Rubber Stamp</h3>
                      <span>Branding</span>
                  </div>
              </figure>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 gird_item entertaiment entertaiment life technology">
              <figure class="portfolio_thumb wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                  <a href="single-portfolio.html"><img src="assets/img/others/portfolio9.jpg" alt=""></a>
                  <div class="portfolio_text">
                      <h3>Rubber Stamp</h3>
                      <span>Branding</span>
                  </div>
              </figure>
          </div>
      </div>
      <div class="loding_bar text-center">
          <i class="ion-load-a icons"></i>
          <a href="#">loading</a>
      </div>
  </div>
</section>
<!--portfolio section end-->



@endsection