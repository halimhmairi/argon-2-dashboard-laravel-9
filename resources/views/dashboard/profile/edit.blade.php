@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">  
        <div class="col-md-12">
            <div class="card shadow-lg mx-4 card-profile-bottom">
              <div class="card-body p-3">   
                <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-md-8">
                    <div class="card">
                        <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Profile</p> 
                        </div>
                        </div>
                        <div class="card-body">
                        <p class="text-uppercase text-sm">{{ __('Edit ') }} {{ $user->name }}</p>
                        <div class="row">
                            <form method="POST" action="{{ route('profile/update') }}">
                                @csrf 
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Username</label>
                                <input class="form-control" name="name" type="text"  class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Email address</label> 
                                <input id="email" type="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            </div> 
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">{{ __('Edit password') }}</p>
                        <div class="row">
                            <form method="POST" action="{{ route('profile/updatePassword') }}">
                                @csrf
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="oldPassword" class="form-control-label">Old password</label>
                                <input id="oldPassword" type="password" class="form-control @error('oldPassword') is-invalid @enderror" name="oldPassword" required autocomplete="new-password">
                                @error('oldPassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group">
                                <label for="newPassword" class="form-control-label">new password</label>
                                <input id="newPassword" type="password" class="form-control @error('newPassword') is-invalid @enderror" name="newPassword" required autocomplete="new-password">
                                @error('newPassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            </div> 
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div> 
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card card-profile">
                        <img src="{{ asset('img/bg-profile.jpg') }}" alt="Image placeholder" class="card-img-top">
                        <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                            <a href="javascript:;">
                                <img src="{{ asset('img/team-2.jpg') }}" class="rounded-circle img-fluid border border-2 border-white">
                            </a>
                            </div>
                        </div>
                        </div>
                        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                        <div class="d-flex justify-content-between">
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
                            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
                            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
                        </div>
                        </div>
                        <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                            <div class="d-flex justify-content-center">
                                <div class="d-grid text-center">
                                <span class="text-lg font-weight-bolder">22</span>
                                <span class="text-sm opacity-8">Friends</span>
                                </div>
                                <div class="d-grid text-center mx-4">
                                <span class="text-lg font-weight-bolder">10</span>
                                <span class="text-sm opacity-8">Photos</span>
                                </div>
                                <div class="d-grid text-center">
                                <span class="text-lg font-weight-bolder">89</span>
                                <span class="text-sm opacity-8">Comments</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <h5>
                                {{ $user->name }}<span class="font-weight-light">, 35</span>
                            </h5>
                            <div class="h6 font-weight-300">
                            <i class="ni location_pin mr-2"></i>Bucharest, Romania
                            </div>
                            <div class="h6 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                            </div>
                            <div>
                            <i class="ni education_hat mr-2"></i>University of Computer Science
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div> 
                </div>
                </div>
            </div> 
       </div> 
    </div>
</div>
@endsection
