@extends('layouts.auth.app')

@section('content')

    <div  class="col-lg-5 col-md-6 ml-auto mr-auto padding-top-60">
        <form class="form" method="post" action="{{route('login')}}">
            @csrf
            <div  class="card ">
                <div class="card-header ">
                    <div class="card-header ">
                        <h3 class="header text-center nomargin nopadding">Arquivo Histórico</h3>
                        <h4 class=" text-center nomargin nopadding">São Bento do Sul</h4>
                    </div>
                </div>
                @if($errors->any())
                    
                        <div class="col-lg-12 ">
                            <div class="alert alert-danger alert-dismissible fade show">
                              <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="nc-icon nc-simple-remove"></i>
                              </button>
                              <ul>
                                @foreach($errors->all() as $error)
                                
                                    <li class="size-12">{{$error}}</li>
                                
                                @endforeach
                              </ul>
                            </div>
                        </div>
                    
                    
                @endif
                <div class="card-body ">
                    <div class="input-group">
                        <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="nc-icon nc-single-02"></i>
                              </span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="CPF" />
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="nc-icon nc-key-25"></i>
                          </span>
                        </div>
                        <input type="password" name="password" placeholder="Senha" class="form-control">
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-6 size-12 pl-3">
                            <a href="{{route('register.show')}}">Cadastrar-se</a>
                        </div>
                        <div class="col-lg-6 size-12 text-right pr-4">
                            <a href="{{route('auth.forgot-password.show')}}">Esqueceu a senha?</a>
                        </div>
                    </div>
                    
                </div>
                <div class="card-footer ">
                    <button type="sbmit" class="btn btn-warning btn-round btn-block mb-3">Acessar</button>
                    
                </div>
            </div>
        </form>
    </div>

@endsection