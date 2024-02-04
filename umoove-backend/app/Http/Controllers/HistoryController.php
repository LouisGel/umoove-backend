<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function add(Request $request)
    {
        $infos = json_decode($request->getContent(), true);

        $history = History::create([
            'user_id' => $infos['user_id'],
            'activity_id' => $infos['activity_id'],
            'date_time' => now(),
            'nb_points' => $infos['nb_points'],
            ]);

        $user = User::find($infos['user_id']);

        $user->points += $infos['nb_points'];

        $user->save();

        return response()->json($history);
    }
}
