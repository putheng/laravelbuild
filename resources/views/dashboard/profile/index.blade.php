@extends('layouts.dashboard')

@section('content')

<div class="user-profile">
	<div class="row">
		<div class="col-lg-5">
			<div class="user-display">
				<div class="user-display-bg">
					<img src="/images/user-profile-display.png" alt="Profile Background">
				</div>
				<div class="user-display-bottom">
					<div class="user-display-avatar">
						<img src="/images/avatar.png" alt="Avatar">
					</div>
					<div class="user-display-info">
						<div class="name">{{ $user->name }}</div>
						<div class="nick">
							{{ $user->email }}
						</div>
					</div>
					<div class="row user-display-details">
						<div class="col-4">
							<div class="title">Member since</div>
							<p>{{ $user->created_at->format('m/d/Y') }}</p>
						</div>
						<div class="col-4">
							<div class="title">Project Limit: </div>
							<p>{{ $user->limits }} <a href="#">Increase</a></p>
						</div>
						<div class="col-4">
							<div class="title">
							<a href="{{ route('dashboard.profile.edit') }}">Edit Profile</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-7">
			<div class="widget widget-small">
				<div class="widget-head">
					<div class="title">E-mail subscriptions</div>
				</div>
				<div class="widget-chart-container">
					<p>By subscribing to our email newsletter, you will be opting to receive updates about new feature releases, discounts and promotional codes, security updates, and more.</p>
					<p>If you're not interested in receiving this content, please uncheck the box below to unsubscribe.</p>
					<br>

					<p>
						<label class="be-checkbox custom-control custom-checkbox">
							<input value="true" name="newsletters" class="custom-control-input" type="checkbox">
							<span class="custom-control-label pointer">Subscribe to newsletters</span>
						</label>
					</p><br>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card card-border-color card-border-color-info">
			<div class="card-header">Secure your account</div>
			<div class="card-body">
				<p> 
					Two-factor authentication adds an extra layer of security to your account. <br>
					To log in, you'll need to provide a code along with your username and password.<br> 
					This lets us know it's actually you.
				</p>
				<br>
				<p>
					<a href="#" class="btn btn-info btn-lg">Enable Two-Factor Authentication</a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card card-border-color card-border-color-danger">
			<div class="card-header">Deactivate account</div>
			<div class="card-body">
				<p>This will permanently delete all Projects and Backups.</p>
				<p>
					<br>
					<a href="#" class="btn btn-danger btn-lg">Deactivate Account</a>
				</p>
			</div>
		</div>
	</div>
</div>
@endsection
