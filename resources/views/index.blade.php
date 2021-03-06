@extends('layouts.master')

@section('content')

    <slider-component></slider-component>

    <our-product></our-product>

    <div class="suport-bar pb-3 pt-4 my-5 px-5 row mx-0 border">
        <div class="col-12 col-lg-4 text-center">
            <i class="fa fa-shopping-cart fa-2x"></i>
            <h4 class="d-inline-block ml-2"><strong>
                    Buy Endura Coatings
                </strong></h4>
        </div>
        <div class="col-12 col-lg-4 text-center">
            <i class="fa fa-industry fa-2x"></i>
            <h4 class="d-inline-block ml-2"><strong>
                    High Performance Coating
                </strong></h4>
        </div>
        <div class="col-12 col-lg-4 text-center">
            <i class="far fa-life-ring fa-2x"></i>
            <h4 class="d-inline-block ml-2"><strong>
                    Customer Support
                </strong></h4>
        </div>

    </div>


    <news-component></news-component>


    <about-firstpage></about-firstpage>

@endsection
