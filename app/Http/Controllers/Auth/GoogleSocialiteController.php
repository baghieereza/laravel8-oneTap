<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Google_Client;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use Exception;
use App\Models\User;

class GoogleSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {

        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback(Request $request)
    {

        $client = new Google_Client(['client_id' => "your-client-id"]);  // Specify the CLIENT_ID of the app that accesses the backend
        $payload = $client->verifyIdToken($_POST["credential"]);
        if ($payload) {
            $user = User::where('email', $payload["email"])->first();
            if ($user) {
                // do login
            } else {
                // do register
            }

        } else {
            return false;

        }
    }


}
