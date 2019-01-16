<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Category;

use Validator;
use Auth;


class TeamController extends Controller
{
    
    // fungsi untuk memunculkan halaman utama yang berisi semua forum yang ada
    public function showAllTeamList() {
        $forums = Team::paginate(5);

        return view('find_Team', compact('forums'));
    }

    // fungsi untuk memunculkan form untuk menambahkan forum
    public function showAddTeamPage() {
        $categories = Category::all();
        return view('add_team', compact('categories'));
    }

    public function validateTeamData($request) {
        $validator = Validator::make($request, [
            'teamName' => 'required',
            'category' => 'not_in:-1',
            'contactPerson' => 'required|numeric',
            'image' => 'required'
        ], [
            'category.not_in' => 'Category is required',
            "numeric" => ":must be numeric",
        ]);

        return $validator;
    }

    public function addTeam(Request $request) {
        $this->validateTeamData($request->all())->validate();

        $user = Auth::user();
        
        $filename = '';
        if($request->hasFile('image'))
        {
            $file = $request->image;
            $filename = $file->getClientOriginalName();
            $file->move('img/post/',$filename);
        }

        $team = new Team([
            'teamName' => $request->teamName,
            'category_id' => $request->category,
            'description' => $request->description,
            'image' => $request->image,
            'contactPerson' => $request->contactPerson,
            'status' => true
        ]);
        
        

        $team->user()->associate($user);
        $team->save();

        return redirect('/findTeam');
    }

}
