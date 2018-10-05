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
						<a class="nav-link {{ $errors->has('appname') ? ' has-error' : 'active show' }} text-uppercase" href="#primary" data-toggle="tab" role="tab" aria-selected="false">
							Application settings
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#config" data-toggle="tab" role="tab" aria-selected="true">
							environments
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ $errors->has('appname') ? ' active show' : '' }} text-uppercase" href="#delete" data-toggle="tab" role="tab" aria-selected="true">
							Delete
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane {{ $errors->has('appname') ? ' has-error' : 'active show' }}" id="primary" role="tabpanel">
						<h4>Configure several application specific settings for your web app.</h4>

						<div class="row">
							<div class="col-md-4">
								<div class="form-group pt-2">
									<label for="Webroot">Webroot</label>
									<input class="form-control" id="Webroot" type="email" placeholder="/public">
								</div>
								<div class="form-group pt-2">
									<label for="php">PHP Version</label>
									<select name="php_version" class="form-control">
										<option value="7.2">7.2</option>
										<option value="7.0">7.1</option>
										<option value="7.0">7.0</option>
										<option value="6.5">6.5</option>
									</select>
								</div>


								<input type="submit" class="btn btn-primary" value="Save change">
							</div>
						</div>
					</div>

					<div class="tab-pane" id="config" role="tabpanel">
						<h4>Config app environments</h4>
						<br>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
<textarea class="form-control" rows="20"></textarea>
								</div>


								<input type="submit" value="SUBMIT" class="btn btn-primary">
							</div>
						</div>
					</div>

					<div class="tab-pane{{ $errors->has('appname') ? ' active show' : '' }}" id="delete" role="tabpanel">
						<h4>Delete your application</h4>
						<br>
						<div class="row">
							<div class="col-md-6">
							<form action="{{ route('app.manage.destroy', $project) }}" method="post">
								@csrf
								<div class="form-group">
									<label class="label-control">{{ $project->name }}</label>
									<input value="{{ old('appname') }}" name="appname" type="text" class="form-control form-control-sm{{ $errors->has('appname') ? ' is-invalid' : '' }}" placeholder="Enter your application name">
									@if($errors->has('appname'))
										<br><span class="text-danger">{{ $errors->first('appname') }}</span>
									@endif
								</div>


								<input type="submit" value="DELETE" class="btn btn-danger">
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
