@extends('layouts.dashboard')

@section('content')
<div class="page-head no-padding">
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
							Update your password
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<h5>It’s a good ideas to use a strong password that you don’t use elsewhere.</h5>

						<br>
						
							<div class="row">
								<div class="col-md-6">
								<form action="{{ route('dashboard.password') }}" method="post">
									{{ csrf_field() }}
									<div class="form-group">
										<label class="control-label{{ $errors->has('current_password') ? ' text-danger': '' }}">Current password</label>
										<input name="current_password" type="text" class="form-control form-control-sm{{ $errors->has('current_password') ? ' is-invalid': '' }}">
										@if($errors->has('current_password'))
											<p class="text-danger">{{ $errors->first('current_password') }}</p>
										@endif
									</div>

									<div class="form-group">
										<label class="control-label{{ $errors->has('current_password') ? ' text-danger': '' }}">New password</label>
										<input name="password" type="text" class="form-control form-control-sm{{ $errors->has('current_password') ? ' is-invalid': '' }}">
										@if($errors->has('password'))
											<p class="text-danger">{{ $errors->first('password') }}</p>
										@endif
									</div>

									<div class="form-group">
										<label class="control-label{{ $errors->has('password_confirmation') ? ' text-danger': '' }}">New password again</label>
										<input name="password_confirmation" type="text" class="form-control form-control-sm{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}">
										@if($errors->has('password_confirmation'))
											<p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
										@endif
									</div>

									<input type="submit" value="Submit" class="btn btn-primary">
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
