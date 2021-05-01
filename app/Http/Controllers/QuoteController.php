<?php

namespace App\Http\Controllers;

use App\Mail\QuoteMail;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
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
        $phone_client = $request->input('phone_client');

        if (Quote::where('phone_client', $phone_client)->exists()) {

            $quote = Quote::where('phone_client', $phone_client)->first();
            $quoteDate = $quote->created_at->format('d M');
            $currentDate = Carbon::now()->format('d M');
            
            if ($quoteDate == $currentDate) {
                return response()->json('quote_same_day', 200);
            }

            $quote = Quote::create($request->all());
            return response()->json('quote_success_another_day', 200);
        }

        $quote = Quote::create($request->all());

        $emails = ['nleon@processoft.com.co', 'ocalero@processoft.com.co', 'jmartinez@processoft.com.co'];

        Mail::to($emails)->send(new QuoteMail($quote));
        return response()->json("quote_success_new", 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
