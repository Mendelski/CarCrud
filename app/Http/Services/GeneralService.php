<?php

namespace App\Http\Services;

use Illuminate\Http\JsonResponse;

class GeneralService
{

    public const OK = 'Ok';

    public static function returnOkJson(): JsonResponse
    {
        return response()->json(['status' => self::OK]);
    }
}
