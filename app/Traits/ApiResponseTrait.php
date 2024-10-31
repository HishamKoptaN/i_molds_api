<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait ApiResponseTrait
{
    public function successResponse($data, $status = 200)
    {
        if ($data instanceof \Illuminate\Database\Eloquent\Collection && $data->isNotEmpty()) {
            $dataKey = Str::plural(strtolower(class_basename($data->first())));
        } elseif (is_object($data)) {
            $dataKey = strtolower(class_basename($data));
        } else {
            $dataKey = 'data';0
        }
        return response()->json(
            $data,
            $status,
        );
    }
    public function failureResponse($errors = null, $status = 500)
    {
        if (is_array($errors)) {
            $errors = implode(', ', $errors);
        }
        return response()->json([
            'error' => $errors,
        ], $status);
    }
}
