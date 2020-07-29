@extends('frontend.layouts.app')

@section('content')
 <!-- Header -->
 <header class="masthead d-flex" id="home">
    <div class="container text-center my-auto">
      <h1 class="mb-1">md mahbub alam</h1>
      <h3 class="mb-5">
        <em>Laravel Developer</em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- About -->
  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
          <p class="lead mb-5">This theme features a flexible, UX friendly sidebar menu and stock photos from our friends at
            <a href="https://unsplash.com/">Unsplash</a>!</p>
          <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h3 class="text-secondary mb-0">Portfolio</h3>
        <h2 class="mb-5">Recent Projects</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Stationary</div>
                <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Ice Cream</div>
                <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Strawberries</div>
                <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#!">
            <div class="caption">
              <div class="caption-content">
                <div class="h2">Workspace</div>
                <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

@endsection