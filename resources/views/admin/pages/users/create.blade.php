<!-- Extendamo layout za admin portal -->
@extends('admin.layout.layout')

<!-- Čitav header je includean unutar layout-a :: admin.layout.snippets.content.content-menu -->
<!-- Ikona, naslov .. buttoni, sve je yield-ano, tako da na ostalim pageovima samo uradimo section -->

<!-- Ikona na vrhu stranice -->
@section('c-icon') <i class="fas fa-users"></i> @endsection
<!-- Naslov -->
@section('c-title') {{ __('Unos korisnika') }} @endsection
<!-- Linkovi dole ispod -->
@section('c-breadcrumbs')
    <a href="#"> <i class="fas fa-home"></i> <p>{{ __('Dashboard') }}</p> </a> / <a href="#">{{ __('Analytics') }}</a>
@endsection
@section('c-buttons')
    <a href="{{ route('system.users.index') }}">
        <button class="pm-btn btn btn-dark"> <i class="fas fa-star"></i> </button>
    </a>
    <a href="{{ route('system.users.create') }}">
        <button class="pm-btn btn pm-btn-success">
            <i class="fas fa-plus"></i>
            <span>{{ __('Create New') }}</span>
        </button>
    </a>
@endsection

@section('content')
    <div class="content-wrapper content-wrapper-p-15">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('system.users.save') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <b>{{ html()->label(__('Ime i prezime'))->for('name') }}</b>
                                {{ html()->text('name')->class('form-control form-control-sm mt-1')->required()->maxlength(100)->value((isset($user) ? $user->name : ''))->isReadonly(isset($preview)) }}
                                <small id="nameHelp" class="form-text text-muted">{{ __('Puno ime i prezime') }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <b>{{ html()->label(__('Email'))->for('email') }}</b>
                                {{ html()->text('email')->class('form-control form-control-sm mt-1')->required()->maxlength(100)->value((isset($user) ? $user->email : ''))->isReadonly(isset($preview)) }}
                                <small id="emailHelp" class="form-text text-muted">{{ __('Željeni email') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <b>{{ html()->label(__('Šifra'))->for('password') }}</b>
                                {{ html()->password('password')->class('form-control form-control-sm mt-1')->required()->maxlength(100) }}
                                <small id="passwordHelp" class="form-text text-muted">{{ __('Željena šifra') }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <b>{{ html()->label(__('Broj licence'))->for('licence') }}</b>
                                {{ html()->text('licence')->class('form-control form-control-sm mt-1')->required()->maxlength(100)->value((isset($user) ? $user->licence : ''))->isReadonly(isset($preview)) }}
                                <small id="licenceHelp" class="form-text text-muted">{{ __('Broj licence agenta') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <b>{{ html()->label(__('Broj telefona'))->for('phone') }}</b>
                                {{ html()->text('phone')->class('form-control form-control-sm mt-1')->required()->maxlength(100)->value((isset($user) ? $user->phone : ''))->isReadonly(isset($preview)) }}
                                <small id="phoneHelp" class="form-text text-muted">{{ __('Broj telefona') }}</small>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <b>{{ html()->label(__('Detaljan opis'))->for('description') }}</b>
                                {{ html()->textarea('description')->class('form-control form-control-sm')->maxlength(2000)->value((isset($user) ? $user->description : ''))->style('height:160px')->required()->isReadonly(isset($preview)) }}
                                <small id="descriptionHelp" class="form-text text-muted">{{ __('Kratki opis proizvoda') }}</small>
                            </div>
                        </div>
                    </div>

                    {{--<div class="row">--}}
                    {{--    <div class="col-md-12">--}}
                    {{--        <div class="form-group">--}}
                    {{--            {{ html()->label(__('Email'))->for('email')->class('bold') }}--}}
                    {{--            {{ html()->select('category', [1 => 1, 2 => 2], 1)->class('form-control form-control-sm')->required()->disabled(isset($preview)) }}--}}
                    {{--            <small id="categoryHelp" class="form-text text-muted">{{ __('Kategorija kojoj proizvod pripada') }}</small>--}}
                    {{--        </div>--}}
                    {{--    </div>--}}
                    {{--</div>--}}

                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-dark btn-sm"> {{ __('SAČUVAJTE') }} </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
