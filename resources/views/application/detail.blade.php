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
							Application
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-uppercase" href="#database" data-toggle="tab" role="tab" aria-selected="false">
							Database
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active show" id="primary" role="tabpanel">
						<div class="row">
							<div class="col-md-6">
								<h5>Information related to the several ways you can interact with your application.</h5>

								<br>
								<h4>Application Url</h4>
								<a href="https://{{ $project->directory }}.laravelbuildapp.com" target="_blank">https://{{ $project->directory }}.laravelbuildapp.com</a>
								<br><br>
								<h4>Git repository</h4>
<pre>
{{ str_slug(request()->user()->name) }}@git.laravelbuild.com:{{ $project->gitname }}.git
</pre>
<br>
<h4>Create a new repository on the command line</h4>
<pre>
echo "# api" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin git@github.com:putheng/api.git
git push -u origin master
</pre>
<br>
<h4>Push an existing repository from the command line</h4>
<pre>
git remote add origin git@github.com:putheng/api.git
git push -u origin master
</pre>

								<br><br>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="database" role="tabpanel">
						<h4>Database Credentials</h4>
						<p>Get credentials for manual connections to this database.</p>
						
						<table class="table table-bordered">
							<tr>
								<th>Host</th>
								<td colspan="2">{{ $project->getDatabase()->host }}</td>
							</tr>
							<tr>
								<th>Database</th>
								<td>{{ $project->getDatabase()->dbname }}</td>
								<td>
									<a href="#" class="btn btn-sm btn-danger">
										Empty
									</a>
								</td>
							</tr>
							<tr>
								<th>User</th>
								<td>{{ $project->getDatabase()->username }}</td>
								<td>
									<a href="#" class="btn btn-sm btn-warning">
										Reset
									</a>
								</td>
							</tr>
							<tr>
								<th>Password</th>
								<td>{{ $project->getDatabase()->password }}</td>
								<td>
									<a href="#" class="btn btn-sm btn-warning">
										Reset
									</a>
								</td>
							</tr>
							<tr>
								<th>Port</th>
								<td colspan="2">{{ $project->getDatabase()->port }}</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
