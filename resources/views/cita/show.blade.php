@extends('layouts.app')

@section('template_title')
    {{ $cita->name ?? 'Show Cita' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citas.index') }}">REGRESAR</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cita->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Raza:</strong>
                            {{ $cita->Raza }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $cita->Edad }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo Cita:</strong>
                            {{ $cita->Motivo_Cita }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Cita:</strong>
                            {{ $cita->Fecha_Cita }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            {{ $cita->Propietario }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $cita->Imagen }}
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
