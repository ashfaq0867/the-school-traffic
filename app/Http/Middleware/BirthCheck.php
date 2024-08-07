<?php

    namespace App\Http\Middleware;

    use App\Models\UserDetail;
    use Carbon\Carbon;
    use Closure;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Symfony\Component\HttpFoundation\Response;


    class BirthCheck
    {
        /**
         * Handle an incoming request.
         *
         * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
         */
        public function handle(Request $request, Closure $next): Response
        {
            if (!$request->session()->has('section_birth')) {
                $url = url()->current();
                $request->session()->put('previousUrl', $url);
                return redirect('verify/' . $request->route('id'));
            }
            $request->session()->forget('previousUrl');
            return $next($request);
        }
    }
