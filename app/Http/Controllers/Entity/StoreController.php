<?php

namespace App\Http\Controllers\Entity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entity;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = request()->validate([
            'name' => 'string',
            'time' => 'integer',
            'description' => 'required|string|max:255',
            'start_date' => 'date',
            'finish_date' => 'date',
            'score' => 'integer'
        ]);

        Entity::create($data);

        return redirect()->route('entity.index');
    }
}
