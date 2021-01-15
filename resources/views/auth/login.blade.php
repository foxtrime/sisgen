
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" style="padding-top: 5%">
        <div class="col-sm-2">
        </div>
        <div class="col-sm">
            <div class="card">
                <div class="card-body">
                <form action="{{url('/login')}}" method="POST">
                    {{ csrf_field()}}
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                          <label for="password">Senha</label>
                          <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <center><button type="submit" class="btn btn-primary">Entrar</button></center>
                      </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
        </div>
    </div>
</div>
    
    @endsection