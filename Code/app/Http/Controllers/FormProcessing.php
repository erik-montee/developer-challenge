<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessing extends Controller
{
    /**
     *Find the specific Ajax call
     *
     *@param Request $request
     *@return Response
     */
    public function process(Request $request) 
    {
       $task = $request->task;
        if ("subscribe" === $task ) {
            $response = $this->subscribe($request);
        }
       if ( "leadform" === $task) {
            $response = $this->submitLeadForm($request);
        }
       return $response;

    }

    /**
     *Check if user is subscribed and subscribes to mailing
     *
     *@param Request $request
     *@return Response
     */
    public function subscribe($request) 
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);
    return ['test' => $request->input('email')];

    }

    /**
     *Submits lead form, and validates it
     *
     *@param Request $request
     *@return Response
     */
    public function submitLeadForm($request) 
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required|numeric|recurring|digits_between:10,15|contains:1234567890,0987654321,9876543210,0123456789,0101010101,1010101010'
        ]);
    return ['test' => $request->input('phoneNumber')];

    }
           
}
