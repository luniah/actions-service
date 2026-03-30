<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Example",
 *     description="Simple example endpoints"
 * )
 */
class SimpleController extends Controller
{
    /**
     * @OA\Get(
     *     path="/hello",
     *     summary="Say hello",
     *     description="Returns a simple hello message",
     *     tags={"Example"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Hello World!")
     *         )
     *     )
     * )
     */
    public function hello()
    {
        return response()->json(['message' => 'Hello World!']);
    }

    /**
     * @OA\Get(
     *     path="/bye",
     *     summary="Say goodbye",
     *     description="Returns a simple goodbye message",
     *     tags={"Example"},
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Goodbye!")
     *         )
     *     )
     * )
     */
    public function bye()
    {
        return response()->json(['message' => 'Goodbye!']);
    }
}
