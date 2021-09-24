<?php

function getRegisteredAPI(){

    return ["abcd","de4f","bcra"];
}

function isInputValid($input){

    $api_key = $input["api_key"];

    if (in_array($api_key, getRegisteredAPI())) {

            return true;
    } else {
        return false;
    }
 
}

function jsonOutput($status, $message, $data) {

    $response = ["status" => $status, "message" => $message, "data"=> $data];

    header("Content-type: application/json");
    echo json_encode($response);
}

function getNewsData(){

    $news = [

        ["title" => "Lorem Ipsum", "content" => "sit dolor amet", "writer" => "Agus"],
        ["title" => "Inul kaget syaipul jamil menginap di rumahnya", "content" => "sit dolor amet", "writer" => "David"],
        ["title" => "Syaipul jamil menginap di rumah inul", "content" => "sit dolor amet", "writer" => "Mickey"]

    ];

    return $news;   
}

if(isInputValid($_GET)) {

    jsonOutput("success","Successfully get news data!",getNewsData());
} else {

    jsonOutput("fail","Invalid api key!",getNewsData());
}




