<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show($username)
    {
        // Assuming there's a User model with a 'username' field
        $author = Author::where('username', $username)->first();

        return view('pages.author.show', compact('author'));
    }
}
