<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\BuyerNotification;
use App\Notifications\RegistrationNotification;
use App\Notifications\VendorNotification;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Unicodeveloper\Paystack\Facades\Paystack;


class RegistrationController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => 'required|numeric|digits:11'
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'type' => 'Buyer',
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        $code = $this->generateBuyerCode($user);

        //notify user
        $user->notify(new BuyerNotification($code));

        return back()->with('success', 'Registration Completed! Your unique buyer code has been sent to your email');
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function storeVendor(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => 'required|numeric|digits:11'
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'type' => 'Vendor',
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        $boothNumber = $this->assignBoothNumber($user);

        //notify user
        $user->notify(new VendorNotification($boothNumber));

        return back()->with('success', 'Registration Completed! Your booth number has been sent to your email');
    }

    public function assignBoothNumber($vendor)
    {
        $vendorId = (string)$vendor->id;
        $boothNumber = '';
        if (strlen($vendorId) == 1){
            $boothNumber = 'BT000' . $vendorId;
        } elseif (strlen($vendorId) == 2) {
            $boothNumber = 'BT00' . $vendorId;
        } elseif (strlen($vendorId) == 3) {
            $boothNumber = 'BT0' . $vendorId;
        } else {
            $boothNumber = 'BT' . $vendorId;
        }
        return $boothNumber;
    }

    public function generateBuyerCode($buyer)
    {
        $buyerId = (string)$buyer->id;
        $buyerCode = '';
        if (strlen($buyerId) == 1){
            $buyerCode = 'CU000' . $buyerId;
        } elseif (strlen($buyerId) == 2) {
            $buyerCode = 'CU00' . $buyerId;
        } elseif (strlen($buyerId) == 3) {
            $buyerCode = 'CU0' . $buyerId;
        } else {
            $buyerCode = 'CU' . $buyerId;
        }
        return $buyerCode;
    }
}
