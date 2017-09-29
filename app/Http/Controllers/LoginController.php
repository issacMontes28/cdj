<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Socialite;
use Redirect;

class LoginController extends Controller
{
    /**
    * Redirect the user to the GitHub authentication page.
    *
    * @return Response
    */
   public function redirectToProvider($provider)
   {
       return Socialite::driver($provider)->redirect();
   }

   /**
    * Obtain the user information from GitHub.
    *
    * @return Response
    */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect('/home');
    }
    public function findOrCreateUser($user, $provider)
    {
      $authUser = User::where('provider_id', $user->id)->first();
      if ($authUser) {
          return $authUser;
      }
      return User::create([
          'name'     => $user->name,
          'email'    => $user->email,
          'provider' => $provider,
          'provider_id' => $user->id
      ]);
    }
}
