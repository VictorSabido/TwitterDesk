<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin Panel</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

        <!--begin::Web font -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

        <!--end::Web font -->

        <!--begin:: Global Mandatory Vendors -->
        <link href="{{ asset('assets/bo/vendors/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />

        <!--end:: Global Mandatory Vendors -->

        <!--begin:: Global Optional Vendors -->
        <link href="{{ asset('assets/bo/vendors/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/nouislider/distribute/nouislider.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/animate.css/animate.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/jstree/dist/themes/default/style.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/chartist/dist/chartist.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/vendors/flaticon/css/flaticon.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/vendors/metronic/css/styles.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/bo/vendors/vendors/fontawesome5/css/all.min.css')}}" rel="stylesheet" type="text/css" />

        <!--end:: Global Optional Vendors -->

        <!--begin::Global Theme Styles -->
        <link href="{{ asset('assets/bo/demo/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles -->
        <link rel="shortcut icon" href="{{ asset('assets/bo/demo/media/img/logo/favicon.ico')}}" />
    </head>
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url(assets/bo/app/media/img//bg/bg-1.jpg);">
        <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="#">
                        <img src="{{ asset('assets/bo/app/media/img/logos/logo-1.png')}}">
                    </a>
                </div>
                <div class="m-login__signin">
                    <div class="m-login__head">
                        <h3 class="m-login__title">Inicia sesión</h3>
                    </div>
                    <form method="POST" id="formLogin" action="{{ route('login') }}" class="m-login__form m-form">
                        @csrf
                        <div class="form-group m-form__group">
                            <input id="email" type="email" class="form-control m-input" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="m--font-warning" role="alert">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <div class="form-group m-form__group">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="m--font-warning" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row m-login__form-sub">
                            <div class="col m--align-left m-login__form-left">
                                <label class="m-checkbox  m-checkbox--light">
                                    <input type="checkbox" name="remember"> Recordar credenciales
                                    <span></span>
                                </label>
                            </div>
                            <div class="col m--align-right m-login__form-right">
                                <a href="javascript:;" id="m_login_forget_password" class="m-link">Olvidé mi contraseña</a>
                            </div>
                        </div>
                        <div class="m-login__form-action">
                            <button type="submit" form="formLogin" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">Acceder</button>
                        </div>
                    </form>
                </div>
                <div class="m-login__signup">
                    <div class="m-login__head">
                        <h3 class="m-login__title">Regístrate</h3>
                        <div class="m-login__desc">Rellena los campos para crear la cuenta:</div>
                    </div>
                    <form method="POST" id="formRegister" action="{{ route('register') }}" class="m-login__form m-form">
                        @csrf
                        <div class="form-group m-form__group">
                            <input type="text" class="form-control m-input" name="name" value="{{ old('name') }}" placeholder="Nombre" required>

                            @if ($errors->has('name'))
                                <span class="m--font-warning" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group m-form__group">
                            <input type="email" class="form-control m-input" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="off">

                            @if ($errors->has('email'))
                                <span class="m--font-warning" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group m-form__group">
                            <input type="password" class="form-control m-input" name="password" placeholder="Contraseña" required>

                            @if ($errors->has('password'))
                                <span class="m--font-warning" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group m-form__group">
                            <input type="password" class="form-control m-input m-login__form-input--last" name="password_confirmation" placeholder="Confirmar contraseña" required>
                        </div>
                        <div class="m-login__form-action">
                            <button type="submit" form="formRegister" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">Enviar</button>&nbsp;&nbsp;
                            <button id="m_login_signup_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">Atrás</button>
                        </div>
                    </form>
                </div>
                <div class="m-login__forget-password">
                    <div class="m-login__head">
                        <h3 class="m-login__title">¿No recuerdas tu contraseña?</h3>
                        <div class="m-login__desc">¡Introducce tu mail para solucionar el problema!</div>
                    </div>
                    <form class="m-login__form m-form" action="">
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Email" name="email" id="m_email" autocomplete="off">
                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_forget_password_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Request</button>&nbsp;&nbsp;
                            <button id="m_login_forget_password_cancel" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="m-login__account">
                    <span class="m-login__account-msg">
                        Si aún no tienes cuenta
                    </span>&nbsp;&nbsp;
                    <a href="javascript:;" id="m_login_signup" class="m-link m-link--light m-login__account-link">Registrate</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--begin:: Global Mandatory Vendors -->
    <script src="{{ asset('assets/bo/vendors/jquery/dist/jquery.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/moment/min/moment.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/perfect-scrollbar/dist/perfect-scrollbar.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/wnumb/wNumb.js')}}" type="text/javascript"></script>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="{{ asset('assets/bo/vendors/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/bootstrap-switch/dist/js/bootstrap-switch.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/bootstrap-select/dist/js/bootstrap-select.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/inputmask/dist/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/autosize/dist/autosize.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/summernote/dist/summernote.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/markdown/lib/markdown.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/jquery-validation/dist/jquery.validate.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/jquery-validation/dist/additional-methods.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/js/framework/components/plugins/forms/jquery-validation.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/bootstrap-notify/bootstrap-notify.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/jstree/dist/jstree.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/raphael/raphael.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/morris.js/morris.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/chartist/dist/chartist.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/js/framework/components/plugins/charts/chart.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/vendors/jquery-idletimer/idle-timer.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/bo/vendors/js/framework/components/plugins/base/sweetalert2.init.js')}}" type="text/javascript"></script>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle -->
    <script src="{{ asset('assets/bo/demo/base/scripts.bundle.js')}}" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts -->
    <script src="{{ asset('assets/bo/snippets/custom/pages/user/login.js')}}" type="text/javascript"></script>

    <!--end::Page Scripts -->
    </body>
<html>