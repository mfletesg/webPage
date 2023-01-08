<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $array = array(
        ['banda' => 'Foo Fighters', 'logo' => ''],
        ['banda' => 'Oasis', 'logo' => ''],
        ['banda' => 'Blink 182', 'logo' => ''],
        ['banda' => 'Incubus', 'logo' => ''],
        ['banda' => 'Nirvana', 'logo' => ''],
        ['banda' => 'Arctic Monkeys', 'logo' => ''],
        ['banda' => 'Metallica', 'logo' => '']

      );
      return json_encode($array);
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
}
