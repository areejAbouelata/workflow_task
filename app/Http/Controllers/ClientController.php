<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequestValidate;
use App\Http\Requests\LoginClientValidation;
use App\Http\Requests\RegisterValidation;
use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Workflow;
class ClientController extends Controller
{
    public function getRegister()
    {
        return view('client.register');
    }
    public function register(RegisterValidation $request)
    {

        $request['password'] = bcrypt($request->password);
        Client::create($request->all());
//        return "done" ;
        return $request->user()->name;
        return redirect()->route('user-home') ;
    }
    public function getLogin()
    {
        return view('client.login');
    }

    public function login(LoginClientValidation $request )
    {

        $input = $request->except('_token');
        if (auth()->guard('clients')->attempt($input)){
            return redirect()->route('user-home');
        }
        return redirect()->back();
    }


    public function home()
    {
      $jobRequests = auth()->user('clients')->jobRequests()->get();

      return view('client.home' , compact('jobRequests'));
    }

    public function applicationRequest() 
    {
        return view('client.request');
    }

    public function applicationRequestSubmit(JobRequestValidate $request)
    {
        $request['status'] = 'to_hrAccept' ;
        $jobRequest = auth()->user('clients')->jobRequests()->create($request->all());
        $workflow =\Workflow::get($jobRequest);
        $workflow->apply($jobRequest , 'to_hrAccept');
//        return $jobRequest->workflow_transitions();
        $request->session()->put('PopSuccess', trans('Site.SavedSuccessfully'));
        return redirect()->route('user-home') ;
    }
    
}
