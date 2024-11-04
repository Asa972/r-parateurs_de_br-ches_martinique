<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
{
    $request->validate(['email' => 'required|email|unique:newsletter_subscribers,email']);

    NewsletterSubscriber::create(['email' => $request->email]);

    return redirect()->back()->with('success', 'Vous êtes inscrit à la newsletter avec succès !');
}//
}
