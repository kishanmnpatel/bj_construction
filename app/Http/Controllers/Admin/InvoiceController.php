<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\ToiletFulljobInvoice;
use App\Models\ToiletInvoice;
use App\Models\WasteWaterFulljobInvoice;
use App\Models\WasteWaterInvoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.invoice.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice=Invoice::create([
            'user_id'=>$request->user_id,
            'quotation_no'=>$request->quotation_no,
        ]);

        foreach ($request->toilet as $key => $value) {
            ToiletInvoice::create([
                'invoice_id'=>$invoice->id,
                'product_id'=>$key,
                'length'=>$value['length']==null ? 0 : $value['length'],
                'width'=>$value['width']==null ? 0 :$value['width'],
                'height'=>$value['height']==null ? 0 : $value['height'],
                'quantity'=>$value['quantity']==null ? 0 : $value['quantity'],
                'unit_price'=>$value['unit_price']==null ? 0 : $value['unit_price'],
                'total'=>$value['total']==null ? 0 : $value['total'],
            ]);
        }

        foreach ($request->toilet_fulljob as $key => $value) {
            ToiletFulljobInvoice::create([
                'invoice_id'=>$invoice->id,
                'product_id'=>$key,
                'length'=>$value['length']==null ? 0 : $value['length'],
                'width'=>$value['width']==null ? 0 :$value['width'],
                'height'=>$value['height']==null ? 0 : $value['height'],
                'quantity'=>$value['quantity']==null ? 0 : $value['quantity'],
                'unit_price'=>$value['unit_price']==null ? 0 : $value['unit_price'],
                'total'=>$value['total']==null ? 0 : $value['total'],
            ]);
        }

        foreach ($request->waste_water as $key => $value) {
            WasteWaterInvoice::create([
                'invoice_id'=>$invoice->id,
                'product_id'=>$key,
                'length'=>$value['length']==null ? 0 : $value['length'],
                'width'=>$value['width']==null ? 0 :$value['width'],
                'height'=>$value['height']==null ? 0 : $value['height'],
                'quantity'=>$value['quantity']==null ? 0 : $value['quantity'],
                'unit_price'=>$value['unit_price']==null ? 0 : $value['unit_price'],
                'total'=>$value['total']==null ? 0 : $value['total'],
            ]);
        }

        foreach ($request->waste_water_fulljob as $key => $value) {
            WasteWaterFulljobInvoice::create([
                'invoice_id'=>$invoice->id,
                'product_id'=>$key,
                'length'=>$value['length']==null ? 0 : $value['length'],
                'width'=>$value['width']==null ? 0 :$value['width'],
                'height'=>$value['height']==null ? 0 : $value['height'],
                'quantity'=>$value['quantity']==null ? 0 : $value['quantity'],
                'unit_price'=>$value['unit_price']==null ? 0 : $value['unit_price'],
                'total'=>$value['total']==null ? 0 : $value['total'],
            ]);
        }
        
        return redirect()->back()->with('success','Profile Updated.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
