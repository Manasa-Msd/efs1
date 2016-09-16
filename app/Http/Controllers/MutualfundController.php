<?php

namespace App\Http\Controllers;

use App\Mutualfunds;
use App\Customer;
use Illuminate\Http\Request;

use App\Http\Requests;

class MutualfundsController extends Controller
{
    public function index()
    {
        //
        $mutualfunds=Mutualfunds::all();
        return view('mutualfunds.index',compact('mutualfunds'));
    }

    public function show($id)
    {

        $mutualfunds = Mutualfunds::findOrFail($id);

        return view('mutualfunds.show',compact('mutualfunds'));
    }


    public function create()
    {

        $customers = Customer::lists('name','id');
        return view('mutualfunds.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $mutualfunds= new Mutualfunds($request->all());
        $mutualfunds->save();

        return redirect('mutualfunds');
    }

    public function edit($id)
    {
        $mutualfunds=Mutualfunds::find($id);
        return view('mutualfunds.edit',compact('mutualfunds'));
    }
	
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $mutualfunds= new Mutualfunds($request->all());
        $mutualfunds=Mutualfunds::find($id);
        $mutualfunds->update($request->all());
        return redirect('mutualfunds');
    }

    public function destroy($id)
    {
        Mutualfunds::find($id)->delete();
        return redirect('mutualfunds');
    }
}
