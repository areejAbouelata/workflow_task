<?php

namespace App\Http\Controllers\Admin;

use App\JobRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class JobRequestManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pendingRequests()
    {
        $requests = JobRequest::where('status' , 'to_hrAccept')->get() ;
        return view('AdminPanel.hr.requestIndex', compact('requests'));
    }

    public function hrRejectRequest(Request $request, $request_id)
    {
        $jobRequest = JobRequest::findOrFail($request_id);
        $workflow =\Workflow::get($jobRequest) ;
        $jobRequest->update(['status' => 'reject']);
        $workflow->apply($jobRequest , 'reject');
//        return $jobRequest->workflow_transitions();
        $client =$jobRequest->client ;
        Mail::send('email.reject', ['data' => $jobRequest->client->name , 'email' => $jobRequest->client->email], function ($message) use ( $client ) {
            $message->from('mobile@gmail.com');
            $message->to($client->email, 'workflow')->subject('good lock');
        });

        $request->session()->put('PopSuccess', trans('Site.SavedSuccessfully'));
        return redirect()->route('pending-requests') ;
    }


    public function hrAcceptRequest(Request $request, $request_id)
    {
        $jobRequest = JobRequest::findOrFail($request_id);
        $workflow =\Workflow::get($jobRequest) ;
        $jobRequest->update(['status' => 'to_adminAccept']);
//        $workflow->apply($jobRequest , 'to_adminAccept');
//        return $jobRequest->workflow_transitions();
        $client =$jobRequest->client ;
        Mail::send('email.accept', ['data' => $jobRequest->client->name , 'email' => $jobRequest->client->email], function ($message) use ( $client ) {
            $message->from('mobile@gmail.com');
            $message->to($client->email, 'workflow')->subject('welcome to our team');
        });

        $request->session()->put('PopSuccess', trans('Site.SavedSuccessfully'));
        return redirect()->route('pending-requests') ;
    }

}
