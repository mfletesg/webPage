<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Mail\EmailMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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

        $message  = array('error' => 0, 'message' => '', 'data' => '');

        if (!$request->has('inputName') || $request->input('inputName') == null) {
            $message  = array('error' => 1, 'message' => 'name is required', 'data' => $request->all());
            return json_encode($message);
        }

        if (!$request->has('inputEmail') || $request->input('inputEmail') == null) {
            $message  = array('error' => 1, 'message' => 'email is required', 'data' => $request->all());
            return json_encode($message);
        }

        if (!$request->has('inputSubject') || $request->input('inputSubject') == null) {
            $message  = array('error' => 1, 'message' => 'subject is required', 'data' => $request->all());
            return json_encode($message);
        }

        if (!$request->has('inputMessage') || $request->input('inputMessage') == null) {
            $message  = array('error' => 1, 'message' => 'message is required', 'data' => $request->all());
            return json_encode($message);
        }   

        $mailData = [
            'title'     =>  'Mensaje nuevo de contacto de ' . $request->input('inputName'),
            'body'      =>  $request->input('inputMessage'),
            'email'     =>  $request->input('inputEmail'),
            'subject'   =>  $request->input('inputSubject'),
        ];
         
        Mail::to($request->input('inputEmail'))->send(new EmailMail($mailData));

        $message  = array('error' => 0, 'message' => 'ok', 'data' => $request->input('inputName'));

        return json_encode($message);
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
}
