<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function createClient(Request $request){
        $formValues = $request->validate([
            'first_name'=>['required', 'min:1', 'max:255'],
            'last_name'=>['required', 'min:1', 'max:255'],
            'phone_number'=>['required', 'min:3', 'max:15'], // A typical phone number is 10 digits but this accounts for exceptions
            'date_of_contact'=>'required'
        ]);
        $formValues['first_name'] = strip_tags($formValues['first_name']);
        $formValues['last_name'] = strip_tags($formValues['last_name']);
        $formValues['phone_number'] = strip_tags($formValues['phone_number']);
        $formValues['date_of_contact'] = strip_tags($formValues['date_of_contact']);

        Client::create($formValues);
        return redirect('/');
    }

    public function editClientScreen(Client $client){
        return view('edit-client', ['client' => $client]);
    }

    public function updateClient(Client $client, Request $request){
        $updatedValues = $request->validate([
            'first_name' => ['required', 'min:1', 'max:255'],
            'last_name' => ['required', 'min:1', 'max:255'],
            'phone_number' => ['required', 'min:3', 'max:15'], // A typical phone number is 10 digits but this accounts for exceptions
            'date_of_contact' => 'required'
        ]);
        $updatedValues['first_name'] = strip_tags($updatedValues['first_name']);
        $updatedValues['last_name'] = strip_tags($updatedValues['last_name']);
        $updatedValues['phone_number'] = strip_tags($updatedValues['phone_number']);
        $updatedValues['date_of_contact'] = strip_tags($updatedValues['date_of_contact']);
        $client->update($updatedValues);
        return redirect('/');
    }

    public function deleteClient(Client $client){
        $client->delete();
        return redirect('/');
    }

}
