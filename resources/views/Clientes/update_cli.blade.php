@include('partials.header')

<div class="container mx-auto card">
  <div class="card-header">
    <h1>Atualizar Cliente</h1>
  </div>
  <div class="card-body">
      @foreach($clientes as $cliente)
    <form action="{{ route('ClienteController.update', [ 'id' => $cliente->id ]) }}" method="POST">
      @csrf
      <input name="nome_cli" class="form-control my-4" value="{{ $cliente->nome_cli }}" placeholder="Nome" type="text">
      <input name="email_cli" class="form-control my-4" value="{{ $cliente->email_cli }}" placeholder="E-mail" type="email">
      <input name="cpf_cli" class="form-control my-4" value="{{ $cliente->cpf_cli }}" placeholder="CPF" type="text">
      <input name="telefone_cli" class="form-control my-4" value="{{ $cliente->telefone_cli }}" placeholder="Telefone" type="text">
      <input name="rg_cli" class="form-control my-4" value="{{ $cliente->rg_cli }}" placeholder="RG" type="text">
      <input name="cidade_cli" class="form-control my-4" value="{{ $cliente->cidade_cli }}" placeholder="Cidade" type="text">
      <input name="estado_cli" class="form-control my-4" value="{{ $cliente->estado_cli }}" placeholder="Estado" type="text">
      <input name="cnh_cli" class="form-control my-4" value="{{ $cliente->cnh_cli }}" placeholder="CNH" type="text">
      <div>
        <button class="btn btn-success" type="submit">Atualizar</button>
        <button class="btn btn-danger" type="button">Cancelar</button>
      </div>
    </form> 
      @endforeach
  </div>
</div>

@include('partials.footer')