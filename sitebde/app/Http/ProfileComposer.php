<?php

namespace App\Http;

use Illuminate\Contracts\View\View;
use Illuminate\Users\Repository as UserRepository;

use Illuminate\Support\Facades\Auth;

class ProfileComposer
{
    /**
     * Create a new profile composer.
     *
     * @return void
     */
    public function __construct()
    {
        // Dependencies automatically resolved by service container...
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $id = "";
        if (Auth::check()) {
            $id = Auth::user();
        } 
        $view->with('id', $id);
    }
}