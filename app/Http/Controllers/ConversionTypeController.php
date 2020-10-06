<?php

namespace App\Http\Controllers;

use App\ConversionType;
use App\Data;
use Illuminate\Http\Request;

class ConversionTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dates = Data::where('from_currency',1)->where('to_currency',25)->orderBy('date')->pluck('date')->unique();
        // dd($dates);
        $conType = ConversionType::with(["data"=>function($query){
            $query->where('from_currency',1)->where('to_currency',25)->orderBy('date');
        }])->get();
        return view("data",compact("conType","dates"));
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
     * @param  \App\ConversionType  $conversionType
     * @return \Illuminate\Http\Response
     */
    public function show(ConversionType $conversionType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ConversionType  $conversionType
     * @return \Illuminate\Http\Response
     */
    public function edit(ConversionType $conversionType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ConversionType  $conversionType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConversionType $conversionType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ConversionType  $conversionType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConversionType $conversionType)
    {
        //
    }
}
