<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Faker\Generator;
use App\Schedule;
use Carbon\Carbon;

class AcController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function __construct()
   {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return response(Schedule::all()->jsonSerialize(), Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Generator $faker)
    {
      $ac = new Schedule();
      $ac->name = $faker->lexify('????????');
      $ac->description = $faker->boolean ? 'red' : 'green';
      $ac->type = $faker->boolean ? 'sports' : 'academic';
      $ac->task_date = Carbon\Carbon::now();
      $crud->save();

      return response($crud->jsonSerialize(), Response::HTTP_CREATED);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Schedule::create($request->all());
        return redirect()->route('schedule.index');
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
      $ac = Schedule::findOrFail($id);
      $ac->name = $request->name;
      $ac->description = $request->description;
      $ac->type = $request->type;
      $ac->task_date = $request->task_date;
      $ac->save();

      return response(null, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Schedule::destroy($id);
      return response(null, Response::HTTP_OK);
    }
}
