@extends('layouts.app')

@section('template_title')
    {{ $tutore->name ?? __('Show') . " " . __('Tutore') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tutore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tutores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Imagendeperfil:</strong>
                                    {{ $tutore->imagendeperfil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombres:</strong>
                                    {{ $tutore->nombres }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>A Paterno:</strong>
                                    {{ $tutore->a_paterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>A Materno:</strong>
                                    {{ $tutore->a_materno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Division:</strong>
                                    {{ $tutore->division }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Teléfono:</strong>
                                    {{ $tutore->teléfono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Perfil:</strong>
                                    {{ $tutore->perfil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Correoelectronico:</strong>
                                    {{ $tutore->correoelectronico }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contraseña:</strong>
                                    {{ $tutore->contraseña }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Role:</strong>
                                    {{ $tutore->role }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
