<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Visiting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisitingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date=Carbon::parse($request->date)->format('Y-m-d');
        $visitings=Visiting::where('site_visit_date',$date)->get();
        if(request()->ajax())
                {
                        return datatables()->of(Visiting::all())
                                ->addColumn('visiting_date', function($data){
                                    return $data->site_visit_date == null ? '-' : $data->site_visit_date;
                                })
                                ->addColumn('name', function($data){
                                    return $data->first_name.' '. $data->last_name;
                                })
                                ->addColumn('user_address', function($data){
                                    return $data->user_address;
                                })
                                ->addColumn('contact_no', function($data){
                                    return $data->contact_no;
                                })
                                ->rawColumns(['visiting_date','name','user_address','contact_no'])
                                ->make(true);
                }
        return view('admin.visiting.index',['visitings'=>$visitings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.visiting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Visiting::create([
            'first_name'=>$request->first_name,
            'contact_no'=>$request->contact_no,
            'user_address'=>$request->user_address,
            'last_name'=>$request->last_name,
            'contact_home'=>$request->contact_home,
            'near_city'=>$request->near_city,
            'email'=>$request->email,
            'service_category'=>$request->service_category,
            'water_level'=>$request->water_level,
            'site_visit'=>$request->site_visit,
            'site_visit_date'=>$request->site_visit_date,
        ]);
        return redirect()->back()->with('success','Visiting Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visiting  $visiting
     * @return \Illuminate\Http\Response
     */
    public function show(Visiting $visiting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visiting  $visiting
     * @return \Illuminate\Http\Response
     */
    public function edit(Visiting $visiting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visiting  $visiting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visiting $visiting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visiting  $visiting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visiting $visiting)
    {
        //
    }
}
