<?php

namespace App\Http\Controllers;

use App\Models\Callback;
use App\Models\ContractInfo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function orderCall(Request $request)
    {
        // $callback = new Callback();
        // $callback->name = $request->name;
        // $callback->email = $request->telnum;
        // $callback->save();
        return response()->json(['success' => request()->all()]);
    }

    public function createContract(Request $request)
    {
        $ci = new ContractInfo();
        $ci->last_name = $request->lastName;
        $ci->first_name = $request->firstName;
        $ci->middle_name = $request->middleName;
        $ci->IIN = $request->IIN;
        $ci->PassportNo = $request->passportNo;
        $ci->Given = $request->given;
        $ci->period = $request->period;
        $ci->tel_num = $request->telnumCc;
        $ci->address = $request->address;
        $ci->sum = $request->sum;
        $ci->file = $request->file;

        $ci->save();
        return response()->json(['success' => 'Data is successfully added']);
    }

    public function callbackProcess(Request $request)
    {
        $callback = new Callback();
        $callback->name = $request->nameCb;
        $callback->email = $request->emailCb;
        $callback->subject = $request->subjectCb;
        $callback->message = $request->msgCb;
        $callback->save();
        return response()->json(['success' => request()->all()]);
    }
}
