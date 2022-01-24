<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WalletController extends Controller
{
   public function wallet(){

       return view ('payfees');
   }

   public function fund(Request $request)
   {


       $data = $request->validate([
           'amount' => 'required|integer|min:100',
           'password' => 'required',
           'reference'=> 'required|unique:transactions,reference'
       ]);

       if (!Hash::check($request->password, Auth::user()->password)) {
           return back()->with(['error' => 'incorrect account password']);
       }

      $transaction =  Auth::user()->transactions()->create([
           'amount' => $request->amount,
           'transaction_type_id'=> 1,
           'is_credit' => true,
           'reference' => $request->reference

       ]);


       try{
           return \Paystack::getAuthorizationUrl()->redirectNow();
       }catch(\Exception $e) {
           dd(\Paystack::getAuthorizationUrl());
           $transaction->status='failed';
           $transaction->save();
           return back()->with(['error'=>'error while processing payments.']);
       }

   }

   public function fundCallback()
   {
      //  get payment details from paystack
   $paymentDetails = \Paystack::getPaymentData();

  //  get reference from payment details gotten from paystack
  $reference =$paymentDetails['data']['reference'];
  // get transaction from db
  $transaction = Transaction::where('reference', $reference)->first();
  // check if txn has been paid
  if ($transaction->status == 'success') {
      return back()->with(['error'=> 'invalid transaction']);
  }
// check if payment was successful
  if ($paymentDetails['data']['status'] != 'success') {
      return back()->with(['error'=> 'failed transaction, please try again']);
  }

  // $user =$transaction->user;
  // $wallet=$user->wallet;

  // get users wallet
  $wallet= $transaction->user->wallet;



  // credit user wallet
  $wallet->balance= $wallet->balance + $transaction->amount;
  $wallet->save();

  // update transaction
  $transaction->status='success';
  $transaction->save();

  // return success message
  return back()->with(['success'=>'Account credited successfully']);

      dd($paymentDetails);
   }



 /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function fun()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }

    }

    public function fundCallbac()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }



}
