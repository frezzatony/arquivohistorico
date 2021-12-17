@extends('layouts.auth.app')

@section('content')

    <div  class="col-lg-6 col-md-6 ml-auto mr-auto">
        
        <form class="form" method="post" action="{{route('register.store')}}">
            @csrf
            <div  class="card ">
                <div class="card-header ">
                    <div class="card-header ">
                        <h3 class="header text-center nomargin nopadding">Arquivo Histórico</h3>
                        <h4 class=" text-center nomargin nopadding">São Bento do Sul</h4>
                        <p class=" text-center nomargin nopadding size-16">Registre-se para ter acesso ao sistema</p>
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
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nome completo</label>
                        <input type="text" class="form-control" name="name" placeholder="Nome" value="{{old('name')}}" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" name="cpf" placeholder="Cpf" value="{{old('cpf')}}" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" placeholder="E-mail" value="{{old('email')??'aaa@aaa.com'}}" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="password" placeholder="Senha"  />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Repetir senha</label>
                        <input type="password" class="form-control" name="password_confirm" placeholder="Confirme a senha"/>
                      </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-12 size-12 text-right pr-4">
                            <a href="{{route('login')}}">Voltar para o login</a>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <button type="sbmit" class="btn btn-warning btn-round btn-block mb-3">Registrar-se</button>
                </div>
            </div>
        </form>
    </div>


@endsection