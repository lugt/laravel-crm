<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Http\Requests\Customers\Index;
use App\Http\Requests\Customers\Show;
use App\Http\Requests\Customers\Create;
use App\Http\Requests\Customers\Store;
use App\Http\Requests\Customers\Edit;
use App\Http\Requests\Customers\Update;
use App\Http\Requests\Customers\Destroy;


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
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.customers.index', ['records' => Customer::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Customer $customer)
    {
        return view('pages.customers.show', [
                'record' =>$customer,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.customers.create', [
            'model' => new Customer,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
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
     * @param  Edit  $request
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Customer $customer)
    {

        return view('pages.customers.edit', [
            'model' => $customer,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Customer $customer)
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
     * @param  Destroy  $request
     * @param  Customer  $customer
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Customer $customer)
    {
        if ($customer->delete()) {
                session()->flash('app_message', 'Customer successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Customer');
            }

        return redirect()->back();
    }
}
