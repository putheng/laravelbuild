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
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<h4>Create CSR</h4>
						<br>
						
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Common Name</label>
									<input type="text" name="country" class="form-control form-control-sm" placeholder="putheng.com ( must be your domain name! )">
								</div>
								<div class="form-group">
									<label class="control-label">Organization (in English)</label>
									<input type="text" name="country" class="form-control form-control-sm" placeholder="PUTHENG.COM">
								</div>
								<div class="form-group">
									<label class="control-label">Department</label>
									<input type="text" name="country" class="form-control form-control-sm" placeholder="IT Dept">
								</div>
								<div class="form-group">
									<label class="control-label">City</label>
									<input type="text" name="country" class="form-control form-control-sm" placeholder="City name">
								</div>
								<div class="form-group">
									<label class="control-label">State</label>
									<input type="text" name="country" class="form-control form-control-sm" placeholder="State name">
								</div>
								<div class="form-group">
									<label class="control-label">Email</label>
									<input type="text" name="country" class="form-control form-control-sm" placeholder="youremail@example.com">
								</div>
								<div class="form-group">
									<label class="control-label">Country</label>
									<select name="country" class="form-control form-control-sm">
										<option value="">--select country--</option>
									</select>
								</div>
								<input type="submit" class="btn btn-success btn-lg text-uppercase" value="submit">
								&nbsp;&nbsp;
								<a href="{{ route('app.manage.ssl.index', $project) }}" class="btn btn-info btn-lg text-uppercase">back</a>
								<br><br>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
