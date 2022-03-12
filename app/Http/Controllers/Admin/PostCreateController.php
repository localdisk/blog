<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PostCreateController extends Controller
{
    public function __invoke()
    {
        return view('posts.create');
    }
}
