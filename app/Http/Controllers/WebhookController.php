<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        $data = json_encode($request->all());

        file_put_contents(storage_path('logs/webhook.txt'), $data . PHP_EOL, FILE_APPEND);

        return response()->json(['message' => 'Success']);
    }
}