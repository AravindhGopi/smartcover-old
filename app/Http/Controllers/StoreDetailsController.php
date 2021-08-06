<?php

namespace App\Http\Controllers;

use App\storeDetails;
use Illuminate\Http\Request;

class StoreDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\storeDetails  $storeDetails
     * @return \Illuminate\Http\Response
     */
    public function show(Request $category)
    {
        $categoryID = $category->id;

        return storeDetails::where('category_id',$categoryID)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\storeDetails  $storeDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(storeDetails $storeDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\storeDetails  $storeDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, storeDetails $storeDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\storeDetails  $storeDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(storeDetails $storeDetails)
    {
        //
    }
}
