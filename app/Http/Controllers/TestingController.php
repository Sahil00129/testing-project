<?php

namespace App\Http\Controllers;
use App\Models\First;
use Response;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function firstForm()
    {
        return view('pages.firstForm');
    }

    public function firstFormSubmit(Request $request)
    {
        $folderPath = public_path('upload/');
       
        $image_parts = explode(";base64,", $request->signed);
             
        $image_type_aux = explode("image/", $image_parts[0]);
           
        $image_type = $image_type_aux[1];
           
        $image_base64 = base64_decode($image_parts[1]);
 
        $signature = uniqid() . '.'.$image_type;
           
        $file = $folderPath . $signature;
 
        file_put_contents($file, $image_base64); 

        $sender = new First();
        $sender->name = $request->name;
        $sender->email = $request->email;
        $address1 = $request->address_1;
        $address2 = $request->addres_2;
        $city = $request->city;
        $state = $request->state;
        $zip = $request->zip;
        $sender->address = json_encode(array('address1'=>$address1,'address2'=>$address2,'city'=>$city,'state'=>$state,'zip'=>$zip));
        $sender->date = $request->date;
        $sender->signed = $signature;
        
        $sender->save();
        

        $response['success'] = true;
        $response['messages'] = 'Succesfully imported';
        return Response::json($response);
    }

    public function tableView()

    {
        $data = First::all();
        //echo'<pre>'; print_r($data); die;
        return view ('pages.first-table',['data' => $data]);
    }
}
