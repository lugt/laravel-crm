<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Http\Requests\Purchases\Index;
use App\Http\Requests\Purchases\Show;
use App\Http\Requests\Purchases\Create;
use App\Http\Requests\Purchases\Store;
use App\Http\Requests\Purchases\Edit;
use App\Http\Requests\Purchases\Update;
use App\Http\Requests\Purchases\Destroy;


/**
 * Description of PurchaseController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class PurchaseController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.purchases.index', ['records' => Purchase::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Purchase $purchase)
    {
        return view('pages.purchases.show', [
                'record' =>$purchase,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.purchases.create', [
            'model' => new Purchase,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Purchase;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Purchase saved successfully');
            return redirect()->route('purchases.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Purchase');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Purchase $purchase)
    {

        return view('pages.purchases.edit', [
            'model' => $purchase,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Purchase $purchase)
    {
        $purchase->fill($request->all());

        if ($purchase->save()) {
            
            session()->flash('app_message', 'Purchase successfully updated');
            return redirect()->route('purchases.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Purchase');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Purchase  $purchase
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Purchase $purchase)
    {
        if ($purchase->delete()) {
                session()->flash('app_message', 'Purchase successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Purchase');
            }

        return redirect()->back();
    }
}
