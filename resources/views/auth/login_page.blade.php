@extends('master')

@section('body')
<div role="main" class="main shop py-4">

    <div class="container">

        <div class="row">
            <div class="col">
                <div class="featured-boxes">
                    <div class="row">
                        <div class="col-md-3">

                            <div class="order-sm-1 align-self-center">

                                <br>
                                <br><br>
                                <br>
                                <div class="appear-animation d-inline-block" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="400">
                                    <p class="h3"> Login With bidya Guru Account</p>
                                   
                                </div>
                               

                                <div class="appear-animation d-inline-block" data-appear-animation="rotateInUpRight"
                                    data-appear-animation-delay="500">
                                    <span class="arrow vtr" style="top: 10px;"></span>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-6">
                            <div class="featured-box featured-box-primary text-left mt-2">
                                <div class="box-content">
                                    <p class="color-primary font-weight-semibold text-4 text-uppercase mb-3">I'm a Bidya
                                        Guru User</p>
                              @if(session('msg'))
                                <div class="appear-animation d-inline-block" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="100">
                                    <p class="h3"> {{session('msg')}} </p>
                                </div>
                                @endif
                                    <form action="{{url('/verify-login')}}" id="frmSignIn" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="font-weight-bold text-dark text-2">E-mail Address</label>
                                                <input type="text" name="email" class="form-control form-control-lg">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <a class="float-right" href="#">(Lost Password?)</a>
                                                <label class="font-weight-bold text-dark text-2">Password</label>
                                                <input type="password" name="password"
                                                    class="form-control form-control-lg">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberme">
                                                    <label class="custom-control-label text-2" for="rememberme">Remember
                                                        Me</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <input type="submit" value="Login" class="btn btn-primary float-right"
                                                    data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">

                            <div class="order-sm-1 align-self-center">

                                <br>
                                <br>
                                <div class="appear-animation d-inline-block" data-appear-animation="rotateInDownLeft"
                                    data-appear-animation-delay="500">
                                    <span class="arrow vbr" style="top: 10px;"></span>
                                </div>
                                <div class="appear-animation d-inline-block" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="400">
                                    <a class="h3" href="http://bidyaguru.com/">Singup in Bidya Guru</a>
                                </div>
                                
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

@endsection
