<div id="header">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="/img/logo-seedata.svg" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Donators</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sustainable Goals</a>
        </li>
      </ul>
    </div>
    <div class="user">
      <span class="user--initials">{{ substr(Auth::user()->name, 0, 1)}}</span>
      <span class="user--email">{{ Auth::user()->name }}</span>
    </div>
  </nav>
</div>
