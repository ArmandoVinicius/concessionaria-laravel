@include('partials.header')

<div class="container my-4 card">
  <div class="card-header">
    <h1>Adicionar Cliente</h1>
  </div>
  <div class="card-body">
    <form action=" {{ route('ClienteController.store') }} " method="POST">
      @csrf
      <input name="nome_cli" class="form-control my-4" placeholder="Nome" type="text">
      <input name="email_cli" class="form-control my-4" placeholder="E-mail" type="email">
      <input name="cpf_cli" class="form-control my-4" placeholder="CPF" type="text">
      <input name="telefone_cli" class="form-control my-4" placeholder="Telefone" type="text">
      <input name="rg_cli" class="form-control my-4" placeholder="RG" type="text">
      <input name="cidade_cli" class="form-control my-4" placeholder="Cidade" type="text">
      <input name="estado_cli" class="form-control my-4" placeholder="Estado" type="text">
      <input name="cnh_cli" class="form-control my-4" placeholder="CNH" type="text">
      <div class="flex">
      <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Criar</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Cliente adicionado com <span class="text-success">sucesso</span>
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