<nav class="navbar navbar-expand fixed-top be-top-header">
<div class="container-fluid">
  <div class="be-navbar-header"><a class="navbar-brand" href="{{ route('dashboard.index') }}"></a>
  </div>
  <div class="be-right-navbar">
    <ul class="nav navbar-nav float-right be-user-nav">
      <li class="nav-item dropdown show">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="true">
        	<img src="/images/avatar.png" alt="Avatar">
        	<span class="user-name">Putheng</span>
        </a>
        <div class="dropdown-menu" role="menu">
			<div class="user-info">
				<div class="user-name">Putheng</div>
			</div>
			<a class="dropdown-item" href="pages-profile.html">
				<span class="icon mdi mdi-face"></span> Account
			</a>
			<a class="dropdown-item" href="{{ route('app.new') }}">
				<span class="icon mdi mdi-playlist-plus"></span>New App
			</a>
			<a class="dropdown-item" href="{{ route('login') }}">
				<span class="icon mdi mdi-power"></span>Logout
			</a>
        </div>
      </li>
    </ul>
    <div class="page-title"><span>Dashboard</span></div>
    
  </div>
</div>
</nav>