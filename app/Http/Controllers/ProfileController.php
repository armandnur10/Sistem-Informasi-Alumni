<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

use Validator;

use Storage;


class ProfileController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $profile = Profile::all();
        return view ('data_siswa.index', compact('profile'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $profile = Profile::all();
        return view ('data_siswa.create', compact('profile'));
    }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $input = request()->all();

        // validasi data
        $validator = Validator::make($input, [
            'nama' => 'required|min:2|max:50',
            'nisn' => 'required|min:10|max:10',
            'angkatan' => 'required|min:4|max:4',
            'photo' => 'requred|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // if($validator->fails())
        // {
        //     return 'data tidak valid';
        // }
        if($request->hasFile('photo'))
        {
            $destination_path = 'public/images/profiles';
            $image = $request->file('photo');
            $image_name = time()."_".$image->getClientOriginalName();
            $path = $request->file('photo')->storeAs($destination_path, $image_name);
            $input['photo'] = $image_name;
        }

        Profile::create($input);

        return redirect('/list');
    }

    public function detail($id) {
        $profile = Profile::findOrFail($id);
        return view('data_siswa.detail', compact('profile'));
    }

    public function delete($id) {
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return redirect('/list');
    }
}
