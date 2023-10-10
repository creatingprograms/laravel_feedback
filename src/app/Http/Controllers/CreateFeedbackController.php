<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\StoreFeedbackRequest;

class CreateFeedbackController extends Controller
{
    public function store(StoreFeedbackRequest $request): RedirectResponse   
{
    // The incoming request is valid...
 
    // Retrieve the validated input data...
    //$validated = $request->validated();
 
    // Retrieve a portion of the validated input data...
    $validated = $request->safe()->only(['email']);
    //$validated = $request->safe()->except(['name', 'email']);
 
    // Store the feedback...
	$feedback = new Feedback;
         $feedback->email = $request->email;
         $feedback->save();
 
    return redirect('/success');

}
}


