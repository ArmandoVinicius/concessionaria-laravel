@include('partials.header')

<div class="container mx-auto card">
  <div class="card-body">
    <form>
      @csrf
      <input name="email" class="form-control my-4" placeholder="E-mail" type="text">
      <input name="senha" class="form-control my-4" placeholder="Senha" type="password">
      <button class="btn btn-success" type="submit">Criar</button>
    </form>
  </div>
</div>

@include('partials.footer')