<?php

namespace App\Http\Controllers;

use App\Models\randomNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use stdClass;

class randomNumberController extends Controller
{
    private $randomNumberss = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo 'hi';
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

    /**
     * Generate a unique ID from Laravel package
     */
    public function generate()
    {

        $data = [];
        $data['number'] = strval(Str::random(9));
        $data['uuid'] = strval(Str::uuid());

        // save it to DB
        randomNumber::create($data);

        return json_encode($data);
    }

    public function retrieve(string $uuid)
    {
        $number = randomNumber::Where('uuid', $uuid)->firstOrFail();


        return json_encode($number->number);
    }
}
