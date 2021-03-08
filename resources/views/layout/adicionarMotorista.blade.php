@include('includes.header')

<div class="row">
  <h2><center> TELA CADASTRO DE MOTORISTAS </center></h2>
</div>

<div class="container">

  <div class="row">
      <form class="" action="{{route('layout.salvarMotorista')}}" method="post" >
        {{ csrf_field() }}

        @include('formularios.formulariosMotoristas')

        <button class="btn deep-orange">SALVAR</button>
        <a href="{{route('listagem.motorista')}}" class="btn deep-green">VOLTAR LISTAGEM</a>

      </form>
  </div>
</div>


@include('includes.footer')
