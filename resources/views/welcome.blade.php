<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="shortcut icon" href="{{ asset('images/heart-shape.png') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
        <script src="hhttps://cdnjs.cloudfare.com.ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

        <!-- Stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kelly+Slab&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                /*font-family: 'Montserrat', sans-serif;*/
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: absolute;
            }

            .top-right {
                position: relative;
                margin-left: 100px;
                margin-top: 18px;
            }

            .button-default {
                background-color: #008CBA;
                border-radius: 12px;
                background-image: linear-gradient(to right, blue, purple);
            }

            .btn:hover {
                background-image: linear-gradient(to right, purple, blue);
                border-radius: 12px;
            }

            .content {
                text-align: center;
                margin-top: 230px;
            } 

            .title {
                font-size: 84px;
                text-align: left;
                margin-left: 120px;
                /*padding-bottom: 250px;*/
                text-decoration-style: bold;
                text-transform: uppercase;
            }

            .title-thinner {
                font-family: 'Kelly Slab', sans-serif;
            }


            .links > a {
                color: #636b6f;
                padding: 5px 40px;
                color: white;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .link-margin {
                margin-left: 0px;
            }

            .description {
                font-size: 18px;
                text-transform: none;
            }

            .m-b-md {
                margin-top: 300px;
            }

            .img-responsive {
                margin-left: 185px;
                width: 90%;
                height: auto;
            }

        </style>
    </head>
    <body>
    <div class="container">
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    <div class="title-thinner">
                    LifeLine 
                    </div>
                    <div class="description">
                        Improving lines of communication within hospitals through
                        <div>
                            the utilization of Electronic Medical Record Systems
                         </div>

                         <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary button-default" data-toggle="modal" data-target="#exampleModal">
                        Login
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                             <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{-- {{ __('Forgot Your Password?') }} --}}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                            </div>
                            {{-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                                    </div> --}}
                            </div>
                         </div>
                     </div>
            
                         </div>
                    </div>
                </div>
            </div>

        <div>
            <img src="images\header.png" class="img-responsive" />
        </div>

        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
        </script>
        {{-- Datatables --}}
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        @stack('scripts')
    </div>
    </body>
</html>
