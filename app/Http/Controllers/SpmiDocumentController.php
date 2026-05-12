<?php

namespace App\Http\Controllers;

use App\Models\SpmiDocument;
use Illuminate\Http\Request;

class SpmiDocumentController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return response()->json([
      'success' => true,
      'data' => \App\Models\SpmiDocument::all()
    ]);
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
  public function show(SpmiDocument $spmiDocument)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, SpmiDocument $spmiDocument)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(SpmiDocument $spmiDocument)
  {
    //
  }
}
