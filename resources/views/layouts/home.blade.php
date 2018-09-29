@extends('master')
@section('account')
	@if ($logged == false)
		<li class="dropdown dropdown-mega dropdown-mega-signin signin" id="headerAccount">
	<a class="dropdown-toggle" href="/login">
		<i class="fa fa-user"></i> Sign In
	</a>
	<ul class="dropdown-menu">
		<li>
			<div class="dropdown-mega-content">
				<div class="row">
					<div class="col-md-12">

						<div class="signin-form">

							<span class="dropdown-mega-sub-title">Sign In</span>

							<form action="{{ route('login') }}" id="frmSignIn" method="post">
								@csrf
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 p-none">
											<label>Username or E-mail Address</label>
											<input type="text" value="" class="form-control input-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus tabindex="1">
											@if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        	@endif
											@if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 p-none">
											<a class="pull-right mt-none p-none" id="headerRecover" href="#">(Lost Password?)</a>
											<label>Password</label>
											<input type="password" value="" class="form-control input-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required tabindex="2">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6 pl-none">
										<span class="remember-box checkbox">
											<label for="rememberme">
												<input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
											</label>
										</span>
									</div>
									<div class="col-md-6 pr-none">
										<input type="submit" value="Login" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
									</div>
								</div>
							</form>

							<p class="sign-up-info">Don't have an account yet? <a href="#" id="headerSignUp" class="p-none m-none ml-xs">Sign Up</a></p>

						</div>

						<div class="signup-form">
							<span class="dropdown-mega-sub-title">Create Account</span>

							<form action="/" id="frmSignUp" method="post">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 p-none">
											<label>E-mail Address</label>
											<input type="text" value="" class="form-control input-lg">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-6 pl-none">
											<label>Password</label>
											<input type="password" value="" class="form-control input-lg">
										</div>
										<div class="col-md-6 pr-none">
											<label>Re-enter Password</label>
											<input type="password" value="" class="form-control input-lg">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 p-none">
										<input type="submit" value="Create Account" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
									</div>
								</div>
							</form>

							<p class="log-in-info">Already have an account? <a href="#" id="headerSignIn" class="p-none m-none ml-xs">Log In</a></p>
						</div>

						<div class="recover-form">
							<span class="dropdown-mega-sub-title">Reset My Password</span>
							<p>Complete the form below to receive an email with the authorization code needed to reset your password.</p>

							<form action="/" id="frmResetPassword" method="post">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12 p-none">
											<label>E-mail Address</label>
											<input type="text" value="" class="form-control input-lg">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 p-none">
										<input type="submit" value="Submit" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
									</div>
								</div>
							</form>

							<p class="log-in-info">Already have an account? <a href="#" id="headerRecoverCancel" class="p-none m-none ml-xs">Log In</a></p>
						</div>

					</div>
				</div>
			</div>
		</li>
	</ul>
</li>
	@else
	<li class="">
			<a href="/logout">
				Loggout
			</a>
		</li>
	@endif
@endsection
@section('content')  
<h2>All test</h2>
<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
    
	<li data-option-value="*" class="active"><a href="#">Show All</a></li>
	@foreach ($tableCategories as $item)
	<li data-option-value=".{{$item['id_categories']}}"><a href="#">{{$item['categories']}}</a></li>
	@endforeach
</ul>
 
<hr>

<div class="row">
    <div class="sort-destination-loader sort-destination-loader-showing">
        <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
            @foreach ($tableTest as $item)
			<li class="col-md-1-5 isotope-item {{$item['id_categories']}}">
				<div class="portfolio-item">
				<a href="/test/read/{{$item['id']}}">
						<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
			<span class="thumb-info-wrapper">
			<img src="/{{$item['image_test']}}" class="img-responsive" alt="">
			<span class="thumb-info-title">
			<span class="thumb-info-inner font-size-xs line-height-xs pt-xs">{{$item['title_test']}}</span>
						<span class="thumb-info-type">{{$item['categories']}}</span>
						</span>
						</span>
						</span>
					</a>
				</div>
			</li>
			@endforeach
        </ul>
    </div>
</div>
@endsection