@extends('master')
@section('body')

<div class="container pt-5">

    <div class="row py-4 mb-2">
        <div class="col-md-7 order-2">
            <div class="overflow-hidden">
                <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation"
                    data-appear-animation="maskUp" data-appear-animation-delay="300">hh</h2>
            </div>
            
            <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
            hh
                </p>
            
            <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="900">
            <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="1000">
                
                
            </div>
        </div>
        <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
            <img src="{{url('/')}}" class="img-fluid mb-2" alt="">
        </div>
    </div>
</div>
@endsection

