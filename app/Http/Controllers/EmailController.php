<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
Use Mail;
class EmailController extends Controller
{
   public function invoiceView()
    {
         return view('pages.invoiceForm');
    }

    public function createEmailInvoice(Request $request)
    {
         //echo'<pre>'; print_r($_POST); die;
         $client = new Invoice();
         $client->client_name = $request->client_name;
         $client->invoice_date = $request->invoice_date;
         $client->invoice_number = $request->invoice_number;
         $client->amount = $request->amount;
         $client->due_date = $request->due_date;
         $client->status = $request->status;
         $client->email = $request->email;
         $client->save();
         $client->id;

         $data=['id'=>$client->id,'client_name'=>$request->client_name]; 
         $user['to']=$request->email;
         Mail::send('pages.setvalue',$data,function ($messges) use ($user){
         $messges->to( $user['to']);
         $messges->subject('hiii');
     });
    }

    public function statusUpdate()
    {
         echo'<pre>'; print_r('hi'); die;
    }
}
