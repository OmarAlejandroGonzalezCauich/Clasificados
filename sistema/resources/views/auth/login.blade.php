@extends('auth.contenido')

@section('login')
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-group mb-0">
          <div class="card p-4">
            <form class="form-horizontal was-validated" methods="POST" action="{{ route('login')}}">
            {{ csrf_field() }}
                <div class="card-body">
                <h1>Acceder</h1>
                <p class="text-muted">Control de acceso al sistema</p>
                <div class="input-group mb-3{{ $errors->has('name' ? 'is-invalid' : '' )}}">
                    <span class="input-group-addon"><i class="icon-user"></i></span>
                    <input type="text" value="{{old('name')}}" name="name" id="name" class="form-control" placeholder="name">
                    {!!$errors->first('name','<span class="invalid-feedback">:message</span>')!!}
                </div><br/>
                <div class="input-group mb-4 {{ $errors->has('password' ? 'is-invalid' : '' ) }}">
                    <span class="input-group-addon"><i class="icon-lock"></i></span>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="row">
                    <div class="col-6">
                    <button type="submit" class="btn btn-primary px-4">Acceder</button>
                    </div>
                    <div class="card-body text-center">
                    <button type="button" class="btn btn-link px-0">Olvidaste tu password?</button>
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
