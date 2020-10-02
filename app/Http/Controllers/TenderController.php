<?php

namespace App\Http\Controllers;

use App\Models\Tender;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TenderController extends Controller
{
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
        $tenders = Tender::get();

        return view('pages.tenderspage', compact('tenders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addtender');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document = $request->file('document') ?? [];

        $tender = Tender::create([
            'created_by_id' => auth()->user(),
            'title' => $request->title,
            'company_name' => $request->company_name,
            'announced_on' => $request->announced_on,
            'deadline_on' => $request->deadline_on,
            'submitted_on' => Carbon::now(),
            'isApproved' => $request->isApproved,
        ]);

        $tender->document()->create([
            'created_by_id' => auth()->user(),
            'url' => $document->store('public/documents'),
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function show(Tender $tender)
    {
        return view('pages.showtenders', compact('tender'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit(Tender $tender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tender $tender)
    {
        $tender->update([$request]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tender $tender)
    {
        $tender->delete();
    }
}
