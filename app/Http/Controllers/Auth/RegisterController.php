<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Models\State;
    use App\Models\User;
    use App\Models\UserDetail;
    use Illuminate\Foundation\Auth\RegistersUsers;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;

    class RegisterController extends Controller
    {
        /*
        |--------------------------------------------------------------------------
        | Register Controller
        |--------------------------------------------------------------------------
        |
        | This controller handles the registration of new users as well as their
        | validation and creation. By default this controller uses a trait to
        | provide this functionality without requiring any additional code.
        |
        */

        use RegistersUsers;

        /**
         * Where to redirect users after registration.
         *
         * @var string
         */
        protected $redirectTo = '/home';

        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('guest');
        }

        /**
         * Get a validator for an incoming registration request.
         *
         * @param array $data
         * @return \Illuminate\Contracts\Validation\Validator
         */
        protected function validator(array $data)
        {
            return Validator::make($data, [
                "first_name" => ['required', 'string', 'max:255'],
                "last_name" => ['required', 'string', 'max:255'],
                "email_address" => ['required', 'email', 'unique:users,email'],
                "confirm_email" => ['required', 'string', 'same:email_address'],
                "state" => ['required', 'string', 'max:255'],
                "driver_license" => ['required', 'string', 'max:255'],
                "birthDate" => ['required', 'string', 'max:255'],
                "agreement" => ['required', 'string', 'max:255'],
                "id" => ['required', 'string', 'max:255'],
            ]);


        }

        /**
         * Create a new user instance after a valid registration.
         *
         * @param array $data
         * @return \App\Models\User
         */
        protected function create(array $data)
        {
            $user = User::create([
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email_address'],
                'password' => Hash::make($data['email_address']),
            ]);

            $userDetails = [
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email_address' => $data['email_address'],
                'state_id' => $data['state'],
                'dob' => $data['birthDate'],
                'driver_license' => $data['driver_license'],
                'agreement' => $data['agreement'],
                'special_offer' => $data['special_offer'] ?? 0,
                'user_id' => $user->id,
            ];

             UserDetail::create($userDetails);

             return  $user;

        }


        public function showRegistrationForm()
        {
            if (!request()->id) {
                return redirect('/');
            }
            $states = State::all();
            return view('auth.register')->with('states', $states);
        }

    }
