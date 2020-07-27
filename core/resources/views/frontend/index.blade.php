@extends('frontend.layouts.app')

@section('content')
<div class="content">
    <div class="grid">
        <figure class="effect-oscar">
            <img src="{{asset('assets/img/bg.jpg')}}" alt="img09"/>
            <figcaption>
                <h2>Warm <span>Oscar</span></h2>
                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                <a href="#">View more</a>
            </figcaption>			
        </figure>
    </div>
</div>
    {{-- <section id="about">
        <div class="container about-content">
            <div class="row">
                <div class="col-md-12 justify-content-center text-center">
                    <img src="{{asset('assets/img/bg.jpg')}}" class="img-fluid img-thumbnail profile-img" alt="">
                </div>
                <div class="col-md-12 text-center user-info">
                    <span class="display-2 user-name">Mahbub Alam</span>
                    <span class="display-4 bio"> <span class="program-name">Laravel</span> Developer</span>
                    <h4 class="user-details">
                        Love to write program in PHP <span class="and-quote">&</span> JavaScript
                    </h4>
                    <h4 class="user-self">
                        <span class="self">Self Learner</span> | <span class="self">Slow Learner</span> | <span class="self">Flexible</span> | <span class="self">Honest</span>
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="btn btn-outline-danger btn-md info">Laravel</span>
                    <span class="btn btn-outline-danger btn-md info">React JS</span>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </section> --}}
@endsection