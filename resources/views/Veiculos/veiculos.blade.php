@include('partials.header')

<div class="container">
    <h2 class="mt-4">Nossos veículos:</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4 mx-4 m-2">
        @foreach($veiculos as $veiculo)
            <div class="col">
                <div class="card">
                    <img src="assets/icone1.jpeg" class="card-img-top" alt="Carrosada">
                    <div class="card-body">
                        <ul class="list-group list-group-flush m-8">
                            <li class="list-group-item" scope="row"><strong>Modelo:</strong> {{ $veiculo->modelo_carro }}</li>
                            <li class="list-group-item"><strong>Fabricante:</strong> {{ $veiculo->fabricante_carro }}</li>
                            <li class="list-group-item"><strong>Cor:</strong> {{ $veiculo->cor_carro }}</li>
                            <li class="list-group-item"><strong>Ano:</strong> {{ $veiculo->ano_carro }}</li>
                            <li class="list-group-item"><strong>Preço:</strong> R${{ $veiculo->preco_carro }}</li>
                            @if($veiculo->esta_disponivel == 1)
                                <li class="list-group-item text-success"><strong>Está disponivel</strong></li>
                            @else
                                <li class="list-group-item text-danger"><strong>Não está disponivel</strong></li>
                            @endif
                        </ul>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <small class="text-muted"><a href="#" class="btn btn-primary mx-auto">Reservar</a></small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('partials.footer')