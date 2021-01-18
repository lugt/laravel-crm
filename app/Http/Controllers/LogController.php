<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Http\Requests\Logs\Index;
use App\Http\Requests\Logs\Show;
use App\Http\Requests\Logs\Create;
use App\Http\Requests\Logs\Store;
use App\Http\Requests\Logs\Edit;
use App\Http\Requests\Logs\Update;
use App\Http\Requests\Logs\Destroy;


/**
 * Description of LogController
 *
 * @author Tuhin Bepari <digitaldreams40@gmail.com>
 */

class LogController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @param  Index  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Index $request)
    {
        return view('pages.logs.index', ['records' => Log::paginate(10)]);
    }    /**
     * Display the specified resource.
     *
     * @param  Show  $request
     * @param  Log  $log
     * @return \Illuminate\Http\Response
     */
    public function show(Show $request, Log $log)
    {
        return view('pages.logs.show', [
                'record' =>$log,
        ]);

    }    /**
     * Show the form for creating a new resource.
     *
     * @param  Create  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Create $request)
    {

        return view('pages.logs.create', [
            'model' => new Log,

        ]);
    }    /**
     * Store a newly created resource in storage.
     *
     * @param  Store  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request)
    {
        $model=new Log;
        $model->fill($request->all());

        if ($model->save()) {
            
            session()->flash('app_message', 'Log saved successfully');
            return redirect()->route('logs.index');
            } else {
                session()->flash('app_message', 'Something is wrong while saving Log');
            }
        return redirect()->back();
    } /**
     * Show the form for editing the specified resource.
     *
     * @param  Edit  $request
     * @param  Log  $log
     * @return \Illuminate\Http\Response
     */
    public function edit(Edit $request, Log $log)
    {

        return view('pages.logs.edit', [
            'model' => $log,

            ]);
    }    /**
     * Update a existing resource in storage.
     *
     * @param  Update  $request
     * @param  Log  $log
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request,Log $log)
    {
        $log->fill($request->all());

        if ($log->save()) {
            
            session()->flash('app_message', 'Log successfully updated');
            return redirect()->route('logs.index');
            } else {
                session()->flash('app_error', 'Something is wrong while updating Log');
            }
        return redirect()->back();
    }    /**
     * Delete a  resource from  storage.
     *
     * @param  Destroy  $request
     * @param  Log  $log
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Destroy $request, Log $log)
    {
        if ($log->delete()) {
                session()->flash('app_message', 'Log successfully deleted');
            } else {
                session()->flash('app_error', 'Error occurred while deleting Log');
            }

        return redirect()->back();
    }
}
