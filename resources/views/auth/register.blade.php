@extends('layouts.auth')
@section('header')
<h1 class="text-white">Hi!</h1>
<p class="text-lead text-light">
    Please fill in the form below to register.
</p>
@endsection

@section('content')
<!-- Page content -->
<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary shadow border-0">
                {{-- <div class="card-header bg-transparent pb-5">
                    <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
                    <div class="text-center">
                        <a href="#" class="btn btn-neutral btn-icon mr-4">
                            <span class="btn-inner--icon"><img
                                    src="{{ asset('dashboard/assets/img/icons/common/fb.png') }}"></span>
                <span class="btn-inner--text">Facebook</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon"><img
                            src="{{ asset('dashboard/assets/img/icons/common/google.svg') }}"></span>
                    <span class="btn-inner--text">Google</span>
                </a>
            </div>
        </div> --}}
        <div class="card-body px-lg-5 py-lg-5">
            {{-- <div class="text-center text-muted mb-4">
                <small>Or sign up with credentials</small>
            </div> --}}
            <form role="form" method="POST" action="{{ url('/register') }}" autocomplete="off"
                class="user-register-form">
                @csrf
                <input type="hidden" name="role" value="Member">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input name="first_name" id="first_name" value="{{ old('first_name') }}"
                                    class="form-control" placeholder="First Name" type="text" required>
                                @if ($errors->has('first_name'))
                                <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input name="last_name" id="last_name" class="form-control" placeholder="Last Name"
                                    type="text" placeholder="Last Name " value="{{ old('last_name') }}" required>
                                @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                                </div>
                                <input id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                                    class="form-control" placeholder="Phone Number" type="tel" required>
                                @if ($errors->has('phone_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input id="email" name="email" value="{{ old('email') }}" class="form-control"
                                    placeholder="Email" type="email" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                </div>
                                <select id="category_id" name="category_id" class="form-control" required>
                                    <option value="" default> --select category--</option>
                                    @if(isset($categories))
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{old('category_id') == $category->id ? 'selected="selected"' : ''}}>
                                        {{$category->name}}
                                    </option>
                                    @endforeach
                                    @endif
                                    {{-- <option> Friends of afraken</option>
                                                        <option> Honorary Member</option>
                                                        <option> Ordinary Member</option> --}}
                                </select>
                                @if ($errors->has('category_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category_id') }}<strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                </div>
                                <select id="sub_committee_id" name="sub_committee_id"
                                    class="form-control {{ $errors->has('sub_committee_id') ? ' has-error' : '' }}"
                                    required>
                                    <option value="" default> - -sub committee --</option>
                                    @if(isset($sub_committees))
                                    @foreach($sub_committees as $sub_committee)
                                    <option value="{{$sub_committee->id}}"
                                        {{old('sub_committee_id') == $sub_committee->id ? 'selected="selected"' : ''}}>
                                        {{$sub_committee->name}}
                                    </option>
                                    @endforeach
                                    @endif
                                    {{-- <option>Accademic affairs</option>
                                                        <option> Finance</option>
                                                        <option> Managment</option>
                                                        <option> Social Affairs</option>
                                                        <option> Workshop</option>
                                                        <option> Promotional</option> --}}
                                </select>
                                @if ($errors->has('sub_committee_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sub_committee_id') }}<strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('university') ? ' has-error' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                </div>
                                <select class="form-control" id="university" name="university" required>
                                    <option value="" default> --University in France--
                                    </option>
                                    @if(isset($universities))
                                    @foreach($universities as $university)
                                    <option value=" {{$university->name}}"
                                        {{old('university') == $university->name ? 'selected="selected"' : ''}}>
                                        {{$university->name}}
                                    </option>
                                    @endforeach
                                    @endif
                                    {{-- <option> Centre internantional detudes superieures en science
                                                            agronomic</option>
                                                        <option> ECAM-EPMI</option>
                                                        <option> ECOLE CENTRALE DE LYON</option> --}}
                                </select>
                                @if ($errors->has('university'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('university') }}<strong>
                                </span>
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('degree') ? ' has-error' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-box-2"></i></span>
                                </div>
                                <select class="form-control" name="degree" required>
                                    <option value="" default> -- select Degree --</option>
                                    <option value="Bachelors"
                                        {{old('degree') == 'Bachelors' ? 'selected="selected"':''}}>
                                        Bachelors
                                    </option>
                                    <option value="Masters" {{old('degree') == 'Masters' ? 'selected="selected"':''}}>
                                        Masters
                                    </option>
                                    <option value="Doctoral" {{old('degree') == 'Doctoral' ? 'selected="selected"':''}}>
                                        Doctoral
                                    </option>
                                    {{-- <option> Bachelors</option>
                                                        <option> Master</option>
                                                        <option> Doctoral</option> --}}
                                </select>
                                @if ($errors->has('degree'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('degree') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('employer') ? ' has-error' : '' }}">
                            <div class="input-group input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input id="employer" name="employer" value="{{ old('employer') }}" class="form-control"
                                    placeholder="Current Employer" type="text" required>
                                @if ($errors->has('employer'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('employer') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input id="password" name="password" class="form-control" placeholder="Password" type="password"
                            minlength="8" required>
                    </div>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input id="password_confirmation" name="password_confirmation" class="form-control"
                            placeholder="Confirm Password" type="password" data-parsley-equalto="#password" required>
                    </div>
                    @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
                </div>
                <!-- <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div> -->
                <div class="row my-4">
                    <div class="col-12">
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id="customCheckRegister" type="checkbox" required>
                            <label class="custom-control-label" for="customCheckRegister">
                                <span class="text-muted">I agree with the <a
                                        href="{{URL::asset('uploads/files/static/afraken_privacy_policy.pdf')}}">Privacy
                                        Policy</a></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mt-4">Create account</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection