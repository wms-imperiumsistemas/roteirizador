@include('includes.header')

<div class="row">
  <h2><center> TELA CADASTRO DE VEICULOS </center></h2>
</div>

<div class="container">
  <div class="row">
      <form class="" action="{{route('layout.salvar')}}" method="post" >
        {{ csrf_field() }}

        @include('formularios.formulariosVeiculos')

        <button class="btn deep-orange">SALVAR</button>
        <a href="{{route('listagem.veiculo')}}" class="btn deep-green">VOLTAR LISTAGEM</a>

      </form>
  </div>
</div>


@include('includes.footer')
