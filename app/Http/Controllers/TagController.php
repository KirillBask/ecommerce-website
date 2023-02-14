<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tags\UpdateRequest;
use App\Models\Tag;
use Illuminate\View\View;

class TagController extends Controller
{
    public function create(Request $request):View
    {
        $tag = new Tag(); // Replace ModelName with the actual name of your model
        // Handle form submission for creating a new record
        $tag->field1 = $request->input('field1');
        $tag->field2 = $request->input('field2');
        $tag->save();

        // Redirect to the view showing the list of records
        return view('tag.create');
    }

    public function edit(Request $request, $id)
    {
        // Handle form submission for updating an existing record
        $model = ModelName::findOrFail($id); // Replace ModelName with the actual name of your model
        $model->field1 = $request->input('field1');
        $model->field2 = $request->input('field2');
        $model->save();

        // Redirect to the view showing the list of records
        return redirect('/example');
    }

    public function delete($id)
    {
        // Delete the record with the specified ID
        $model = ModelName::findOrFail($id); // Replace ModelName with the actual name of your model
        $model->delete();

        // Redirect to the view showing the list of records
        return redirect('/example');
    }
}



