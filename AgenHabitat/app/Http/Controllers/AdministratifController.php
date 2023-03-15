<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use App\Models\Rapport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AdministratifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $inspection= Inspection::with('rapport','utilisateur','tournee')->get();
        $rapport= Rapport::with('inspection')->get();
        $utilisateur= Rapport::with('inspection')->get();
        $tournee= Rapport::with('inspection')->get();

        return view('administratif.index',compact('inspection','rapport','utilisateur','tournee'));


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
        return view('administratif.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $report = new Inspection;
        $report->title = $request->input('title');
        $report->description = $request->input('description');
        $report->save();
        return redirect()->route('reports.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($NumInspection)
    {
        $inspection= Inspection::with('rapport','utilisateur','tournee')->get();
        $rapport= Rapport::with('inspection')->get();
        $utilisateur= Rapport::with('inspection')->get();
        $tournee= Rapport::with('inspection')->get();
        $inspections = Inspection::find($NumInspection);
        return view('administratif.show', ['inspections' => $inspections],compact('inspection','rapport','utilisateur','tournee'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $report = Inspection::find($id);
        return view('reports.edit', ['report' => $report]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $report = Inspection::find($id);
        $report->title = $request->input('title');
        $report->description = $request->input('description');
        $report->save();
        return redirect()->route('reports.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = Report::find($id);
        $report->delete();
        return redirect()->route('reports.index');

    }



}
