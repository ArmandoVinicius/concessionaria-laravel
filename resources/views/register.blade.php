@include('partials.header')

<div class="container mx-auto card">
  <div class="card-body">
    <form action=" {{ route('register') }} " method="POST">
      @csrf
      <input name="name" class="form-control my-4" placeholder="E-mail" type="text">
      <input name="email" class="form-control my-4" placeholder="Senha" type="emai">
      <input name="password" class="form-control my-4" placeholder="Senha" type="password">
      <button class="btn btn-success" type="submit">Criar</button>
    </form>
  </div>
</div>

@include('partials.footer')