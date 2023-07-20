@extends('layouts.app')

@section('content')

    <!-- Main content -->
    <section class="content mt-3">
        <div class="container">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>15</h3>

                            <p>Aguardando Triagem</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>5</h3>

                            <p>Na Triagem</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>2</h3>

                            <p>Aguardando Atendimento</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>7</h3>

                            <p>Em Atendimento</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Application buttons -->
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-3"style="float: left;">
                                <a class="btn btn-app col-lg-12 bg-gradient-success" href="#" data-toggle="modal" data-target="#modal-atendimento">
                                    <i class="fas fa-hand-holding-medical"></i> Iniciar Atendimento
                                </a>
                            </div>
                            <div class="col-lg-3"style="float: left;">
                                <a class="btn btn-app col-lg-12 bg-gradient-secondary" href="#">
                                    <i class="fas fa-file-medical-alt"></i> Visualizar Prontuário
                                </a>
                            </div>
                            <div class="col-lg-3"style="float: left;">
                                <a class="btn btn-app col-lg-12 bg-gradient-navy" href="#">
                                    <i class="fas fa-chart-bar"></i> Relatório de Atendimentos
                                </a>
                            </div>
                            <div class="col-lg-3"style="float: left;">
                                <a class="btn btn-app col-lg-12 bg-gradient-fuchsia" href="#">
                                    <i class="fas fa-money-check-alt"></i> Serviços e Valores
                                </a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-3"style="float: left;">
                                <a class="btn btn-app col-lg-12" href="#">
                                    <i class="fas fa-users-cog"></i> Configurações de Usuários
                                </a>
                            </div>
                            <div class="col-lg-3"style="float: left;">
                                <a class="btn btn-app col-lg-12" href="{{ route('animal.index') }}">
                                    <i class="fas fa-paw"></i> Lista de Animais
                                </a>
                            </div>
                            <div class="col-lg-3"style="float: left;">
                                <a class="btn btn-app col-lg-12" href="{{ route('tutor.index') }}">
                                    <i class="fas fa-users"></i> Lista de Tutores
                                </a>
                            </div>
                            <div class="col-lg-3"style="float: left;">
                                <a class="btn btn-app col-lg-12" href="#">
                                    <i class="fas fa-user-md"></i> Lista de Funcionários
                                </a>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>


    <div class="modal fade" id="modal-atendimento">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Iniciar Atendimento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="animal_id">Nome do PET</label>
                                    <select name="animal_id" id="animal_id" class="select2" required>
                                        @foreach($animals as $animal)
                                            <option value="{{ $animal->id }}">
                                                {{ $animal->id }} - {{ $animal->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
