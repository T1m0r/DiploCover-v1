<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //Sending Contact form and Confirmation Email
    public function send(Request $request){
        $this->validate($request,[
            'fmname'=>'required',
            'fmail'=>'required',
            'fmsg'=>'required',
            ]);
        $from = $request['fmail'];
        $fromname = $request['fmname'];
        if(isset($request['fmphone']) and $request->has('fmphone')){
            $data = array('msg'=>$request['fmsg'], 'name'=>$request['fmname'], 'mail'=>$request['fmail'], 'phone'=>$request['fmphone']);

        }else{
            $data = array('msg'=>$request['fmsg'], 'name'=>$request['fmname'], 'mail'=>$request['fmail']);
        }
        Mail::send(['text'=>'mails/contact'], $data, function($message) use ($from,$fromname) {
            $message->to('diplocover@gmail.com', 'DiploCover')->subject
            ('Nachricht | DiploCover');
            $message->from($from,$fromname);
        });
        $to = $request['fmail'];
        Mail::send(['text'=>'mails/contacted'], $data, function($message) use ($to) {
            $message->to($to, $to)->subject
            ('Nachricht | DiploCover');
            $message->from('diplocover@gmail.com','DiploCover Team');
        });
        echo "Email erfoglreich gesendet";

    }

}
