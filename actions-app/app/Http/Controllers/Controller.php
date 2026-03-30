<?php

namespace App\Http\Controllers;

/**
 * @OA\Tag(
 *     name="contr",
 *     description="example endpoints"
 * )
 */
abstract class Controller
{
    // Если вы не планируете использовать этот метод напрямую,
    // лучше убрать аннотацию @OA\Get отсюда, чтобы не было дублирования.
    // Оставлю только для примера, но в реальности можно удалить.
    /**
     * @OA\Get(
     *     path="/hello",
     *     summary="Say hello (from base controller)",
     *     tags={"contr"},
     *     @OA\Response(response=200, description="Hello message")
     * )
     */
    public function hello()
    {
        return response()->json(['message' => 'Hello World!']);
    }
}
