@extends('layouts.app', ['class' => 'bg-default'])

@section('content')

    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="row">
                @for($a =0; $a<20; $a++)
                    <div class="col-xl-3 col-lg-6" style="margin:2% 2% 2% 2% ">
                        <div class="card" style="width: 18rem;">
                          <img class="card-img-top" src="{{ asset('/media/banner.jpg') }}" alt="Card image cap">
                          <div class="card-body">
                            <div>
                                <h5 class="card-title"  style="display:inline-block;">Preço</h5>
                                <p style="display:inline-block;margin-left: 70%;cursor: pointer;">
                                    <i class="ni ni-favourite-28"></i>
                                </p>
                            </div>
                            <p class="card-text">Endereço</p>
                            <p class="card-text">Detalhes</p>

                          </div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection