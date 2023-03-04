<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::latest()->get();
        return view('admins.feedbacks.index',compact('feedbacks'));
    }


    public function create()
    {
        //
    }


    public function store(StoreFeedbackRequest $request)
    {

        $data = $request->validate([
            'name'          => 'required',
            'email'         => 'required',
            'ph_no'         => 'required',
            'subject'       => 'required',
            'description'   => 'required'

        ]);
        Feedback::create($data);
        return redirect('/home#contactus')->with('success','You have successfully sent your feedback!!');
    }


    public function show(Feedback $feedback)
    {
        //
    }


    public function edit(Feedback $feedback)
    {
        //
    }

    public function update(UpdateFeedbackRequest $request, Feedback $feedback)
    {
        //
    }


    public function destroy(Feedback $feedback)
    {
        //
    }
}
