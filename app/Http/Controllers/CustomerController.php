<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;


/**
 * Description of CustomerController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class CustomerController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('pages.customers.index', ['records' => Customer::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Customer $customer)
    {
        return view('pages.customers.show', [
                'record' =>$customer,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('pages.customers.create', [
            'model' => new Customer,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model=new Customer;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Customer saved successfully');
            return redirect()->route('customers.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Customer');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Request  $request
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Customer $customer)
    {

        return view('pages.customers.edit', [
            'model' => $customer,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Request  $request
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Customer $customer)
    {
        $customer->fill($request->all());

        if ($customer->save()) {
            
            session()->flash('app_message', 'Customer successfully updated');
            return redirect()->route('customers.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Customer');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Request  $request
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Request $request, Customer $customer)
    {
        if ($customer->delete()) {
                session()->flash('app_message', 'Customer successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Customer');
            }

        return redirect()->back();
    }
}
