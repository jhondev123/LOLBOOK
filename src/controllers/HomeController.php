<?php

namespace Jhona\LolBook\controllers;

class HomeController
{
    public function handle()
    {
        require_once __DIR__. "/../../config/Champs.php";
        $url = "http://ddragon.leagueoflegends.com/cdn/13.13.1/data/en_US/champion.json";
        $personagens = \Champs::allChamps();


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $champs = curl_exec($curl);
        curl_close($curl);
        $champsObj = json_decode($champs);
        //$champsObj->data->Aatrox->tags[0] Para acessar as funções
        //$champsObj->data->Aatrox->title Titulo do personagem

        //var_dump($champsObj->data->Aatrox);
        //exit();
        require_once __DIR__ . "/../../views/series/home.php";

    }
}