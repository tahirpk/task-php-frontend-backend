@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Application Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update') }}">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <div class="row mb-3">
                                <label for="fname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                                <div class="col-md-6">
                                    <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ $result->first_name ?? old('fname') }}" required autocomplete="fname" autofocus>

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
                                <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ $result->last_name ?? old('lname') }}" required autocomplete="lname" autofocus>

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
                                            <input readonly="readonly" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $result->email ?? old('email') }}" required autocomplete="email">

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
                                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ $result->dob ?? old('dob') }}" required autocomplete="email">

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
                                    <label for="job" class="col-md-4 col-form-label text-md-end">{{ __('Job Title') }}</label>

                                    <div class="col-md-6">
                                        <select name="job" id="job" class="form-select" required aria-label="Default select">

                                        <option value="1" {{ $result->job==1 ?'selected':''}}>Account Manager</option>
                                        <option value="2" {{ $result->job==2 ?'selected':''}}>Software Programmer</option>
                                        <option value="3" {{ $result->job==3 ?'selected':''}}>HR Support</option>
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
                                    <input name="experience" {{ $result->is_experience=='on' ?'checked':''}} class="form-check-input" type="checkbox" id="experience">
                                    <label class="form-check-label" for="experience">
                                    Is Experience
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input name="approved" {{ $result->is_approved=='on' ?'checked':''}} class="form-check-input" type="checkbox" id="experience">
                                    <label class="form-check-label" for="experience">
                                    Is Approved
                                    </label>
                                </div>
                            </div>
                             </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-12 text-end">
                                <input type="hidden" name="id" value="{{ $result->id }}"/>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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
