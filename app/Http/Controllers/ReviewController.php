<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Favorite;

class ReviewController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
}
