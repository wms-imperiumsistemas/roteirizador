@include('includes.header')


<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">ADICIONAR PRAÇA</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row" >
            <a href="{{route('listagem.praca')}}" class="btn btn-secondary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                <span class="text">LISTAGEM</span>
            </a>
        </div>
    </div>

    <div class="container-fluid">
        <form class="" method="post" action="{{route('layout.atualizarPraca', $praca->id)}}" >
            {{ csrf_field() }}

            @include('formularios.formularioPraca')
            <div align="middle">
                <p class="mb-4"></p>
                <p class="mb-4"></p>
                <button class="btn btn-success btn-icon-split-lg" >Salvar</button>
            </div>
        </form>
    </div>


@include('includes.footer')
