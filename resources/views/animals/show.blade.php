@extends('layouts.app')

@section('title')
    Visualizar PET
@endsection

@section('content')
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container">
            <x-formulario-animal :animal="$animal" :species="$species" readonly="true" />

            <div class="row">
                <div class="col-12">
                    <a href="{{ url()->previous() }}" class="btn btn-danger m-2">Voltar</a>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
@endsection
