@extends('layouts.app')

@section('title')
    Visualizar o Tutor
@endsection

@section('content')
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container">
            <x-formulario-tutor :tutor="$tutor" :animals="$animals" readonly="true" />

            <div class="row">
                <div class="col-12">
                    <a href="{{ url()->previous() }}" class="btn btn-danger m-2">Voltar</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
