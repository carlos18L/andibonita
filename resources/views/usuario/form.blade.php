<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $usuario?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="a_paterno" class="form-label">{{ __('A Paterno') }}</label>
            <input type="text" name="a_paterno" class="form-control @error('a_paterno') is-invalid @enderror" value="{{ old('a_paterno', $usuario?->a_paterno) }}" id="a_paterno" placeholder="A Paterno">
            {!! $errors->first('a_paterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="a_materno" class="form-label">{{ __('A Materno') }}</label>
            <input type="text" name="a_materno" class="form-control @error('a_materno') is-invalid @enderror" value="{{ old('a_materno', $usuario?->a_materno) }}" id="a_materno" placeholder="A Materno">
            {!! $errors->first('a_materno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="correo_electronico" class="form-label">{{ __('Correo Electronico') }}</label>
            <input type="text" name="correo_electronico" class="form-control @error('correo_electronico') is-invalid @enderror" value="{{ old('correo_electronico', $usuario?->correo_electronico) }}" id="correo_electronico" placeholder="Correo Electronico">
            {!! $errors->first('correo_electronico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contraseña" class="form-label">{{ __('Contraseña') }}</label>
            <input type="text" name="contraseña" class="form-control @error('contraseña') is-invalid @enderror" value="{{ old('contraseña', $usuario?->contraseña) }}" id="contraseña" placeholder="Contraseña">
            {!! $errors->first('contraseña', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="rol_id" class="form-label">{{ __('Rol Id') }}</label>
            <input type="text" name="rol_id" class="form-control @error('rol_id') is-invalid @enderror" value="{{ old('rol_id', $usuario?->rol_id) }}" id="rol_id" placeholder="Rol Id">
            {!! $errors->first('rol_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>