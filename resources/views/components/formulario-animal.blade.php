<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-danger">
            <div class="card-header">
                <h3 class="card-title">@yield('title')</h3>
            </div>
            <div class="card-body">
                <!-- Nome Completo -->
                <div class="col-md-6" style="float: left;">
                    <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" name="name" class="form-control"
                               value="{{ old('localizacao', $animal->name ?? '') }}" @if($readonly) readonly @endif>
                    </div>
                </div>

                <!-- Espécie -->
                <div class="col-md-6" style="float: left;">
                    <div class="form-group">
                        <label for="specie_id">Espécie</label>
                        <select name="specie_id" id="specie_id" class="form-control">
                            @foreach($species as $specie)
                                <option value="{{ $specie->id }}" @if(isset($tutor) && $tutor->specie_id == $specie->id) selected @endif>
                                    {{ $specie->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
