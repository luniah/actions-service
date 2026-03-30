<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: "1.0.0",
    description: "Test API",
    title: "Test API"
)]
#[OA\Server(
    url: "http://127.0.0.1:8000",
    description: "Local server"
)]
#[OA\Tag(
    name: "Controller",
    description: "Example"
)]
abstract class Controller
{
    //
}
