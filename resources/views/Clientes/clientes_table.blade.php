@include('partials.header')

<div class="m-4">
  <div class="card">
    <a href="/add_cliente">
      <button class="btn btn-primary mt-4 ms-3">Adicionar</button>
    </a>
  <div class="card-body">
  <table id="table" class="table">
    <thead>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">RG</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">CNH</th>
      <th scope="col">Ação</th>
    </thead>
    <tbody>
      @foreach($clientes as $cliente)
      <tr>
          <td scope="row">{{ $cliente->id }}</td>
          <td>{{ $cliente->nome_cli }}</td>
          <td>{{ $cliente->email_cli }}</td>
          <td>{{ $cliente->cpf_cli }}</td>
          <td>{{ $cliente->telefone_cli }}</td>
          <td>{{ $cliente->rg_cli }}</td>
          <td>{{ $cliente->cidade_cli }}</td>
          <td>{{ $cliente->estado_cli }}</td>
          <td>{{ $cliente->cnh_cli }}</td>
          <td class="block">
            <form action=" {{ route('ClienteController.delete', [ 'id' => $cliente->id ]) }} " method="POST">
              @csrf
              <button class="btn btn-danger" type="submit">Deletar</button> 
              <a href="{{route('ClienteController.show', [ 'id' => $cliente->id ])}}">
                <button class="btn btn-primary" type="button">Editar</button>
              </a>
            </form>
          </td>
      </tr>
        @endforeach
    </tbody>
  </table>
    </div>
  </div>
</div>

@include('partials.footer')