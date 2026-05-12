<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return response()->json([
      'success' => true,
      'data' => \App\Models\Page::all()
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
  public function show(Page $page)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Page $page)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Page $page)
  {
    //
  }
}
