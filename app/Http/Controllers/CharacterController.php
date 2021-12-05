<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Array_;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $page= (string)(isset($_GET['page']) ? "?page=".($_GET['page']) : '');

        //$response = Http::get('https://rickandmortyapi.com/api/character/');
        $url = 'https://rickandmortyapi.com/api/character/'.$page;
        $response = ('{"info":
        {"count":826,"pages":42,"next":"https://rickandmortyapi.com/api/character/?page=2","prev":null},
        "results":[
        {"id":1,"name":"Rick Sanchez","status":"Alive","species":"Human","type":"","gender":"Male","origin":
        {"name":"Earth (C-137)","url":"https://rickandmortyapi.com/api/location/1"},
        "location":{"name":"Citadel of Ricks","url":"https://rickandmortyapi.com/api/location/3"},
        "image":"https://rickandmortyapi.com/api/character/avatar/1.jpeg",
        "episode":["https://rickandmortyapi.com/api/episode/1","https://rickandmortyapi.com/api/episode/2"],
        "url":"https://rickandmortyapi.com/api/character/2","created":"2017-11-04T18:50:21.651Z"}]}');
        $response = file_get_contents($url);
        $res = json_decode($response);
        $pages = intval($res->info->pages);
        $nextPage = parse_url($res->info->next, PHP_URL_QUERY);
        $current = (int) filter_var($res->info->next, FILTER_SANITIZE_NUMBER_INT);
        $currentPage = (($current == $pages) ? $pages : $current-1);
        $previousPage = (($current <= 2) ? 1 : $current-2 );
        $info = Array (
            'prev' => $previousPage,
            'current' => $currentPage,
            'next' => $nextPage,
            'pages' => $pages,
            'results' => $res->results
        );
        $info = (object)($info);
//var_dump($url);
        return view('character', array('index' => $info) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //todo: factory check and possible insert
        //$response = Http::get('https://rickandmortyapi.com/api/character/');

        //$response = json_decode(file_get_contents($response));
        //$res = 'X=sfvgas,X1=herhhh,X2=erhghgewg';
        //return view('character', array($res));
        //return view('character', array('character' => $response));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {

        if(preg_match('/^[0-9]+$/', $id) && $id > 0 && $id < 827) {
            $this->$id = $id;
        } else {
            $id = 1;
        }
        //todo: factory check
        //$id = \App\Models\Character::find($id);
        $url = 'https://rickandmortyapi.com/api/character/'.$id;
        $response = json_decode(file_get_contents($url));
        return view('character', array('character' => $response));
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
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }
//
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
//
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
