<?php namespace App\Http\Controllers;

use App\Provider;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Input;
use Redirect;

class ProviderController extends Controller {
   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
      $providers=Provider::all();
        return view('providers.index',compact('providers'));
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
       return view('providers.create');
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store()
   {
      $providers=Request::all();
   Provider::create($providers);
   return redirect('providers');
   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id_provider
    * @return Response
    */
   public function show($id_provider)
   {
         $providers=Provider::find($id_provider);
		return view('providers.show',compact('provider'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id_provider
    * @return Response
    */
   public function edit($id_provider)
   {
       $providers=Provider::find($id_provider);
		return view('providers.edit',compact('provider'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id_provider
    * @return Response
    */
   public function update($id_provider)
   {
         $providerUpdate=Request::all();
		$provider=Provider::find($id_provider);
		$provider->update($providerUpdate);
		return redirect('providers');
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id_provider
    * @return Response
    */
   public function destroy($id_provider)
   {
         Provider::find($id_provider)->delete();
		return redirect('providers');
   }
}