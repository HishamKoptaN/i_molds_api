<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class CategoriesDashController extends Controller
{
    public function handleCategories(Request $request)
    {
        switch ($request->method()) {
            case 'GET':
                return $this->getCategories($request);
            case 'POST':
                return $this->addCategory($request);
            case 'PUT':
                return $this->updateCategory($request);
            case 'DELETE':
                return $this->deleteCategory($request);
            default:
                return response()->json(
                    [
                        'status' => false,
                        'message' => 'Invalid request method',
                    ],
                );
        }
    }
    public function getCategories(Request $request)
    {
        $categories = Category::all();
        return response()->json(
            $categories,
        );
    }
    public function addCategory(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|string|max:255',
            ],
        );

        if ($request->hasFile('flag')) {
            $flag = $request->file('flag');
            $flagName = strtolower(Str::random(10)) . '-' . str_replace(
                [' ', '_'],
                '-',
                $flag->getClientOriginalName(),
            );
            $flagPath = $flag->storeAs('public/flags', $flagName);
        }

        $categories = Category::create(
            [
                'name' => $validatedData['name'],
            ],
        );
        return response()->json(
            [
                'message' => 'Category added successfully',
                'categories' => $categories,
            ],
        );
    }
    public function updateCategory(Request $request) {}
    public function deleteCategory(Request $request) {}
}
