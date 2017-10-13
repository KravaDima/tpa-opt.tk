<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Leed;
use Illuminate\Support\Facades\Mail;
use Swift_Transpotr;
use Swift_Message;
use Swift_Mailer;

class LeedController extends Controller
{
    public function create()
    {
    	return view('leed/create');
    }

    public function store(Leed $leedModel, Request $request)
    {
    	// if($leedModel->create($request->all())) {

    	// 	);
    	// }
        LeedController::mail($request->all());
    	return redirect()->route('main');
    }

    public function mail($array)
    {
        $data_toview = array();
        $data_toview['bodymessage'] = "Доброго времени суток. В приложении оптовый прайс на ароматизаторы TPA. Готов ответить на все интересующие Вас вопросы. Спасибо.
https://docs.google.com/spreadsheets/d/1NAv5ebWxP7QLBvRchf7f54AI3mrf9AePnL6wSaYh-5c/edit?usp=sharing";

        $email_sender = 'tpa.opt.tk@gmail.com';
        $email_pass = 'ixllplazuymrjudw';
        $email_to = 'dripping.me@gmail.com';

        $backup = \Mail::getSwiftMailer();

    	$name = $array['name'];
    	$tel = $array['tel'];
    	$email_client = $array['email'];
        try{
            $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls');
            $transport->setUsername($email_sender);
            $transport->setpassword($email_pass);

            $gmail = new Swift_Mailer($transport);

            \Mail::setSwiftMailer($gmail);

            $data['email_admin'] = $email_sender;
            $data['email_client'] = $email_client;
            $data['client_name'] = $name;
            $data['tel'] = $tel;

            Mail::send('emails.contact', $data, function($message) use ($data){
                    $message->from($data['email_admin'], 'Opt Tpa');
                    $message->to($data['email_client'])->replyTo($data['email_admin'], $data['client_name'])->subject('Прайс Opt-Tpa');
                });

             Mail::send('emails.newleed', $data, function($message) use ($data){
                    $message->from($data['email_client'], 'Opt Tpa');
                    $message->to($data['email_admin'])->replyTo($data['email_client'], 'Opt Tpa')->subject('Запрос Прайса "Opt-Tpa"');

                    echo "The Mail has been successfully";
                });
        }catch(\Swift_TranspotrException $e){
            $response = $e->getMessage();
            echo $response;
        }

        Mail::setSwiftMailer($backup);

    }
}
