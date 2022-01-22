@extends('layout.default')

@section('content')
<div class="blog_page_bg">
  <div class="container">
      <!--breadcrumbs area start-->
      <div class="breadcrumbs_area breadcrumbs_blog mb-96">
          <div class="row">
              <div class="col-12">
                  <div class="breadcrumb_content text-center">
                      <H2>Latest <span>Articles</span></H2>
                      <ul>
                          <li><a href="index.html">home / </a></li>
                          <li><a href="blog.html">Blog</a></li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!--breadcrumbs area end-->

      <!--blog page section start-->
      <div class="blog_page_section mb-140">
          <div class="blog_messonry_button d-flex justify-content-center">
              <button class="active" data-filter="*">all</button>
              <button data-filter=".business">Business </button>
              <button data-filter=".entertaiment">Entertaiment </button>
              <button data-filter=".life"> Life style </button>
              <button data-filter=".technology">Technology </button>
              <button data-filter=".others">others</button>
          </div>
          <div class="row blog_page_gallery">
              <div class="col-lg-4 col-md-6 col-sm-6 gird_item entertaiment life technology">
                  <article class="single_blog wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                      <figure>
                          <div class="blog_thumb">
                              <a href="blog-details.html"><img src="assets/img/blog/blog1.jpg" alt=""></a>
                          </div>
                          <figcaption class="blog_content">
                              <div class="blog_meta">
                                  <span>March, 24th, 2025</span>
                              </div>
                              <h3><a href="blog-details.html">Put title for single blog with image format here</a>
                              </h3>
                              <a href="blog-details.html">Continue <i class="ei ei-arrow_right"></i></a>
                          </figcaption>
                      </figure>
                  </article>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 gird_item business entertaiment others">
                  <article class="single_blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                      <figure>
                          <div class="blog_thumb">
                              <a href="blog-details.html"><img src="assets/img/blog/blog2.jpg" alt=""></a>
                          </div>
                          <figcaption class="blog_content">
                              <div class="blog_meta">
                                  <span>March, 24th, 2025</span>
                              </div>
                              <h3><a href="blog-details.html">Lorem ipsum dolor sit amet image there are elit.</a>
                              </h3>
                              <a href="blog-details.html">Continue <i class="ei ei-arrow_right"></i></a>
                          </figcaption>
                      </figure>
                  </article>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 gird_item entertaiment life technology">
                  <article class="single_blog wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                      <figure>
                          <div class="blog_thumb">
                              <a href="blog-details.html"><img src="assets/img/blog/blog3.jpg" alt=""></a>
                          </div>
                          <figcaption class="blog_content">
                              <div class="blog_meta">
                                  <span>March, 24th, 2025</span>
                              </div>
                              <h3><a href="blog-details.html"> Sit amet here elit.is fugiat fuga mollitia
                                      itaque.</a></h3>
                              <a href="blog-details.html">Continue <i class="ei ei-arrow_right"></i></a>
                          </figcaption>
                      </figure>
                  </article>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 gird_item business entertaiment technology">
                  <article class="single_blog wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.4s">
                      <figure>
                          <div class="blog_thumb">
                              <a href="blog-details.html"><img src="assets/img/blog/blog4.jpg" alt=""></a>
                          </div>
                          <figcaption class="blog_content">
                              <div class="blog_meta">
                                  <span>March, 24th, 2025</span>
                              </div>
                              <h3><a href="blog-details.html">Lorem ipsum dolor elit. Corrupti non eius vel
                                      harum?</a></h3>
                              <a href="blog-details.html">Continue <i class="ei ei-arrow_right"></i></a>
                          </figcaption>
                      </figure>
                  </article>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 gird_item business entertaiment others">
                  <article class="single_blog wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                      <figure>
                          <div class="blog_thumb">
                              <a href="blog-details.html"><img src="assets/img/blog/blog5.jpg" alt=""></a>
                          </div>
                          <figcaption class="blog_content">
                              <div class="blog_meta">
                                  <span>March, 24th, 2025</span>
                              </div>
                              <h3><a href="blog-details.html">Put title for single blog with image format here</a>
                              </h3>
                              <a href="blog-details.html">Continue <i class="ei ei-arrow_right"></i></a>
                          </figcaption>
                      </figure>
                  </article>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6 gird_item entertaiment entertaiment life technology">
                  <article class="single_blog wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1.6s">
                      <figure>
                          <div class="blog_thumb">
                              <a href="blog-details.html"><img src="assets/img/blog/blog6.jpg" alt=""></a>
                          </div>
                          <figcaption class="blog_content">
                              <div class="blog_meta">
                                  <span>March, 24th, 2025</span>
                              </div>
                              <h3><a href="blog-details.html">Lorem ipsum dolor sit amet image there are elit.</a>
                              </h3>
                              <a href="blog-details.html">Continue <i class="ei ei-arrow_right"></i></a>
                          </figcaption>
                      </figure>
                  </article>
              </div>
          </div>
          <div class="pagination_style pagination blog_pagination justify-content-center">
              <ul class="d-flex">
                  <li><a href="#"><i class="ei ei-arrow_left"></i></a></li>
                  <li><a class="current" href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">...</a></li>
                  <li><a href="#">8</a></li>
                  <li><a href="#"><i class="ei ei-arrow_right"></i></a></li>
              </ul>
          </div>
      </div>
      <!--blog page section end-->
  </div>
</div>


@endsection