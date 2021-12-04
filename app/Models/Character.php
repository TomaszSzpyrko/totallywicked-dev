<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\CollectsResources;
use Illuminate\Support\Facades\Http;


class Character extends Model
{
    //if isset in database
    use HasFactory, CollectsResources;
    //else
    //public string $apiId = $_GET(basename()) !== null ?: "";
    protected string $url = "https://rickandmortyapi.com/api/character/";
    protected int $id;
    protected string $name;
    protected string $status;
    protected string $species;
    protected string $type;
    protected string $gender;
    protected string $image;



    public function characterGet(): array
    {
       //$data ='';
        //$data = file_get_contents('https://rickandmortyapi.com/api/character/');

        $client = new Client();
        $url = "https://rickandmortyapi.com/api/character/";
        $response = $client->request('GET', $url);

        if (!empty($response)) {
            $response = json_decode(json: $response);
        } else         {
            $response = 'XXXX';
        }
        return $response;
    }

}

