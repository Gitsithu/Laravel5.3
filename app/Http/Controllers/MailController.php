<?php

namespace laravel_5_3\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('email.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function basic_email()
    {
        $data = array('name' => "Wai Yan Aung");
        Mail::send(['text' => 'mail'], $data, function ($message) {
            $message->to('waiyan.office@gmail.com', 'Tutorials Point')->subject('Laravel Basic Testing Mail');
            $message->from('testing20170520@gmail.com', 'Si Thu Larave');
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    public function basic_email2(Request $request)
    {
        
        $to_email = $to = $request->input('email');
        $to_email_name = $request->input('email_name');
        $subject = $request->input('subject');
        $send_message = $html = $request->input('message');
        $plain = "";
        $fromEmail = 'xyz@gmail.com';
        $fromName = 'Si Thu Laravel';
        Mail::raw([], function($message) use($html, $plain, $to, $subject, $fromEmail, $fromName){
            $message->from($fromEmail, $fromName);
            $message->to($to);
            $message->subject($subject);
            $message->setBody($html, 'text/html' ); // dont miss the '<html></html>' if the email dont contains it to decrease your spam score !!
            $message->addPart($plain, 'text/plain');
        });        
        
        $successmessage = 'Success, Mail sent successfully ...!';
        $request->session()->flash('success', $successmessage);

        return redirect()->route('email');
    }

    public function html_email(Request $request)
    {
        $data = array('name' => "Virat Gandhi");
        Mail::send('mail', $data, function ($message) {
            $message->to('waiyan.office@gmail.com', 'Tutorials Point')->subject('Laravel HTML Testing Mail');
            $message->from('xyz@gmail.com', 'Wai Yan Aung');
        });
        echo "HTML Email Sent. Check your inbox.";
    }

    public function html_email2(Request $request)
    {
        $data = array('name' => "Virat Gandhi");
        Mail::send('mail', $data, function ($message) {
            $message->to('waiyan.office@gmail.com', 'Tutorials Point')->subject('Laravel HTML Testing Mail');
            $message->from('xyz@gmail.com', 'Wai Yan Aung');
        });
        $successmessage = 'Success, Mail sent successfully ...!';
        $request->session()->flash('success', $successmessage);

        return redirect()->route('email');
    }

    public function attachment_email(Request $request)
    {
        $data = array('name' => "Wai Yan Aung");
        Mail::send('mail', $data, function ($message) {
            $message->to('laraveltest150@gmail.com', 'Testingattach')->subject('Laravel Testing Mail with Attachment');

            $attachFile = public_path() . '/images/temp_image.jpg';
            $attachFile2 = public_path() . '/images/test.txt';

            $message->attach($attachFile);
            $message->attach($attachFile2);

            $message->from('laraveltest150@gmail.com', 'Testingattach');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }

    public function attachment_email2(Request $request)
    {
        $data = array('name' => "Wai Yan Aung");
        Mail::send('mail', $data, function ($message) {
            $message->to('laraveltest150@gmail.com', 'Testing dick tha khin gyi')->subject('Laravel Testing Mail with Attachment');

            $attachFile = public_path() . '/images/temp_image.jpg';
            $attachFile2 = public_path() . '/images/test.txt';

            $message->attach($attachFile);
            $message->attach($attachFile2);

            $message->from('laraveltest150@gmail.com', 'Testing dick tha khin gyi');
        });
        $successmessage = 'Success, Mail sent successfully ...!';
        $request->session()->flash('success', $successmessage);

        return redirect()->route('email');
    }
}
