<?php

namespace App\Http\Controllers\User;

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
                                ->addColumn('select', function($data){
                                    return '<input type="checkbox" name="selectedData['.$data->id.']" value="true">';
                                })
                                ->addColumn('visiting_date', function($data){
                                    if ($data->site_visit_date == null) {
                                        return '-<input style="display:none" type"text" name="site_visit_date['.$data->id.']" value="-">';
                                    }else{
                                        return $data->site_visit_date.'<input style="display:none" type"text" name="site_visit_date['.$data->id.']" value="'.$data->site_visit_date.'">';
                                    }
                                })
                                ->addColumn('name', function($data){
                                    return $data->first_name.' '. $data->last_name.'<input style="display:none" type"text" name="name['.$data->id.']" value="'.$data->first_name.' '. $data->last_name.'">';
                                })
                                ->addColumn('user_address', function($data){
                                    return $data->user_address.'<input style="display:none" type"text" name="user_address['.$data->id.']" value="'.$data->user_address.'">';
                                })
                                ->addColumn('contact_no', function($data){
                                    return $data->contact_no.'<input style="display:none" type"text" name="contact_no['.$data->id.']" value="'.$data->contact_no.'">';
                                })
                                ->addColumn('addtional_info', function($data){
                                    return '<input type="text" name="addtional_info['.$data->id.']">';
                                })
                                ->addColumn('actions', function($data){
                                    // return '<a href="'.route('admin.invoice.show',$data->id).'" class="btn btn-primary btn-sm">View Invoice</a> &nbsp;&nbsp;<a href="'.asset($data->pdf_path).'" class="btn btn-info btn-sm">View PDF</a>';
                                    return '<a href="'.route('user.visiting.show',$data->id).'" class="btn btn-danger btn-sm">Delete</a>';
                                })
                                ->rawColumns(['select','visiting_date','name','user_address','contact_no','addtional_info','actions'])
                                ->make(true);
                }
        return view('user.visiting.index',['visitings'=>$visitings]);
    }

    public function visitPrint(Request $request)
    {
        $data='<table id="invoiceTablePrint" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>Visiting Date</th>
                        <th>Customer Name</th>
                        <th>Contact No</th>
                        <th>Address</th>
                        <th>Additional Info</th>
                    </thead>
                    <tbody>
            ';
            if (isset($request->selectedData)) {
                foreach ($request->selectedData as $key => $value) {
                    $data.='
                            <tr>
                                <td>'.$request->site_visit_date[$key].'</td>
                                <td>'.$request->name[$key].'</td>
                                <td>'.$request->contact_no[$key].'</td>
                                <td>'.$request->user_address[$key].'</td>
                                <td><input type"text" value="'.$request->addtional_info[$key].'"></td>
                            </tr>
                    ';
                }
            }else{
                $data.='
                            <tr>
                                <td colspan="5" align="center">No data selected</td>
                            </tr>
                    ';
            }
        
        $data.='</tbody></table>';
        // foreach ($request->selectedData as $key => $value) {
        //    $data[]=$key;
        // }
        return response()->json(['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.visiting.create');
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
        $visiting->delete();
        return redirect()->back()->with('success','Visiting Deleted.');
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