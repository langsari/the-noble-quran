<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\User;

class TypeaheadAutocompleteController extends Controller
{
    function index()
    {
        return view('user.typeahead_autocomplete');
    }

    function action(Request $request)
    {
        $data = $request->all();

        $query = $data['query'];

        $filter_data = Post::select('title')
                        ->where('title', 'LIKE', '%'.$query.'%')
                        ->get();

        return response()->json($filter_data);
    }
}
