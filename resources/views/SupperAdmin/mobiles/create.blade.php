@extends('SupperAdmin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div style="margin: 0 0 20px 0;">
                        <span>
                            <a href="{{url('/')}}">Главная</a>
                        </span>&nbsp;-&nbsp;
                        <span>
                            <a href="{{url('/mobiles')}}">Телефоны</a>
                        </span>&nbsp;-&nbsp;
                        <span>Добавление телефона</span>
                    </div>
                </div>
            </div>
            <div class="card">
{{--                <form method="POST" action="{{ url('/programs') }}">--}}
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link" id="nav-home-tab" href="{{ url('/users') }}" role="tab" aria-controls="nav-home" aria-selected="true">Юзеры</a>
{{--                            <a class="nav-item nav-link active" id="nav-profile-tab" href="{{ url('/programs') }}" role="tab" aria-controls="nav-profile" aria-selected="false">Приложения</a>--}}
                            <a class="nav-item nav-link active" id="nav-profile-tab" href="{{ url('/mobiles') }}" role="tab" aria-controls="nav-profile" aria-selected="false">Телефоны</a>
{{--                            <a class="nav-item nav-link" id="nav-contact-tab" href="{{ url('/logs') }}" role="tab" aria-controls="nav-contact" aria-selected="false">Задания</a>--}}
                            <a class="nav-item nav-link" id="nav-contact-tab" href="{{ url('/seances') }}" role="tab" aria-controls="nav-contact" aria-selected="false">Сеансы</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="card-header" style="text-align: center; font-size: 19px;">
                                Добавление телефона
                            </div>
                            <div class="card-body" style="padding: 20px 0 20px 0; margin: 0;">
                                @csrf

                                <div class="form-group row">
                                    <label for="phone_name" class="col-md-4 col-form-label text-md-right">{{ __('Название') }}</label>

                                    <div class="col-md-6">
                                        <input id="phone_name" type="text" class="form-control @error('phone_name') is-invalid @enderror" name="phone_name" value="" required autocomplete="phone_name" autofocus>

                                        @error('phone_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="secret_key" class="col-md-4 col-form-label text-md-right">{{ __('Секретный ключ') }}</label>

                                    <div class="col-md-6">
                                        <input id="secret_key" type="text" class="form-control @error('secret_key') is-invalid @enderror" name="secret_key" value="" required autocomplete="secret_key">

                                        @error('secret_key')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                        {{ __('Вкл/Выкл') }}
                                    </label>

                                    <div class="col-md-6">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox" checked id="phone_enable">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-6" style="text-align: center;">
                                                        <div class="btn btn-default" style="margin: 0 -60px 0 -30px;" id="generic_secret_key">
                                                            <span style="font-size: 17px; color: #007bff; text-decoration: underline; cursor: pointer; ">Сгенерировать секретный ключ</span>&nbsp;
                                                            <i class="fa fa-random"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" id="mobiles_add_execute">
                                            {{ __('Добавить Телефон') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                        </div>
                    </div>
{{--                </form>--}}
            </div>
        </div>
    </div>
</div>
<input id="users_id" value="" type="hidden">
@endsection
