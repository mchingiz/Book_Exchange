<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Offer;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class OfferController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $offers = Offer::all();

        return view('backEnd.offer.offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.offer.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
       

        $offer = new Offer;

        $offer->offered_book_id = $request->offered_book;
        $offer->offered_to_book_id = $request->offered_to_book;
        $offer->status = 0;

        $offer->save();

        Session::flash('message', 'Offer added!');
        Session::flash('status', 'success');

        return redirect('book/'.$request->offered_to_book);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $offer = Offer::findOrFail($id);

        return view('backEnd.offer.offers.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $offer = Offer::findOrFail($id);

        return view('backEnd.offer.offers.edit', compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $offer = Offer::findOrFail($id);
        $offer->update($request->all());

        Session::flash('message', 'Offer updated!');
        Session::flash('status', 'success');

        return redirect('offers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $offer = Offer::findOrFail($id);

        $offer->delete();

        Session::flash('message', 'Offer deleted!');
        Session::flash('status', 'success');

        return redirect('offers');
    }

}
