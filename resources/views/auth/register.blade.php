<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Anthony Baru">
    <title>Create Account | Afraken</title>
    <!-- Favicon -->
    <link href="{{ asset('dashboard/assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('dashboard/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('dashboard/assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">
    <!-- Parsley CSS -->
    <link type="text/css" href="{{ asset('css/parsley.css') }}" rel="stylesheet">
</head>

<body class="bg-default">
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
            <div class="container px-4">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/logo.jpg') }}" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-collapse-main">
                    <!-- Collapse header -->
                    <div class="navbar-collapse-header d-md-none">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="/">
                                    <img src="{{ asset('img/logo.jpg') }}">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse"
                                    data-target="#navbar-collapse-main" aria-controls="sidenav-main"
                                    aria-expanded="false" aria-label="Toggle sidenav">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Navbar items -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">

                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href=" {{ route('register') }} ">
                                <i class="ni ni-circle-08"></i>
                                <span class="nav-link-inner--text">Register</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                                <i class="ni ni-key-25"></i>
                                <span class="nav-link-inner--text">Login</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="/contact-us">
                                <i class="ni ni-single-02"></i>
                                <span class="nav-link-inner--text">Contact us</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <div class="header bg-gradient-primary1 py-7 py-lg-8">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Welcome!</h1>
                            <p class="text-lead text-light">Use these awesome forms to login or create new account in
                                your project for free.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <!-- Table -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-transparent pb-5">
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
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Or sign up with credentials</small>
                            </div>
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
                                                <input name="last_name" id="last_name" class="form-control"
                                                    placeholder="Last Name" type="text" placeholder="Last Name "
                                                    value="{{ old('last_name') }}" required>
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
                                                    <span class="input-group-text"><i
                                                            class="ni ni-mobile-button"></i></span>
                                                </div>
                                                <input id="phone_number" name="phone_number"
                                                    value="{{ old('phone_number') }}" class="form-control"
                                                    placeholder="Phone Number" type="tel" required>
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
                                                <input id="email" name="email" value="{{ old('email') }}"
                                                    class="form-control" placeholder="Email" type="email" required>
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
                                                <select id="category_id" name="category_id" class="form-control"
                                                    required>
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
                                                    <option value="Masters"
                                                        {{old('degree') == 'Masters' ? 'selected="selected"':''}}>
                                                        Masters
                                                    </option>
                                                    <option value="Doctoral"
                                                        {{old('degree') == 'Doctoral' ? 'selected="selected"':''}}>
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
                                                <input id="employer" name="employer" value="{{ old('employer') }}"
                                                    class="form-control" placeholder="Current Employer" type="text"
                                                    required>
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
                                        <input id="password" name="password" class="form-control" placeholder="Password"
                                            type="password" minlength="8" required>
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
                                        <input id="password_confirmation" name="password_confirmation"
                                            class="form-control" placeholder="Confirm Password" type="password"
                                            data-parsley-equalto="#password" required>
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
                                            <input class="custom-control-input" id="customCheckRegister" type="checkbox"
                                                required>
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
    </div>
    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; {{ date('Y') }} | Afraken
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about-us" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="/blog" class="nav-link" target="_blank">Blog</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('dashboard/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('dashboard/assets/js/argon.js?v=1.0.0') }}"></script>
    <!-- Parsley JS -->
    <script src="{{ asset('js/parsley.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/mine.js') }}"></script>
</body>

</html>