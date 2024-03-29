<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }
    public function broker()
{
    return Password::broker('users');
}
/**
 * Send a reset link to the given user.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
 */
public function sendResetLinkEmail(Request $request)
{
    $request->validate(['email' => 'required|email']);

    $response = $this->broker()->sendResetLink(
        $request->only('email')
    );

    return $response == Password::RESET_LINK_SENT
        ? $this->sendResetLinkResponse($response)
        : $this->sendResetLinkFailedResponse($request, $response);
}

/**
 * Get the response for a successful password reset link.
 *
 * @param  string  $response
 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
 */
protected function sendResetLinkResponse($response)
{
    return back()->with('status', trans($response));
}

/**
 * Get the response for a failed password reset link.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  string  $response
 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
 */
protected function sendResetLinkFailedResponse(Request $request, $response)
{
    return back()->withErrors(
        ['email' => trans($response)]
    );
}

}
