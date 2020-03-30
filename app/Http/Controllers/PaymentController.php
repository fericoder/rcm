<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Payment;
use App\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay($vahed, $amount, $id)
    {
        $invoice = Invoice::findOrFail($id);
        if ($invoice->status === 'paid') {
            alert()->warning('این صورتحساب پرداخت شده است.', 'خطا');
            return redirect()->route('dashboard.index');
        }


        try {
            $amount = (int) $amount;
            $gateway = \Gateway::saman();
            $gateway->setCallback(url("/paid/$vahed/$id/$amount"));
            $gateway->price((int) $amount)->ready();
            $refId = $gateway->refId();
            $transID = $gateway->transactionId();
            // Your code here
            return $gateway->redirect();
        } catch (\Larabookir\Gateway\Exceptions\RetryException $e) {
            alert()->warning('تراکنش قبلا ثبت شده است', 'خطا');
            return redirect()->route('dashboard.index');
            exit;

        } catch (\Larabookir\Gateway\Exceptions\PortNotFoundException $e) {

            alert()->warning('پورت نامعتبر است', 'خطا');

            return redirect()->route('dashboard.index');
            exit;


        } catch (\Larabookir\Gateway\Exceptions\InvalidRequestException $e) {
            alert()->warning('درخواست نامعتبر است', 'خطا');

            return redirect()->route('dashboard.index');
            exit;


        } catch (\Larabookir\Gateway\Exceptions\NotFoundTransactionException $e) {

            alert()->warning('صورتحساب نامعتبر است', 'خطا');

            return redirect()->route('dashboard.index');
            exit;


        }

    }

    public function paid($vahed, $id, $amount)
    {
        try {
            $gateway = \Gateway::verify();
            $trackingCode = $gateway->trackingCode();
            $refId = $gateway->refId();
            $cardNumber = $gateway->cardNumber();


            $invoice = Invoice::findOrFail($id);

            if ($invoice->amount == $amount) {

                //Update Invoice Status
                $invoice->status = 'paid';
                $invoice->save();

                // Add Payment
                $payment = Payment::create(['trackingCode' => $trackingCode, 'refId' => $refId, 'cardNumber' => $cardNumber, 'amount' => $amount, 'vahed' => $vahed, 'user_id' => \Auth::user()->id, 'invoice_id' => $id]);

                // Send SMS
//                $vahed = User::where('email', trim($vahed))->first();
//                if (strlen($vahed->tenantMobileNumber) > 8 ){
//                    $mob = $vahed->tenantMobileNumber;
//                }else{
//                    $mob = $vahed->mobileNumber;
//                }
//
//                ini_set("soap.wsdl_cache_enabled", "0");
//                $sms_client = new \SoapClient('http://api.payamak-panel.com/post/send.asmx?wsdl', array('encoding'=>'UTF-8'));
//                $parameters['username'] = "riecocompany";
//                $parameters['password'] = "8833";
//                $parameters['to'] = $mob;
//                $parameters['from'] = "10001010111";
//                $parameters['text'] ="باسلام
//                صورتحساب شارژ با موفقیت پرداخت شد.
//
//                بابت: بدهی تا انتهای تیر ماه
//                مبلغ:$amount
//                کد پیگیری:$trackingCode
//
//                سامانه مدیریت برج مسکونی المپیک
//                www.olympictower.ir";
//                $parameters['isflash'] = false;
//                $sms_client->SendSimpleSMS2($parameters)->SendSimpleSMS2Result;

                alert()->success("کد پیگیری:$trackingCode ", 'پرداخت شد');
                return redirect()->route('dashboard.index');
            } else {
                alert()->warning( "کد پیگیری:$trackingCode ", 'پرداخت شد');
                return redirect()->route('dashboard.index');
            }


        } catch (\Larabookir\Gateway\Exceptions\RetryException $e) {
            alert()->warning('تراکنش قبلا ثبت شده است', 'خطا');
            return redirect()->route('dashboard.index');
            exit;

        } catch (\Larabookir\Gateway\Exceptions\PortNotFoundException $e) {

            alert()->warning('پورت نامعتبر است', 'خطا');

            return redirect()->route('dashboard.index');
            exit;


        } catch (\Larabookir\Gateway\Exceptions\InvalidRequestException $e) {
            alert()->warning('درخواست نامعتبر است', 'خطا');

            return redirect()->route('dashboard.index');
            exit;


        } catch (\Larabookir\Gateway\Exceptions\NotFoundTransactionException $e) {

            alert()->warning('صورتحساب نامعتبر است', 'خطا');

            return redirect()->route('dashboard.index');
            exit;


        } catch (\Larabookir\Gateway\Saman\SamanException $e) {

            alert()->warning('تراکنش لغو شد', 'خطا');

            return redirect()->route('dashboard.index');
            exit;


        }


    }


}
