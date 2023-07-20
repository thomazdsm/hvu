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
                               value="{{ old('name', $tutor->name ?? '') }}" @if($readonly) readonly @endif required>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-6" style="float: left;">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="form-control"
                               value="{{ old('email', $tutor->email ?? '') }}" @if($readonly) readonly @endif required>
                    </div>
                </div>

                <!-- Endereço -->
                <div class="col-md-8" style="float: left;">
                    <div class="form-group">
                        <label for="address">Endereço</label>
                        <input type="text" id="address" name="address" class="form-control"
                               value="{{ old('address', $tutor->address ?? '') }}" @if($readonly) readonly @endif required>
                    </div>
                </div>

                <!-- Telefone -->
                <div class="col-md-4" style="float: left;">
                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="text" id="phone" name="phone" class="form-control" data-inputmask='"mask": "(99) 99999-9999"' data-mask
                               value="{{ old('phone', $tutor->phone ?? '') }}" @if($readonly) readonly @endif required>
                    </div>
                </div>

                <!-- CPF -->
                <div class="col-md-6" style="float: left;">
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" class="form-control" data-inputmask='"mask": "999.999.999-99"' data-mask
                               value="{{ old('cpf', $tutor->cpf ?? '') }}" @if($readonly) readonly @endif required>
                    </div>
                </div>

                <!-- PET -->
                <div class="col-md-6" style="float: left;">
                    <div class="form-group">
                        <label for="animal_ids">PET</label>
                        <select name="animal_ids[]" id="animal_ids[]" class="select2 select2-purple" multiple="multiple" style="width: 100%;" data-dropdown-css-class="select2-purple" required>
                            @foreach($animals as $animal)
                                <option value="{{ $animal->id }}" @if(isset($tutor) && $tutor->animals->contains($animal->id)) selected @endif>
                                    {{ $animal->id }} - {{ $animal->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
