<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImgConverterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ImgConvert', ['name' => $_SERVER['REMOTE_ADDR']]);
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

        $imageRequest = $request->file('fileIMG');

        // print_r($request->file('fileIMG'));
        // die;
        $fileName = $request->file('fileIMG')->getClientOriginalName();
        $imageData = base64_encode(file_get_contents($imageRequest));

        $image = imagecreatefromstring(base64_decode($imageData));
        imagewebp($image, public_path('img/image.webp'));


        $shift = 3;
        $cipheredText = $this->caesarCipher($imageData, $shift);

        $filename = pathinfo($fileName, PATHINFO_FILENAME);

        //Storage::disk('local')->put('file212.txt', '122');

        File::put('img/photos/'.$filename.'.txt',$cipheredText);

        error_log('Hola Mundo');


        $response = array('message' => $cipheredText, 'img' => $filename);
        return json_encode($response);
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

    public function caesarCipher($text, $shift)
    {
        $cipheredText = "";
        for ($i = 0; $i < strlen($text); $i++) {
            $c = ord($text[$i]);
            if ($c >= 65 && $c <= 90) {
                $c = 65 + (($c - 65 + $shift) % 26);
            } elseif ($c >= 97 && $c <= 122) {
                $c = 97 + (($c - 97 + $shift) % 26);
            }
            $cipheredText .= chr($c);
        }
        return $cipheredText;
    }
}
