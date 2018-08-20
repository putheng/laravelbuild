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
							Backup
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<h4>List of available backup of your hosting account and database</h4>
						<br>
						@if(true)
							<table class="table table-bordered table-striped text-center">
								<thead>
									<th>File</th>
									<th>Size</th>
									<th>Type</th>
									<th>Backup Date</th>
									<th>Action</th>
								</thead>
								<tr>
									<td>Backup-10-07-2018.sql.zip</td>
									<td>21 MB</td>
									<td>Mysql Database</td>
									<td>10/07/2018 06:12 PM</td>
									<td>
										<a href="#" class="btn btn-primary btn-sm">
											<span class="glyphicon glyphicon-download-alt"></span> Download
										</a>
										&nbsp;&nbsp;
										<a href="#" class="btn btn-danger btn-sm">Delete</a>
									</td>
								</tr>
								<tr>
									<td>Backup-10-07-2018.zip</td>
									<td>21 MB</td>
									<td>Root files</td>
									<td>10/07/2018 06:12 PM</td>
									<td>
										<a href="#" class="btn btn-primary btn-sm">
											<span class="glyphicon glyphicon-download-alt"></span> Download
										</a>
										&nbsp;&nbsp;
										<a href="#" class="btn btn-danger btn-sm">Delete</a>
									</td>
								</tr>
							</table>
						@else
							<p>You don't have any backup.</p>
						@endif
							<br>
							<input type="button" class="btn btn-success btn-lg" value="Backup Now">
							<br><br>
							<p><strong>Please Note:</strong> New backup will be delete previous backup.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
