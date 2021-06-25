@include('partials.header')

<div class="container my-4 card">
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
      <div class="input-group my-4">
        <span class="input-group-text">R$</span>
        <input type="text" class="form-control" name="preco_car" placeholder="Preço" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-text">,00</span>
      </div>
      <input name="chassi_car" class="form-control my-4" placeholder="Chassi" type="text">
      <div class="flex">
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Criar</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Veiculo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Veículo adicionado com <span class="text-success">sucesso</span>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Salvar</button>
              </div>
            </div>
          </div>
        </div>        
        <button class="btn btn-danger" type="button">Cancelar</button>
      </div>
    </form>
  </div>
</div>

@include('partials.footer')