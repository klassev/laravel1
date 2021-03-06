<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //return response('A listing of rooms', 200);
        $rooms = DB::table('rooms')->get();
        //dd($rooms);
        if($request->query('id') !== null){
            $rooms = $rooms->where('room_type_id', $request->query('id'));
        }
        //return response()->json($rooms);
        return  view('rooms.index', ['rooms' => $rooms]);
    }
}
