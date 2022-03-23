<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $contrainer = $app->getContainer();
    
    //    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
      //  return $response;
    //});
    $app->get('/api//kelas', function (Request $request, Response $response) {
        $sql = "SELECT * FROM kelas";
        $stmt = $this->$db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $payload = json_encode($data);
        return $response->withJson(["status"=>"success","data"=>$result],200);
    });
};
