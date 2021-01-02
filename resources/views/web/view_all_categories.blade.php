@extends('layouts.inner')
@section('main')
    <section id="service" class="services-area">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($categories as $key => $categories)
                    <div class="col-lg-4 col-md-7 col-sm-9">
                        <div class="single-pricing mt-40">
                            <div class="text-center">
                                <img src='{{asset("category_images/$categories->cat_image")}}' class="rounded" alt="...">
                            </div>
                            <div class="pricing-header text-center">
                                <h4> {{ $categories->cat_name}}</h4>
                            </div>
                            <div class="pricing-btn text-center">
                                <a class="main-btn" href="singleservice/{{ $categories->id}}">Know More</a>
                            </div>
                            <div class="buttom-shape">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-1{fill:#2bdbdc;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-1" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-1" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-1" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-1" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                            </div>
                        </div> <!-- single pricing -->
                    </div>
                @endforeach
            </div>
        </div>
    </section>
