<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait ApiResponseTrait
{
    /**
     * استجابة النجاح
     */

    public function successResponse($data, $status = 200)
    {
        if ($data instanceof \Illuminate\Database\Eloquent\Collection && $data->isNotEmpty()) {
            $dataKey = Str::plural(strtolower(class_basename($data->first())));
        } elseif (is_object($data)) {
            $dataKey = strtolower(class_basename($data));
        } else {
            $dataKey = 'data';
        }
        return response()->json(
            [
                $dataKey => $data,
            ],
            $status,
        );
    }
    /**
     * استجابة الفشل
     */
    /**
     * استجابة الفشل
     */
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
