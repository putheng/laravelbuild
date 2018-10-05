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
							Deploy keys
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<h5>Setup SSH keys to deploy code via Git</h5>

						<br>

						@if(true)
							<div class="row">
								<div class="col-md-6">
									<table class="table table-bordered table-striped">
										<thead>
											<th>Name</th>
											<th>Date</th>
											<th class="text-center">Action</th>
										</thead>
										<tbody>
											<tr>
												<td>SSH primary</td>
												<td>20-july-2018</td>
												<td class="text-center">
													<a href="#" class="btn btn-danger btn-sm">Delete</a>
													&nbsp; &nbsp;
													<a href="{{ route('dashboard.ssh.view') }}" class="btn btn-info btn-sm">View</a>
												</td>
											</tr>
										</tbody>
									</table>
									<br>
									<a href="{{ route('dashboard.ssh.generate') }}" class="btn btn-info">Generate new SSH</a>
								</div>
							</div>
						@else
							<p>Your Git repository should support Git over SSH.<br> SSH Keys identify your server without the need of passwords.<br> You will first need to generate and download SSH Keys. It’s very easy.<br> Just click the button below.</p>

						<br>

						<br>
						<a href="{{ route('dashboard.ssh.generate') }}" class="btn btn-success btn-lg text-uppercase">generate ssh keys </a>
						<br><br>
						<br>

						@endif

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
