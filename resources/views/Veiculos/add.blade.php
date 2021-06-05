@include('partials.header')

<div class="container mx-auto card">
  <div class="card-header">
    <h1>Adicionar Veiculo</h1>
  </div>
  <div class="card-body">
    <form action=" {{ route('VeiculoController.store') }} " method="POST">
      @csrf
      <input name="modelo_car" class="form-control my-4" placeholder="Modelo" type="text">
      <input name="fabricante_car" class="form-control my-4" placeholder="Fabricante" type="text">
      <input name="cor_car" class="form-control my-4" placeholder="Cor" type="text">
      <input name="ano_car" class="form-control my-4" placeholder="Ano" type="text">
      <input name="preco_car" class="form-control my-4" placeholder="Preço" type="text">
      <input name="chassi_car" class="form-control my-4" placeholder="Chassi" type="text">
      <div class="flex">
        <button class="btn btn-success" type="submit">Criar</button>
        <button class="btn btn-danger" type="button">Cancelar</button>
      </div>
    </form>
  </div>
</div>

@include('partials.footer')