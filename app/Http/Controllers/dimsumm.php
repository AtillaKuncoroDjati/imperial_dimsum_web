<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dimsum;
class dimsumm extends Controller
{
    //
    public function search(Request $request)
    {
        // dd($request);
        $searchTerm = $request->input('query');
        
        // Perform search on the `dim_sum` table
       
                        $results = dimsum::where(function ($query) use ($searchTerm) {
                            $query->where('name', 'like', '%' . $searchTerm . '%')
                                  ->orWhere('cooking_method', 'like', '%' . $searchTerm . '%')
                                  ->orWhere('wrapper', 'like', '%' . $searchTerm . '%');
                        })->get();
                    
        return view('result_cari',compact('results'));

        // Return the search results view with the results
        // return view('dim_sum.search_results', compact('results', 'query'));
    }
}
