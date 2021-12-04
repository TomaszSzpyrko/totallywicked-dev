<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Models\CharacterTest;
//use \App\Models\Character;

//class ParameterController extends Controller
//{
//    /**
//     * Update the specified parameter.
//     *
//     * @param  Request  $request
//     * @param  string  $id
//     * @return Factory|Application|View
//     */
//    public function update(Request $request, $id)
//    {
//        if ($request->is('character/*')) {
//            return view('character');
//        }
//    }
//}


class Character extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|Application|View
     */
    public function index()
    {
       // $input = $_GET->path();
       // var_dump($input);
//        if ($input->is('character/*'))
//        {
//            return view('character');
//        }
//        else
            return view('home');
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Factory|Application|View
     */
    public function show(\App\Models\Character $id)
    {
        $path = explode('/',$_SERVER['PHP_SELF']);
        $this->$id = end($path);

        $characterGet = \App\Models\Character::find($id);
        return view('character', array('character' => $characterGet));
//
//            echo $id;
//        return view('character',$characterGet);
    }

//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }

//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }

//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//    }
}
