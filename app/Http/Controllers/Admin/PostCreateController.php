<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PostCreateController extends Controller
{
    public function __invocke()
    {
        $a = 'foo';

        return view('posts.create');
    }
}
