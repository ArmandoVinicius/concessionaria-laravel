@include('partials.header')

<div class="container mx-auto">
  <div class="card">
  <a href="/add">
    <button class="btn btn-primary">Adicionar</button>
  </a>
  <div class="card-body">
  <table id="table" class="table">
    <thead>
      <th scope="col">#</th>
      <th scope="col">Modelo</th>
      <th scope="col">Fabricante</th>
      <th scope="col">Cor</th>
      <th scope="col">Ano</th>
      <th scope="col">Preço</th>
      <th scope="col">Chassi</th>
      <th scope="col">Ação</th>
    </thead>
    <tbody>
        @foreach($veiculos as $veiculo)
      <tr>
          <td scope="row">{{ $veiculo->id }}</td>
          <td>{{ $veiculo->modelo_carro }}</td>
          <td>{{ $veiculo->fabricante_carro }}</td>
          <td>{{ $veiculo->cor_carro }}</td>
          <td>{{ $veiculo->ano_carro }}</td>
          <td>{{ $veiculo->preco_carro }}</td>
          <td>{{ $veiculo->chassi_carro }}</td>
          <td class="block">
            <form action=" {{ route('VeiculoController.delete', [ 'id' => $veiculo->id ]) }} " method="POST">
              @csrf
              <button class="btn btn-danger" type="submit">Deletar</button> 
              <a href="{{route('VeiculoController.show', [ 'id' => $veiculo->id ])}}">
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