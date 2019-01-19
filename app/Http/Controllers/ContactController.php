<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.index');
    }

    public function ajaxContactList(Contact $contact)
    {
        $contact = $contact->select(['id', 'first_name', 'birth_date', 'email', 'city', 'phone_number', 'company_name' ]);

        return Datatables::of($contact)
            ->addColumn('action', function ($contact) {
                return '<a href="'.url('/contact'.$contact->id.'/edit').'"><i class="fas fa-pencil-alt"></i></a>
                        <a href="'.url('/contact/'.$contact->id).'" ><i class="fas fa-trash-alt"></i></a>
                        <a href="'.url('/contact/'.$contact->id).'"><i class="fas fa-eye"></i></a>
                        <a href="'.url('/contact/'.$contact->id.'/edit').'"><i class="fas fa-download"></i></a>';
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        dd('loool');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('hello');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        return Redirect::back();
    }
}
