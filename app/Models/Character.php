<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    //if isset in database
    use HasFactory;
    //else
    protected string $url = "https://rickandmortyapi.com/api/character/";

    protected int $id;
    protected string $name;
    protected string $status;
    protected string $species;
    protected string $type;
    protected string $gender;
    protected string $image;


    public function characterGet(): bool
    {
        $data = json_encode([
            'id' => $this->id,
            'name' => $this->name,
            'status' => $this->status,
            'species' => $this->species,
            'type' => $this->type,
            'gender' => $this->gender,
            'image' => $this->image
        ]);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_PUT, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        //curl_close();

        return true;
    }



}
