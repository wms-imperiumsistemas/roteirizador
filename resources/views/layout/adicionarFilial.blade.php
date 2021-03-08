@include('includes.header')

<div class="row">
  <h2><center> TELA CADASTRO DE FILIAIS </center></h2>
</div>

<div class="container">
  <div class="row">
      <form class="" method="post" action="{{route('layout.salvarFilial')}}" >
        {{ csrf_field() }}

        @include('formularios.formularioFilial')

        <button class="btn deep-orange">SALVAR</button>
        <a href="{{route('listagem.filiais')}}" class="btn deep-green">VOLTAR LISTAGEM</a>

      </form>
  </div>
</div>


@include('includes.footer')
