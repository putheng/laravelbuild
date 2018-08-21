@extends('layouts.dashboard')

@section('content')
<div class="page-head no-padding">
	<h2 class="page-head-title">Your application name</h2>
	<nav aria-label="breadcrumb" role="navigation">
		<ol class="breadcrumb page-head-nav">
			<li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('app.lists') }}">Applications</a></li>
		</ol>
	</nav>
</div>
<br>
<div class="row">
	<div class="col-12 col-lg-12">
		<div class="card">
			<div class="tab-container">
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active show text-uppercase" href="#primary" data-toggle="tab" role="tab" aria-selected="false">
							SSL MANAGEMENT
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#download" data-toggle="tab" role="tab" aria-selected="false">
							download csr
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#install" data-toggle="tab" role="tab" aria-selected="false">
							install csr
						</a>
					</li>

				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
					@if(false)
						<h4>Manage your SSL certificate for your application.</h4>
						<br>
						<p>Create a Certificate Signing Request (CSR) on the server by providing information about your application.<br> This will override any existing CSR and private key generated earlier.</p>
						<br>
						<a href="{{ route('app.manage.ssl.create', $project) }}" class="btn btn-primary text-uppercase">create csr</a>
						<br><br>
					@else

						<div class="row">
							<div class="col-md-4">
								<br>
								<p>Create a Certificate Signing Request (CSR) on the server by providing information about your application.<br> This will override any existing CSR and private key generated earlier.</p>
								
								<br>
								<a class="btn btn-warning text-uppercase" href="{{ route('app.manage.ssl.create', $project) }}">re-create csr</a>
								<br><br>
							</div>
						</div>
					@endif
					</div>

					<div class="tab-pane" id="download" role="tabpanel">
						<br>
						<p>Download the Certificate Signing Request (CSR) created on<br> the server and use it to create an SSL certificate.</p>
						
						<br>
						@if(false)
							<a href="#" class="btn btn-info text-uppercase">download csr</a>
						@else
							<a href="{{ route('app.manage.ssl.create', $project) }}" class="btn btn-primary text-uppercase">create csr</a>
						@endif
						<br><br>
					</div>

					<div class="tab-pane" id="install" role="tabpanel">
						<br>
						<p>Install your SSL and CA (Intermediary) certificates on your application.</p>

						<br>
						@if(false)
							<a href="#" class="btn btn-success text-uppercase">install csr</a>
						@else
							<a href="{{ route('app.manage.ssl.create', $project) }}" class="btn btn-primary text-uppercase">create csr</a>
						@endif
						<br><br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
