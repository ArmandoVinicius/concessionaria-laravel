@include('partials.header')

<div class="container my-4 card">
  <div class="card-header">
    <h1>Login</h1>
  </div>
  <div class="card-body">
    <form action=" {{ route('auth') }} " method="POST">
      @csrf
      <div class="form-floating my-4">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="nome@exemplo.com">
        <label for="floatingInput">E-mail</label>
      </div>
      <div class="form-floating my-4">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Senha">
        <label for="floatingPassword">Senha</label>
      </div>
      <button class="btn btn-success" type="submit">Entrar <i class="fas fa-sign-in-alt"></i></button>
    </form>
  </div>
</div>

@include('partials.footer')