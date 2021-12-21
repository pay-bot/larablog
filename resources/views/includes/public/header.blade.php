<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Kelompok 5</strong>
      </a>
      @auth
      <a href="/home" class="btn btn-primary">Dashboard</a>   
      @endauth
      @guest
      <a href="/login" class="btn btn-primary">Login</a>
      @endguest
      
      
    </div>
  </div>
</header>