<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class WebController extends Controller
{
    //function for web navigation - researchers
    public function researchers(){
        return view('web.researchers');
    }

    //function for web navigation - Consultant
    public function consultant(){
        return view('web.publications');
    }

    //function for web navigation - news
    public function news(){
        return view('web.news');
    }

    //function for web navigation - people
    public function peoples(){
        return view('web.people');
    }

    //function for web navigation - about
    public function about(){
        return view('web.about');
    }

    //function for web navigation - contact
    public function contact(){
        return view('web.contact');
    }

    //function for web navigation - projects
    public function projects(){
        return view('web.project');
    }

    //function for web navigation - projects
    public function courses(){
        return view('web.course');
    }

    // New function to handle email sending
    public function sendEmail(Request $request)
    {
        // Validate the request data
        if(empty($request->name) || empty($request->email) || empty($request->subject) || empty($request->message)) {
            return redirect()->back()->with('error', 'Message could not be sent, All fields are required.');
        }

        // Send email
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                
            $mail->isSMTP();                                 
            $mail->Host       = 'smtp.gmail.com';          
            $mail->SMTPAuth   = true;                               
            $mail->Username   = 'smartgrid.lab.uom@gmail.com';             
            $mail->Password   = 'tnzjjlhdsjruebjk';                     
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
            $mail->Port       = 465; 

            //Recipients
            $mail->setFrom($request->email, $request->name);
            $mail->addAddress('smartgrid.lab.uom@gmail.com', 'SmartGridLab');

            //Content
            $mail->isHTML(true);
            $mail->Subject = $request->subject;
            $mail->Body = "Name: {$request->name}<br>Email: {$request->email}<br>Subject: {$request->subject}<br>Message: {$request->message}";

            $mail->send();

            return redirect()->back()->with('success', 'Email has been sent successfully!');

        } 
        catch (Exception $e) 
        {
            return redirect()->back()->with('error', "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        }
    }

    
}
