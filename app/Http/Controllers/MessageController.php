<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use Illuminate\Support\Facades\DB;
use App\Models\message;

class MessageController extends Controller
{
    
    public function index() {
        return view ('message');
    }

    public function send_message(MessageRequest $msg_req) {
        $name = $msg_req->name;
        $email = $msg_req->email;
        $msg = $msg_req->message;

        DB::insert('insert into messages (id, name, email, message) values (null, :name, :email, :msg)', 
        ['name'=>$name, 'email'=>$email, 'msg'=>$msg]);
        return view ('message', ['feedback'=>'Succesfully send']);
    }

    public function get_message() {
        $messages = DB::select('select * from messages');

        return view ('messages', ['messages'=>$messages]);
    }

    public function model_message() {
        $messages = message::all();

        return view ('messages', ['messages'=>$messages]);
    }

    

    
}
