@extends('layouts.app')

@section('title')
    Editar um Tutor
@endsection

@section('content')
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container">
            <form action="{{ route('tutor.update', $tutor->id) }}" method="POST">
                @csrf
                @method('PUT')
                <x-formulario-tutor :tutor="$tutor" :animals="$animals"/>

                <div class="row">
                    <div class="col-12">
                        <a href="{{ url()->previous() }}" class="btn btn-danger m-2">Cancelar</a>
                        <input type="submit" value="Cadastrar Tutor" class="btn btn-success float-right m-2">
                        <input type="reset" value="Limpar Formulário" class="btn btn-warning m-2">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
@endsection
