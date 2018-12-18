<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dacastro4\LaravelGmail\Facade\LaravelGmail;
use Dacastro4\LaravelGmail\Services\Message\Mail;
class GmailController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$messages = LaravelGmail::message()->subject('API CTM')->preload()->all();
foreach ( $messages as $message ) {
    $body = $message->getHtmlBody();
    $subject = $message->getSubject();
echo $body;
	$mail = new Mail();
}

$mail->to('alex@gravystudio.com','Alexander');
$mail->from('alex@gravystudio.com','Alex');
$mail->subject('Api test');
$mail->message('test');
$mail->send();

    }
}
