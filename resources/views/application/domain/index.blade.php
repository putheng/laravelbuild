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
							Domain Management
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#subdomain" data-toggle="tab" role="tab" aria-selected="true">
							Subdomain
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<h4>Point domain to your app</h4>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group pt-2">
									<label for="inputEmail">Primary Domain</label>
									<input class="form-control" id="inputEmail" type="email" placeholder="examlpe.com">
								</div>
								<input type="submit" class="btn btn-primary" value="Submit">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="subdomain" role="tabpanel">
						<h4>Addtional Domain</h4>
						<div class="row">
							<div class="col-md-4">
							@if(true)
								<div class="form-group pt-2">
									<label for="inputEmail">Subdomain</label>
									<input class="form-control" id="inputEmail" type="email" placeholder="sub.examlpe.com">
								</div>
								<input type="submit" class="btn btn-primary" value="Add Domain">
							@else
								<p>You don't primary domain!</p>
								<p>Please add your primary domain first before add subdomain</p>

							@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
