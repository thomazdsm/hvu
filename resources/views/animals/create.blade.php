@extends('layouts.app')

@section('title')
    Cadastrar um PET
@endsection

@section('content')
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container">
            <form action="{{ route('animal.store') }}" method="POST">
                @csrf
                <x-formulario-animal :animal="$animal" :species="$species" />

                <div class="row">
                    <div class="col-12">
                        <a href="{{ url()->previous() }}" class="btn btn-danger m-2">Cancelar</a>
                        <input type="submit" value="Cadastrar PET" class="btn btn-success float-right m-2">
                        <input type="reset" value="Limpar Formulário" class="btn btn-warning m-2">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
@endsection
