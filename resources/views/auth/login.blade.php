@extends('layouts.page')

@section('content')
    {{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

--}}



    <section class="top py-8">
        <div class="flex item-center justify-center space-x-4 flex-wrap md:flex-nowrap px-8">
            <a href="{{route('index')}}"
               class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
            <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.7963 20.804C13.8603 20.8293 13.9179 20.842 13.9693 20.842C14.0206 20.842 14.0783 20.8293 14.1423 20.804L19.9583 19.012C19.9383 18.708 19.8473 18.489 19.6853 18.355C19.5233 18.221 19.3399 18.154 19.1353 18.154H14.3903C13.9676 18.154 13.5843 18.1373 13.2403 18.104C12.8969 18.0706 12.5453 17.991 12.1853 17.865L10.4713 17.313C10.3346 17.2683 10.2363 17.1786 10.1763 17.044C10.1163 16.9093 10.1089 16.776 10.1543 16.644C10.1989 16.512 10.2846 16.4153 10.4113 16.354C10.5379 16.2926 10.6703 16.285 10.8083 16.331L12.3583 16.892C12.6796 17.0013 13.0356 17.0713 13.4263 17.102C13.8169 17.1326 14.2999 17.15 14.8753 17.154H15.1353C15.1353 16.8426 15.0776 16.5906 14.9623 16.398C14.8476 16.206 14.6833 16.072 14.4693 15.996L8.71527 13.885C8.67727 13.8716 8.64227 13.8616 8.61027 13.855C8.57827 13.849 8.54294 13.846 8.50427 13.846H6.40427V18.654L13.7963 20.804ZM13.5403 21.792L6.40427 19.704C6.30961 20.0986 6.10794 20.4133 5.79927 20.648C5.49127 20.8826 5.15494 21 4.79027 21H4.02027C3.57627 21 3.19627 20.8416 2.88027 20.525C2.56361 20.209 2.40527 19.829 2.40527 19.385V14.462C2.40527 14.0173 2.56327 13.637 2.87927 13.321C3.19594 13.0043 3.57627 12.846 4.02027 12.846H8.48327C8.57661 12.846 8.67227 12.8566 8.77027 12.878C8.86894 12.8993 8.96061 12.924 9.04527 12.952L14.8253 15.069C15.1826 15.205 15.4903 15.4493 15.7483 15.802C16.0069 16.1546 16.1363 16.6053 16.1363 17.154H19.1363C19.7383 17.154 20.1996 17.3423 20.5203 17.719C20.8409 18.0963 21.0013 18.5746 21.0013 19.154C21.0013 19.354 20.9473 19.523 20.8393 19.661C20.7306 19.7983 20.5723 19.9016 20.3643 19.971L14.4803 21.787C14.3356 21.8276 14.1823 21.851 14.0203 21.857C13.8589 21.8636 13.6993 21.842 13.5413 21.792M3.40427 19.385C3.40427 19.5643 3.46194 19.7116 3.57727 19.827C3.69261 19.9423 3.83994 20 4.01927 20H4.78927C4.96861 20 5.11594 19.952 5.23127 19.856C5.34661 19.76 5.40427 19.603 5.40427 19.385V13.846H4.01927C3.83994 13.846 3.69261 13.9036 3.57727 14.019C3.46194 14.1343 3.40427 14.282 3.40427 14.462V19.385ZM13.4963 3.02698C13.6603 3.02698 13.8223 3.05298 13.9823 3.10498C14.1423 3.15698 14.2943 3.23031 14.4383 3.32498L19.3233 6.80398C19.5386 6.94864 19.7053 7.14031 19.8233 7.37898C19.9413 7.61764 20.0003 7.86464 20.0003 8.11998V14.268C20.0003 14.41 19.9523 14.5286 19.8563 14.624C19.7603 14.72 19.6413 14.768 19.4993 14.768C19.3579 14.768 19.2393 14.72 19.1433 14.624C19.0479 14.5293 19.0003 14.4113 19.0003 14.27V8.09598C19.0003 7.99331 18.9779 7.89731 18.9333 7.80798C18.8879 7.71798 18.8206 7.64098 18.7313 7.57698L13.8463 4.17298C13.7436 4.09631 13.6283 4.05798 13.5003 4.05798C13.3723 4.05798 13.2569 4.09631 13.1543 4.17298L8.26927 7.57698C8.17994 7.64098 8.11261 7.71764 8.06727 7.80698C8.02261 7.89764 8.00027 7.99464 8.00027 8.09798V9.96298C8.00027 10.1043 7.95227 10.223 7.85627 10.319C7.76027 10.415 7.64127 10.463 7.49927 10.463C7.35794 10.463 7.23927 10.415 7.14327 10.319C7.04794 10.2223 7.00027 10.1033 7.00027 9.96198V8.12198C7.00027 7.86531 7.05927 7.61764 7.17727 7.37898C7.29527 7.14031 7.46194 6.94864 7.67727 6.80398L12.5623 3.32498C12.7069 3.23031 12.8579 3.15698 13.0153 3.10498C13.1719 3.05298 13.3323 3.02698 13.4963 3.02698ZM12.5003 8.44198C12.6083 8.44198 12.7026 8.40198 12.7833 8.32198C12.8639 8.24198 12.9039 8.14731 12.9033 8.03798C12.9033 7.93064 12.8633 7.83664 12.7833 7.75598C12.7026 7.67531 12.6083 7.63498 12.5003 7.63498C12.3923 7.63498 12.2979 7.67498 12.2173 7.75498C12.1373 7.83631 12.0973 7.93064 12.0973 8.03798C12.0973 8.14598 12.1373 8.24031 12.2173 8.32098C12.2979 8.40164 12.3923 8.44198 12.5003 8.44198ZM14.5003 8.44198C14.6083 8.44198 14.7026 8.40198 14.7833 8.32198C14.8639 8.24198 14.9039 8.14731 14.9033 8.03798C14.9033 7.93064 14.8633 7.83664 14.7833 7.75598C14.7026 7.67531 14.6083 7.63498 14.5003 7.63498C14.3923 7.63498 14.2979 7.67498 14.2173 7.75498C14.1373 7.83631 14.0973 7.93064 14.0973 8.03798C14.0973 8.14598 14.1373 8.24031 14.2173 8.32098C14.2979 8.40164 14.3923 8.44198 14.5003 8.44198ZM12.5003 10.442C12.6083 10.442 12.7026 10.402 12.7833 10.322C12.8639 10.242 12.9039 10.1473 12.9033 10.038C12.9033 9.93064 12.8633 9.83664 12.7833 9.75598C12.7026 9.67531 12.6083 9.63498 12.5003 9.63498C12.3923 9.63498 12.2979 9.67498 12.2173 9.75498C12.1373 9.83631 12.0973 9.93064 12.0973 10.038C12.0973 10.146 12.1373 10.2403 12.2173 10.321C12.2979 10.4016 12.3923 10.442 12.5003 10.442ZM14.5003 10.442C14.6083 10.442 14.7026 10.402 14.7833 10.322C14.8639 10.242 14.9039 10.1473 14.9033 10.038C14.9033 9.93064 14.8633 9.83664 14.7833 9.75598C14.7026 9.67531 14.6083 9.63498 14.5003 9.63498C14.3923 9.63498 14.2979 9.67498 14.2173 9.75498C14.1373 9.83631 14.0973 9.93064 14.0973 10.038C14.0973 10.146 14.1373 10.2403 14.2173 10.321C14.2979 10.4016 14.3923 10.442 14.5003 10.442Z"
                    fill="black"/>
                </svg>

            </span>
                <p>Select Your State
                </p>
            </a>
            <a href="{{route('index')}}"
               class="flex item-center justify-center gap-2 font-bold shadow-md p-2 px-4 transition ease-in-out delay-150 duration-200  rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
            <span>
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="23" height="23" rx="3.5" stroke="black"/>
                    <path
                        d="M11.7004 18.675C12.6945 18.675 13.5004 17.9363 13.5004 17.025C13.5004 16.1137 12.6945 15.375 11.7004 15.375C10.7063 15.375 9.90039 16.1137 9.90039 17.025C9.90039 17.9363 10.7063 18.675 11.7004 18.675Z"
                        stroke="black" stroke-linecap="round"/>
                    <path
                        d="M15.0004 23.075V21.975C15.0004 20.2711 13.5034 18.675 11.7004 18.675C9.89679 18.675 8.40039 20.2711 8.40039 21.975V23.075"
                        stroke="black" stroke-linecap="round"/>
                    <path
                        d="M16.0625 2.9375C14.742 2.94316 13.7604 3.125 13.05 3.43926C12.5199 3.67363 12.3125 3.85098 12.3125 4.45176V10.75C13.1244 10.0176 13.8449 9.8125 16.6875 9.8125V2.9375H16.0625ZM7.9375 2.9375C9.25801 2.94316 10.2396 3.125 10.95 3.43926C11.4801 3.67363 11.6875 3.85098 11.6875 4.45176V10.75C10.8756 10.0176 10.1551 9.8125 7.3125 9.8125V2.9375H7.9375Z"
                        fill="black"/>
                    </svg>

            </span>
                <p>Choose a Course</p>
            </a>
            <a href="#"
               class="flex item-center justify-center gap-2 font-bold shadow-md p-2 transition ease-in-out delay-150 duration-200  px-4 rounded-full hover:shadow-none hover:scale-110 hover:border hover:text-blue-600 hover:border-blue-600 ">
            <span>
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_502_16)">
                    <path
                        d="M13 0C11.3 0 10 1.3 10 3V9C10 10.7 11.3 12 13 12H19L23 16V12C24.7 12 26 10.7 26 9V3C26 1.3 24.7 0 23 0H13ZM17.188 3H18.906L20.594 9H19.094L18.687 7.5H17.187L16.813 9H15.5L17.188 3ZM18 4C17.9 4.4 17.788 4.888 17.687 5.188L17.407 6.5H18.594L18.312 5.187C18.113 4.888 18 4.4 18 4ZM3 10C1.3 10 0 11.3 0 13V19C0 20.7 1.3 22 3 22V26L7 22H13C14.7 22 16 20.7 16 19V13H13C11.1 13 9.594 11.7 9.094 10H3ZM7.594 12.906C9.294 12.906 10.094 14.306 10.094 15.906C10.094 17.306 9.613 18.194 8.813 18.594C9.213 18.794 9.687 18.9 10.187 19L9.813 20C9.113 19.8 8.387 19.488 7.687 19.187C7.587 19.087 7.412 19.094 7.312 19.094C6.112 18.994 5 18 5 16C5 14.3 5.994 12.906 7.594 12.906ZM7.594 14C6.794 14 6.406 14.9 6.406 16C6.406 17.2 6.794 18 7.594 18C8.394 18 8.812 17.1 8.812 16C8.812 14.9 8.394 14 7.594 14Z"
                        fill="black"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_502_16">
                    <rect width="26" height="26" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>

            </span>
                <p>Help & FAQs</p>
            </a>

        </div>
    </section>
    <main class=" w-full min-h-auto flex item-center justify-center flex-col">
        <div class="form_container   px-8 md:w-2/3 h-full mx-auto">
            <div
                class="bg-slate-100 flex items-center justify-center flex-col my-8  rounded min-h-auto pb-4 lg:pb-24">
                <h2 class="bg-blue-600 text-white text-2xl rounded font-bold w-full px-4 md:px-16 py-4 text-center">
                    Course Login</h2>
                <p class="py-8 ">Welcome back! Please enter your login information below to continue:</p>
                <form class="w-full max-w-2xl bg-white rounded-lg shadow-md p-8" method="POST"
                      action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">{{ __('Email Address') }}<span
                                class="text-red-600">*</span></label>

                        <input id="email" type="email"
                               class="appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">

                        @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="col-md-4 col-form-label text-md-end">Driver's License #:<span
                                class="text-red-600">*</span></label>

                        <input id="password" type="password"
                               class="appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password"
                               placeholder="Please enter your driving license">

                        @error('password')
                        <p class="text-sm text-red-600">Driver's License is not correct</p>
                        @enderror


                    </div>
                    <button class="text-center bg-blue-600 py-3 text-white font-bold w-full rounded hover:bg-blue-700">
                        Login Now
                    </button>
                </form>
                <div class="w-full max-w-2xl text-end py-6">
                    <a href="#"
                       class="transition ease-in-out delay-150 duration-200 text-blue-600 font-bold px-8 py-2 bg-slate-200 rounded-full hover:shadow-lg">(Forgot
                        password? Click here)</a>
                </div>
                <p>Still having trouble? Give us a call at 1-800-691-5014 and we will help you login.</p>
            </div>
        </div>
    </main>

@endsection
