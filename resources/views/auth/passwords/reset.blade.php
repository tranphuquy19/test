@extends('master')

@section('content')
<div class="container">
        <div class="col-sm-6">
                <div class="featured-box featured-box-primary align-left mt-xlg">
                    <div class="box-content">
                        {{-- <h4 class="heading-primary text-uppercase mb-md">Reset Password</h4> --}}
                        <form action="{{ route('password.update') }}" id="frmResetPwd" method="post">
                            @csrf

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Your Email</label>
                                            <input id="email" type="text" value="" class="form-control input-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="submit" value="Send Password" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
</div>
@endsection
