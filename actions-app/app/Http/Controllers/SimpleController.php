<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

#[OA\Tag(
    name: "Example",
    description: "Simple example endpoints"
)]
class SimpleController extends Controller
{
    #[OA\Get(
        path: "/hello",
        description: "Returns a simple hello message",
        summary: "Say hello",
        tags: ["Example"],
        responses: [
            new OA\Response(
                response: 200,
                description: "Successful operation",
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: "message", type: "string", example: "Hello World!")
                    ]
                )
            )
        ]
    )]
    public function hello()
    {
        return response()->json(['message' => 'Hello World!']);
    }

    #[OA\Get(
        path: "/bye",
        description: "Returns a simple goodbye message",
        summary: "Say goodbye",
        tags: ["Example"],
        responses: [
            new OA\Response(
                response: 200,
                description: "Successful operation",
                content: new OA\JsonContent(
                    properties: [
                        new OA\Property(property: "message", type: "string", example: "Goodbye!")
                    ]
                )
            )
        ]
    )]
    public function bye()
    {
        return response()->json(['message' => 'Goodbye!']);
    }
}
