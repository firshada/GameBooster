<header class="p-4 mb-3 border-bottom" style="background-color: #0B9BB4">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img id="MDB-logo" src="images/gb.png" alt="Game Booster" draggable="false" height="30" style="scale: 250%; margin-right: 40px"/>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 text-white">Home</a></li>
        <li><a href="/news" class="nav-link px-2 text-white">News</a></li>
        <li><a href="/topup" class="nav-link px-2 text-white">Top Up</a></li>
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>

      <div class="dropdown text-end">
        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.clipartkey.com%2Fmpngs%2Fm%2F152-1520367_user-profile-default-image-png-clipart-png-download.png&f=1&nofb=1&ipt=cf4d1429d8a70d6dae9fd6cdb00548755754d49ee04b9d8109605c8a54e14cae&ipo=images" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Logout</button>
          </form>
        </ul>
      </div>
    </div>
  </div>
</header>