@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-md-center h3 shabnam"> فرم عضویت </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row fa_form_lbldiv">
                            <label for="name" class="col-md-2 col-form-label text-md-center"> نام </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    {{ displayNoty($message, 'danger') }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row fa_form_lbldiv">
                            <label for="lastName" class="col-md-2 col-form-label text-md-center"> نام خانوادگی </label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                                @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row fa_form_lbldiv">
                            <label for="phoneNumber" class="col-md-2 col-form-label text-md-center"> شماره تلفن </label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber" autofocus>

                                @error('phoneNumber')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row fa_form_lbldiv">
                            <label for="email" class="col-md-2 col-form-label text-md-center"> آدرس ایمیل </label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    {{ displayNoty($message, 'danger') }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row fa_form_lbldiv">
                            <label for="password" class="col-md-2 col-form-label text-md-center"> رمز عبور </label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row fa_form_lbldiv">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-center"> تکرار رمز عبور </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0 d-flex justify-content-end">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary shabnam">
                                    ثبت نام
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
