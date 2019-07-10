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

                        {{-- <div class="form-group row {{ $errors->has('job') ? 'has-error' : ''}}"> <!-- Adding of Job title in a dropdown -->
              <label for="job" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>

                <div class="cols-sm-10">
                <select name="job" class="form-control">
                  <option value="">Select a Job Title</option> <!-- So that the space isnt blank -->
                  <option value="Incubator">Incubator</option>
                  <option value="Facilitator">Facilitator</option>
                </select>
                {!! $errors->first('job', '<p class="help-block">:message</p>') !!}
              </div>
              </div> --}}


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone number') }}" required autocomplete="phone number" autofocus>

                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="team_name" class="col-md-4 col-form-label text-md-right">{{ __('Team Name') }}</label>

                            <div class="col-md-6">
                                <input id="team_name" type="text" class="form-control @error('team_name') is-invalid @enderror" name="team_name" value="{{ old('team name') }}" required autocomplete="team name" autofocus>

                                @error('team_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('training_partner') ? 'has-error' : ''}}"> <!-- Adding of Training Partners in a dropdown -->
              <label for="training_partner" class="col-md-4 col-form-label text-md-right">{{ __('Training Partner') }}</label>

                <div class="cols-sm-10">
                <select name="training_partner" class="form-control">
                  <option value="">Select a Training Partner</option> <!-- So that the space isnt blank -->
                  <option value="iSpace Foundation">iSpace Foundation</option>
                  <option value="Ghana Tech Lab">Ghana Tech Lab</option>
                  <option value="iCode">iCode</option>
                  <option value="Dansyn GH Ltd">Dansyn GH Ltd</option>
                  <option value="Ho Node">Ho Node</option>
                  <option value="Yison Consult">Yison Consult</option>
                  <option value="Grassroots Hub">Grassroots Hub</option>
                  <option value="Hopin Academy">Hopin Academy</option>
                  <option value="Kumasi Hive">Kumasi Hive</option>

                </select>
                {!! $errors->first('training partner', '<p class="help-block">:message</p>') !!}
              </div>
              </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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
