<!-- Extendamo layout za admin portal -->
@extends('admin.layout.layout')

<!-- Čitav header je includean unutar layout-a :: admin.layout.snippets.content.content-menu -->
<!-- Ikona, naslov .. buttoni, sve je yield-ano, tako da na ostalim pageovima samo uradimo section -->

<!-- Ikona na vrhu stranice -->
@section('c-icon') <i class="fas fa-users"></i> @endsection
<!-- Naslov -->
@section('c-title') {{ $user->name }} @endsection
<!-- Linkovi dole ispod -->
@section('c-breadcrumbs')
    <a href="#"> <i class="fas fa-home"></i> <p>{{ __('Dashboard') }}</p> </a> / <a href="#">{{ __('Korisnici') }}</a> / <a href="#">{{ $user->name }}</a>
@endsection
@section('c-buttons')
    <a href="{{ route('system.users.index') }}">
        <button class="pm-btn btn btn-dark"> <i class="fas fa-star"></i> </button>
    </a>
    <a href="{{ route('system.users.edit', ['username' => $user->username ]) }}">
        <button class="pm-btn btn pm-btn-success">
            <i class="fas fa-edit"></i>
            <span>{{ __('Uredite') }}</span>
        </button>
    </a>
@endsection

@section('content')
    <div class="content-wrapper content-wrapper-p-15">
        <div class="row">
            <!-- Na create je col-md-12 pa je zbog toga full; sada smo uzeli 3/4 za prikaz informacija i 1/4 za ovaj desni meni -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <b>{{ html()->label(__('Ime i prezime'))->for('name') }}</b>
                            {{ html()->text('name')->class('form-control form-control-sm mt-1')->required()->maxlength(100)->value((isset($user) ? $user->name : ''))->isReadonly(true) }}
                            <small id="nameHelp" class="form-text text-muted">{{ __('Puno ime i prezime') }}</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <b>{{ html()->label(__('Email'))->for('email') }}</b>
                            {{ html()->text('email')->class('form-control form-control-sm mt-1')->required()->maxlength(100)->value((isset($user) ? $user->email : ''))->isReadonly(true) }}
                            <small id="emailHelp" class="form-text text-muted">{{ __('Željeni email') }}</small>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <b>{{ html()->label(__('Broj licence'))->for('licence') }}</b>
                            {{ html()->text('licence')->class('form-control form-control-sm mt-1')->required()->maxlength(100)->value((isset($user) ? $user->licence : ''))->isReadonly(true) }}
                            <small id="licenceHelp" class="form-text text-muted">{{ __('Broj licence agenta') }}</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <b>{{ html()->label(__('Broj telefona'))->for('phone') }}</b>
                            {{ html()->text('phone')->class('form-control form-control-sm mt-1')->required()->maxlength(100)->value((isset($user) ? $user->phone : ''))->isReadonly(true) }}
                            <small id="phoneHelp" class="form-text text-muted">{{ __('Broj telefona') }}</small>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <b>{{ html()->label(__('Detaljan opis'))->for('description') }}</b>
                            {{ html()->textarea('description')->class('form-control form-control-sm')->maxlength(2000)->value((isset($user) ? $user->description : ''))->style('height:160px')->required()->isReadonly(true) }}
                            <small id="descriptionHelp" class="form-text text-muted">{{ __('Kratki opis proizvoda') }}</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">

            </div>
        </div>
    </div>
@endsection
