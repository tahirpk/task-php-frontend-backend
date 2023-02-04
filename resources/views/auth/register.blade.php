@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <div class="row mb-3">
                                <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                </div>

                            </div>
                            <div class="col">
                                <div class="row mb-3">
                                <label for="lname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                                </div>
                            </div>
                            </div>


                        <div class="row">
                            <div class="col">
                                <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                </div>

                            </div>
                            <div class="col">
                                     <div class="row mb-3">
                                        <label for="dob" class="col-md-4 col-form-label text-md-end">{{ __('Date Of Birth') }}</label>

                                        <div class="col-md-6">
                                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="email">

                                            @error('dob')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                 <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>
                            </div>
                            <div class="col">

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                 </div>
                            </div>

                            </div>
                        </div>


                        <div class="row">
                            <div class="col">
                                 <div class="row mb-3">
                                    <label for="job" class="col-md-4 col-form-label text-md-end">{{ __('Job Title') }}</label>

                                    <div class="col-md-6">
                                        <select name="job" id="job" class="form-select" required aria-label="Default select">
                                        <option selected>{{ __('Choose Job') }}</option>
                                        <option value="1">Account Manager</option>
                                        <option value="2">Software Programmer</option>
                                        <option value="3">HR Support</option>
                                        </select>

                                        @error('job')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            </div>
                            </div>
                            <div class="col">
                                <div class="row mb-3">
                                     <div class="col-md-6">
                                <div class="form-check">
                                    <input name="experience" class="form-check-input" type="checkbox" id="experience">
                                    <label class="form-check-label" for="experience">
                                    Is Experience
                                    </label>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
