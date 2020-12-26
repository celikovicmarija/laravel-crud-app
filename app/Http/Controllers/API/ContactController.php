<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Resources\Contact as ContactResource;
use App\Models\Contact as ContactModel;
use Illuminate\Support\Facades\Validator;

class ContactController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts =ContactModel::all();

        return $this->sendResponse(ContactResource::collection($contacts), 'Contacts retrieved successfully');
      
       // $contacts = Contact::all();
       // return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input,[
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'country'=>'required',
            'city'=>'required',
            'birthDate'=>'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation error.', $validator->errors());
        
            $contact = ContactModel::create($input);
            return $this->sendResponse(new ContactResource($contact), 'Contact created successfully!');
    
        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = ContactModel::find($id);
        if(is_null($contact)){
            return $this->sendError('Contact not found.');
        }
        return $this->sendResponse(new ContactResource($contact), ' Contact retrieved successfully');
        ///return view('contacts.show',compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = ContactModel::find($id);
        return view('contacts.edit', compact('contact'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactModel $contact)
    { 
        $input = $request->all();
        $validator = Validator::make($input,[
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'country'=>'required',
            'city'=>'required',
            'birthDate'=>'required',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation error.', $validator->errors());
        }
        $contact->firstName =  $request->get('firstName');
        $contact->lastName = $request->get('lastName');
        $contact->email = $request->get('email');
        $contact->birthDate = $request->get('birthDate');
        $contact->city = $request->get('city');
        $contact->country = $request->get('country');
        $contact->save();
     
        return $this->sendResponse(new ContactResource($contact), ' Contact updated successfully!');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = ContactModel::find($id);
        $contact->delete();
        return $this->sendResponse([], ' Contact deleted successfully!');
  }
}
