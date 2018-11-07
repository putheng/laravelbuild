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
							Manage your SSH Keys
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<h5>Update your SSH Key</h5>

						<br>
						
							<div class="row">
								<div class="col-md-6">
								<form action="{{ route('dashboard.ssh.view', $ssh) }}" method="post">
									{{ csrf_field() }}
									<div class="form-group">
										<label class="control-label">Name</label>
										<input name="name" type="text" class="form-control form-control-sm" placeholder="SSH name ..." value="{{ $ssh->name }}">
									</div>

									<div class="form-group">
										<label class="control-label">SSH Keys</label>
										<textarea name="key" rows="4" class="form-control">{{ $ssh->key }}</textarea>
									</div>

									<input type="submit" value="Update" class="btn btn-primary">
									&nbsp;&nbsp;
									<a href="{{ route('dashboard.ssh.index') }}" class="btn btn-danger">Cancel</a>
								</form>
								</div>
							</div>
						

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
