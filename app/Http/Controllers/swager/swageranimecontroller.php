<?php

namespace App\Http\Controllers\swager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



/**
 * 
 * @OA\Post(
 *     path="/api/animeposters/",
 *     summary="Аниме на главной странице",
 *     tags={"Animeposters"},
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="title", type="string", example="Some Title"),
 *                     @OA\Property(property="episodes", type="string", example="0/100"),
 *                     @OA\Property(property="type", type="string", example="OVA"),
 *                     @OA\Property(property="genre", type="string", example="Horror"),
 *                     @OA\Property(property="year", type="string", example="2023"),
 *                     @OA\Property(property="path", type="file", example="Jigokuraku.png"),
 *                 )
 *             }
 *         )
 *     ),
 * 
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *          @OA\JsonContent(
 *                     @OA\Property(property="id", type="integer", example="3"),
 *                     @OA\Property(property="title", type="string", example="Some Title"),
 *                     @OA\Property(property="episodes", type="string", example="0/100"),
 *                     @OA\Property(property="type", type="string", example="OVA"),
 *                     @OA\Property(property="genre", type="string", example="Horror"),
 *                     @OA\Property(property="year", type="string", example="2023"),
 *                     @OA\Property(property="path", type="file", example="Jigokuraku.png"),
 *                     )
 *     )
 * ),
 * 
 */

class swageranimecontroller extends Controller
{
    //
}
