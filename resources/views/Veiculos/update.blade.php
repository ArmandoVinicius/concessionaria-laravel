@include('partials.header')

<div class="container mx-auto card">
  <div class="card-header">
    <h1>Atualizar Veiculo</h1>
  </div>
  <div class="card-body">
      @foreach($veiculos as $veiculo)
    <form action="{{ route('VeiculoController.update', [ 'id' => $veiculo->id ]) }}" method="POST">
      @csrf
      <input name="modelo_car" class="form-control my-4" value="{{ $veiculo->modelo_carro }}" placeholder="Modelo" type="text">
      <input name="fabricante_car" class="form-control my-4" value="{{ $veiculo->fabricante_carro }}" placeholder="Fabricante" type="text">
      <input name="cor_car" class="form-control my-4" value="{{ $veiculo->cor_carro }}" placeholder="Cor do veículo" type="text">
      <input name="ano_car" class="form-control my-4" value="{{ $veiculo->ano_carro }}" placeholder="Ano de fabricação" type="text">
      <input name="preco_car" class="form-control my-4" value="{{ $veiculo->preco_carro }}" placeholder="Preço do veículo" type="text">
      <input name="chassi_car" class="form-control my-4" value="{{ $veiculo->chassi_carro }}" placeholder="Nº do Chassi" type="text">
      <div class="row">
        <button class="btn btn-success" type="submit">Atualizar</button>
        <button class="btn btn-danger" type="button">Cancelar</button>
      </div>
    </form>
      @endforeach
  </div>
</div>

@include('partials.footer')