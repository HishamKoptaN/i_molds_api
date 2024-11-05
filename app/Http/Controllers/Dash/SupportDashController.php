<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chat;

class SupportDashController extends Controller
{
    public function handleSupport(Request $request)
    {
        switch ($request->method()) {
            case 'GET':
                return $this->getChats($request);
            case 'POST':
                return $this->uploadFile($request);
            case 'PUT':
                return $this->updateFile($request);
            case 'DELETE':
                return $this->deleteFile($request);
            default:
                return response()->json(['status' => false, 'message' => 'Invalid request method']);
        }
    }
    protected function getChats(Request $request)
    {
        $chats = Chat::with(['user:id,name,image'])
            ->withCount(['messages as unread_messages_count' => function ($query) {
                $query->whereNull('readed_at')
                    ->whereColumn('messages.user_id', '=', 'chats.user_id');
            }])
            ->orderBy('updated_at', 'desc')
            ->get();

        $chats->each(function ($chat) {
            $chat->user->makeHidden(['id']);
        });
        if ($chats->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'No chats found',
            ], 404);
        }
        return response()->json(
            [
                'status' => true,
                'chats' => $chats
            ],
        );
    }
}

