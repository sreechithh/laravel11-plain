@extends("admin.layouts.master")
@section("title")
    Login
@endsection
@section("content")
    <style>
        .btn-registerBtn {
            background-color: #ffffff;
            color: #2b2b2b;
            border-radius: 0.175rem;
            box-shadow: 0 1px 6px 1px rgba(0, 0, 0, .05);
            transition: 0.2s linear all !important;
        }

        .btn-registerBtn:hover {
            /*background-color: #fafafa !important;*/
            color: #2b2b2b;
            box-shadow: 0 3px 12px 2px rgba(0, 0, 0, .10) !important;
            transition: 0.2s linear all !important;
        }

        .btn-registerBtn-selected {
            color: #fff;
            background-color: #FF5722;
        }

        .btn-registerBtn-selected:hover {
            color: #fff;
        }

        .delivery-msg {
            background-color: #ffffff;
            color: #2b2b2b;
            border-radius: 0.175rem;
            box-shadow: 0 3px 12px 2px rgba(0, 0, 0, .05);
        }

        .btn-google {
            background-color: #1a73e8;
            color: #FFF !important;
        }

    </style>

    <form class="registration-form py-5 col-xs-12 col-md-4" action="{{ route('auth.post.login') }}" method="POST"
          id="loginForm" style="margin: 0 auto 20px auto;">
        <div class="card mb-0 ">
            <div class="card-body">
                <div class="text-center mb-3">
                    <img src="/assets/img/logos/logo.png" alt="">
                    {{--                    <i--}}
                    {{--                        class="icon-user-tie icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>--}}
                    <h5 class="mb-0">Login to Dashboard</h5>
                    <span class="d-block text-muted">Enter your credentials below</span>
                </div>
                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="text" class="form-control" placeholder="Email" name="email">
                    <div class="form-control-feedback">
                        <i class="icon-user text-muted"></i>
                    </div>
                </div>
                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <div class="form-control-feedback">
                        <i class="icon-lock2 text-muted"></i>
                    </div>
                </div>
{{--                <div class="form-group form-group-feedback form-group-feedback-left">--}}
{{--                    <label class="d-flex align-items-center">--}}
{{--                        <input type="checkbox" checked="checked" name="remember" class="mr-1"--}}
{{--                               style="height: 1rem; width: 1rem">--}}
{{--                        <span>Remember me?</span>--}}
{{--                    </label>--}}
{{--                </div>--}}
                @csrf
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" style="height: 2.8rem; font-size: 1rem;">Log
                        in <i
                                class="icon-circle-right2 ml-2"></i></button>
                </div>

{{--                <a class="btn btn-block btn-social btn-google mb-4" href="{{ route('shop.googleLogin') }}">--}}
{{--                    <span class="fa fa-google"></span> Sign in with Google--}}
{{--                </a>--}}

                <div class="content d-flex justify-content-center align-items-center mt-3">

                    @if(config('settings.enableFreelanceDeliveryBoys')=="true")
                        <div class="content-divider text-muted form-group"><span> OR </span></div>
                        <a href="{{ route('get.registerDelivery') }}"
                           class="btn btn-lg btn-registerBtn mr-2 regButtonDelivery">
                            Delivery Boy
                        </a>

                    @endif

                </div>
            </div>
        </div>
    </form>

@endsection
