@extends('layouts.auth.app')

@section('content')
    <div  class="col-lg-6 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{route('login')}}">
            @csrf
            <div  class="card ">
                <div class="card-header ">
                    <div class="card-header ">
                        <h3 class="header text-center nomargin nopadding">Arquivo Histórico</h3>
                        <h4 class=" text-center nomargin nopadding">São Bento do Sul</h4>
                    </div>
                    <div class="card-header ">
                        
                        <p class="text-center size-12 nopadding nomargin margin-bottom-4">
                            Esqueceu a senha? Não se preocupe, informe o CPF cadastrado.
                        </p>
                        <p class="text-center size-12">
                            Você receberá uma mensagem no seu e-mail com as instruções para redefinir a senha. Não esqueça de verificar em Spam. 
                        </p>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="input-group">
                        <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="nc-icon nc-single-02"></i>
                              </span>
                        </div>
                        <input type="text" name="username" class="form-control" placeholder="CPF" />
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-6 size-12 pl-3">
                            <a href="{{route('register.show')}}">Cadastrar-se</a>
                        </div>
                        <div class="col-lg-6 size-12 text-right pr-4">
                            <a href="{{route('login')}}">Voltar para o login</a>
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