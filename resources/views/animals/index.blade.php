@extends('layouts.app')

@section('title')
    Lista de PETs
@endsection

@section('content')
    <div class="container card card-outline card-info mt-3">
        <div class="card-header">
            <h3 class="float-left">Lista de PETs Cadastradas</h3>
            <a href="{{ route('animal.create') }}" class="btn btn-info float-right">Cadastrar Novo</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome Completo</th>
                    <th>Espécie</th>
                    <th>Tutor</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach($animals as $animal)
                    <tr>
                        <td>{{ $animal->id }}</td>
                        <td>{{ $animal->name }}</td>
                        <td>{{ $animal->specie->name }}</td>
                        <td></td>
                        <td>
                            <a href="{{ route('animal.show', $animal->id) }}" class="btn btn-primary btn-sm">Visualizar</a>
                            <a href="{{ route('animal.edit', $animal->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('animal.destroy', $animal->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que desejas excluir?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Nome Completo</th>
                    <th>Espécie</th>
                    <th>Tutor</th>
                    <th>Opções</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
