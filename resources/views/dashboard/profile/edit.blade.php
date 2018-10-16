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
							Edit your profile
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<br>
						
							<div class="row">
								<div class="col-md-6">
								<form action="{{ route('dashboard.profile.edit') }}" method="post">
									{{ csrf_field() }}
									<div class="form-group">
										<label class="control-label{{ $errors->has('name') ? ' text-danger': '' }}">Name</label>
										<input value="{{ old('name') ?? auth()->user()->name }}" name="name" type="text" class="form-control form-control-sm{{ $errors->has('name') ? ' is-invalid': '' }}">
										@if($errors->has('name'))
											<p class="text-danger">{{ $errors->first('name') }}</p>
										@endif
									</div>

									<div class="form-group">
										<label class="control-label{{ $errors->has('phone') ? ' text-danger': '' }}">Phone</label>
										<input value="{{ old('phone') ?? optional($profile)->phone }}" name="phone" type="text" class="form-control form-control-sm{{ $errors->has('phone') ? ' is-invalid': '' }}">
										@if($errors->has('phone'))
											<p class="text-danger">{{ $errors->first('phone') }}</p>
										@endif
									</div>

									<div class="form-group">
										<label class="control-label{{ $errors->has('company') ? ' text-danger': '' }}"> Company</label>
										<input value="{{ old('company') ?? optional($profile)->company }}" name="company" type="text" class="form-control form-control-sm{{ $errors->has('company') ? ' is-invalid': '' }}">
										@if($errors->has('company'))
											<p class="text-danger">{{ $errors->first('company') }}</p>
										@endif
									</div>

									<div class="form-group">
										<label class="control-label{{ $errors->has('address') ? ' text-danger': '' }}"> Address</label>
										<textarea name="address" class="form-control{{ $errors->has('address') ? ' is-invalid': '' }}">{{ old('address') ?? optional($profile)->address }}</textarea>
										@if($errors->has('address'))
											<p class="text-danger">{{ $errors->first('address') }}</p>
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
