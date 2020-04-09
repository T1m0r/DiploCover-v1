<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class StudentMailController extends Controller
{
    //

    public function remail(Request $request)
    {
        if(Auth::user()->activated == 1){
            return redirect()->route('sthome')->with('note','You are already verifyed');
        }

        $code = Auth::user()->token;
        $sid = Auth::user()->sID;
        $scode = Auth::user()->scode;
        $email = Auth::user()->email;

        $querydata = ['confirmcode'=>$code,'sid'=>$sid, 'scode'=>$scode, 'email'=>$email];
        $querystring = http_build_query($querydata);

        //$link = route('st_confirm') . '?confirmcode=' . urlencode($code) . '&sid=' . urlencode($request['SID']) . '&scode=' . urlencode($request['scode']) . '&email=' . urlencode($request['email']);
        $link = route('st_confirm') . '?' .$querystring;


        $data = array('name' => $email, 'link' => $link);
        $to = $request['email'];
        Mail::send('mails.register.students.wc.mail', $data, function ($message) use ($to) {
            $message->to($to, $to)
                ->subject('Registrierung DiploCover');
            $message->from('info@diplocover.at', 'DiploCover');
        });


        return view('register.students.wc.success');
    }


}
