@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>{{ __('Realize o login') }}</small></div>
                        <div class="btn-wrapper text-center">
                            <a href="{{ url('/auth/redirect/google') }}" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/google.svg"></span>
                                <span class="btn-inner--text">{{ __('Google') }}</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>
                                {{ __('O login com o Google permite que você receba notificações em tempo real sobre suas preferências :)') }}
                            </small>
                            <br>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
