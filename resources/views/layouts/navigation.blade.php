<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Imunisasi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link{{ request()->is('/') ? ' active' : ''}} "href="/">Home <span aria-current="page"> </span></a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link{{ request()->is('informasi') ? ' active' : ''}} "href="/informasi">Informasi</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link{{ request()->is('posts') ? ' active' : ''}}" href="/posts">Informasi</a>
          </li>

          <li class="nav-item">
            <a class="nav-link{{ request()->is('bayis') ? ' active' : ''}} "href="/bayis">Data Bayi</a>
          </li>

          <li class="nav-item">
            <a class="nav-link{{ request()->is('imunisasis') ? ' active' : ''}} "href="/imunisasis">Data Imunisasi</a>
          </li>

          <li class="nav-item">
            <a class="nav-link{{ request()->is('anggota') ? ' active' : ''}} "href="/anggota">Data Anggota</a>
          </li>

          <li class="nav-item">
            <a class="nav-link{{ request()->is('rekaps') ? ' active' : ''}} "href="/rekaps">Rekap Imunisasi</a>
          </li>

          <li class="nav-item">
            <a class="nav-link{{ request()->is('login') ? ' active' : ''}}" href="/login">Login</a>
          </li>

          
      </div>
    </div>
  </nav>