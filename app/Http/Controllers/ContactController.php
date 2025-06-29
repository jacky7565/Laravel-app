<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Mail;
use App\Helpers\TextHelper;
use App\Mail\WelcomeEmail;
use App\Events\UserRegistationEvent;

class ContactController extends Controller
{


    function index(Request $request)
    {

        $myText="JACKY YADAV";
        $helper=new TextHelper();

        // return $helper->lowerCase($myText);


        $search = $request->input('search');
        $query = Contact::query();
        if (!empty($search)) {
            $query->where('name', 'like', "%{$search}%");
            $query->orWhere('email', 'like', "%{$search}%");
        }
        $query->orderBy('id', 'desc');


        $fetch = $query->paginate(5)->appends(['search', $search]);
        $data['result'] = $fetch;
        return view('listing', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function add(Request $request)
    {

        // return $request->all();
        $vali = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => ['required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()],
            'image' => 'required|mimes:jpeg,png,jpg|max:2048'
        ], [
            'name.required' => 'This name field is required',
            'email.required' => 'Please Enter Valid Email',
            'number.required' => 'Please enter valid number'

        ]);

        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = $request->file('image')->store('contact', 'public');
        }
        $result=Contact::create([
            'name' => $vali['name'],
            'email' => $vali['email'],
            'password' => bcrypt($vali['password']),
            'image' => $fileName
        ]);
        event(new UserRegistationEvent($result));
        //   Mail::to($vali['email'])->send(new WelcomeEmail($vali['name']));
        // Contact::create($request->all());
        return redirect('/')->with('success', 'Form submitted successfully');
    }

    public function fetch($id)
    {


        $fetch = Contact::findorFail($id);
        $data['result'] = $fetch;
        return view('/edit', $data);
    }

    public function edit(Request $request, $id)
    {
        $rule = [
            'name' => 'required',
            'email' => 'required',

        ];

        $fetch = Contact::findorFail($id);
        // return $request;
        if ($request->hasFile('image')) {
            $rule = ['image' => 'mimes:jpeg,png.jpg|max:2048'];
            $update['image'] = $request->file('image')->store('contact', 'public');
        }
        $request->validate($rule);
        //    return $fetch;
        $update['name'] = $request->name;
        $update['email'] = $request->email;
        $fetch->update($update);
        return redirect('/')->with('success', 'Your field is update');
    }

    public function destroy($id)
    {
        $contact = Contact::findorFail($id);
        $contact->delete();

        return redirect('/')->with('success', "contact delete successfully");
    }


    //
}
