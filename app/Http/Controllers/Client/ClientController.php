<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('id')->paginate(5);
        return view('clients.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'contact_name' => 'required|max:120',
            'contact_email' => 'required|email|max:255',
            'contact_phone_number' => 'required|numeric|min:10',
            'company_name' => 'required|max:255',
            'company_address' => 'required|max:255',
            'company_city' => 'required|max:100',
            'company_state' => 'required|max:100',
            'company_zip' => 'required|numeric|min:5',
            'company_vat' => 'required|min:5'
        ]);

        Client::create([
            'uuid' => Str::uuid(),
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contact_phone_number' => $request->contact_phone_number,
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'company_city' => $request->company_city,
            'company_state' => $request->company_state,
            'company_zip' => $request->company_zip,
            'company_vat' => $request->company_vat
        ]);

        return to_route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        // if(!$client->user->is(Auth::user())) {
        //     return Abort(403);
        // }
        // $note = Note::where('uuid', $id)->where('user_id',Auth::id())->firstOrFail();
        return view('clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        // if(!$client->user->is(Auth::user())) {
        //     return Abort(403);
        // }
        return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        // dd($client);
        // if(!$client->user->is(Auth::user())) {
        //     return Abort(403);
        // }

        $request->validate([
            'contact_name' => 'required|max:120',
            'contact_email' => 'required|email|max:255',
            'contact_phone_number' => 'required|numeric|min:10',
            'company_name' => 'required|max:255',
            'company_address' => 'required|max:255',
            'company_city' => 'required|max:100',
            'company_state' => 'required|max:100',
            'company_zip' => 'required|numeric|min:5',
            'company_vat' => 'required|min:5'
        ]);

        $client->update([
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contact_phone_number' => $request->contact_phone_number,
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'company_city' => $request->company_city,
            'company_state' => $request->company_state,
            'company_zip' => $request->company_zip,
            'company_vat' => $request->company_vat
        ]);

        return to_route('clients.show', $client)->with('success', 'Client Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        
        $client->delete();

        return to_route('clients.index')->with('success', 'Client Move to Trash success');
    }
}
