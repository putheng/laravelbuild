@extends('layouts.dashboard')

@section('content')
<div class="page-head no-padding">
	<nav aria-label="breadcrumb" role="navigation">
		<ol class="breadcrumb page-head-nav">
			<li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
			<li class="breadcrumb-item"><a href="{{ route('app.lists') }}">Blocks</a></li>
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
						<h5>You can register new SSH keys to enable command line access to your blocks.</h5>

						<br>

						@if($keys->count())
							<div class="row">
								<div class="col-md-6">
									<table class="table table-bordered table-striped">
										<thead>
											<th>Name</th>
											<th>Date</th>
											<th class="text-center">Action</th>
										</thead>
										<tbody>
										@foreach($keys as $key)
											<tr>
												<td>{{ $key->name }}</td>
												<td>{{ $key->created_at->format('d-M-Y') }}</td>
												<td class="text-center">
													<a href="#" class="btn btn-danger btn-sm">Delete</a>
													&nbsp; &nbsp;
													<a href="{{ route('dashboard.ssh.view', $key) }}" class="btn btn-info btn-sm">View</a>
												</td>
											</tr>
										@endforeach
										</tbody>
									</table>
									<br>
									<a href="{{ route('dashboard.ssh.generate') }}" class="btn btn-info">New SSH key</a>
								</div>
							</div>
						@else
							<p>Your Git repository should support Git over SSH.<br> SSH Keys identify your server without the need of passwords.<br> You will first need to generate and download SSH Keys. It’s very easy.<br> Just click the button below.</p>

						<br>

						<br>
						<a href="{{ route('dashboard.ssh.generate') }}" class="btn btn-success btn-lg text-uppercase">New SSH key</a>
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
