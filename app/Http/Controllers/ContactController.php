<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;
use Barryvdh\DomPDF\PDF;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact.index');
    }

    public function ajaxContactList(Contact $contact)
    {
        $contact = $contact->select(['id', 'first_name', 'birth_date', 'email', 'city', 'phone_number', 'company_name' ]);

        return Datatables::of($contact)
            ->addColumn('action', function ($contact) {
                return '<a href="'.url('/contacts/'.$contact->id.'/edit').'"><i class="fas fa-pencil-alt"></i></a>
                        <a href="'.url('/contacts/'.$contact->id.'/delete').'" ><i class="fas fa-trash-alt"></i></a>
                        <a href="'.url('/contacts/'.$contact->id).'"><i class="fas fa-eye"></i></a>
                        <a href="'.url('/contacts/'.$contact->id.'/export').'"><i class="fas fa-download"></i></a>';
            })//add action colum to the datatable
            ->make(true);
    }


    public function create()
    {
        return view('contact.detail')->with('add', true);
    }


    public function store(Request $request, Contact $contact)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'
        ]);
        $contact->create($request->all());
        return Redirect('/contacts')->with('success', 'The Contact is successfully created');
    }


    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contact.detail', compact('contact'))->with('show', true);

    }


    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact.detail', compact('contact'))->with('edit', true);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'
        ]);
        Contact::where('id', $id)->update($request->except(['_method', '_token']));
        return Redirect('/contacts')->with('success', 'The Contact is successfully updated');
    }


    public function destroy($id, Contact $contact)
    {
        $contact->find($id)->delete();
        return Redirect('/contacts')->with('success', 'The Contact is successfully deleted');
    }

    public function export_pdf($id, PDF $pdf, Contact $contact)
    {
        $contact = $contact->find($id);
        $pdf = $pdf->loadView('contact.export',compact('contact'));
        return $pdf->download('contacts.pdf');
    }
}
