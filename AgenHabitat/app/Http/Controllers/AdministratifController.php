<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministratifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('administratif.index');
       /* if(Auth::check()){
            return redirect('administratif.index');
        }
        return redirect('administratif.login')->with('success','you are not allowed to access');*/

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('administratif.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // get the shark
        $shark = shark::find($id);

        // show the edit form and pass the shark
        return View::make('sharks.edit')
            ->with('shark', $shark);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'shark_level' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('sharks/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $shark = shark::find($id);
            $shark->name       = Input::get('name');
            $shark->email      = Input::get('email');
            $shark->shark_level = Input::get('shark_level');
            $shark->save();

            // redirect
            Session::flash('message', 'Successfully updated shark!');
            return Redirect::to('sharks');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete
        $shark = shark::find($id);
        $shark->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the shark!');
        return Redirect::to('sharks');
    }



}
