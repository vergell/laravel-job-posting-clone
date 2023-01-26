<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class ListingController extends Controller
{
    public function index(){
        return view('Listings.index',
        [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //Show Create Form
    public function create(){
        return view('listings.create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings','company')],
            'location' => 'required',
            'email' => ['required','email'] ,
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);



        return redirect ('/')->with('message', 'Listing created successfully!');
    }

    //Show Edit Form
    public function edit(Listing $listing){
         //Make sure logged in user is owner
         if($listing->user_id != auth()->id()){
            abort(403,'Unauthorized Action');
        }
        return view('listings.edit', ['listing'=> $listing]);
    }

    //Update Listing
    public function update(Request $request, Listing $listing){

        //Make sure logged in user is owner
        if($listing->user_id != auth()->id()){
            abort(403,'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', ],
            'location' => 'required',
            'email' => ['required','email'] ,
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

     
        
        $listing->update($formFields);

        return back()->with('message', 'Listing created successfully!');
    }

    //Delete Listing
    public function destroy(Listing $listing){

         //Make sure logged in user is owner
         if($listing->user_id != auth()->id()){
            abort(403,'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/')->with('message','Listing deleted succesfully');
    }

    public function manage(){
        return view('listings.manage',['listings' => auth()->user()->listings()->get()]);
    }

}
