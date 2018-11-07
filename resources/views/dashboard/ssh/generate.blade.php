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
							SSH Keys
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<h5>Add SSH key to your account.</h5>

						<br>
						
							<div class="row">
								<div class="col-md-6">
								<form action="{{ route('dashboard.ssh.generate') }}" method="post">
									{{ csrf_field() }}
									<div class="form-group">
										<label class="control-label{{ $errors->has('name') ? ' text-danger' : '' }}">Name</label>
										<input name="name" type="text" class="form-control form-control-sm{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="SSH name ..." value="{{ old('name') }}">
										@if($errors->has('name'))
											<p class="text-danger">{{ $errors->first('name') }}</p>
										@endif
									</div>

									<div class="form-group">
										<label class="control-label{{ $errors->has('key') ? ' text-danger' : '' }}">SSH Keys</label>
										<textarea name="key" rows="4" class="form-control{{ $errors->has('key') ? ' is-invalid' : '' }}">{{ old('key') }}</textarea>
										@if($errors->has('key'))
											<p class="text-danger">{{ $errors->first('key') }}</p>
										@endif
									</div>

									<input type="submit" value="Submit" class="btn btn-primary">
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
