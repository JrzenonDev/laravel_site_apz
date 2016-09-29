<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AuthorsRequest;
use App\Author;

class AuthorsController extends Controller
{
    // Lista todos Authors
    public function index()
    {
        return Author::all();
    }

    // Novo registro
    public function store(AuthorRequest $request)
    {
        return Author::create($request->all());
    }

    // Retorna um author de acordo com o seu ID
    public function show(Author $author)
    {
        return $author;
    }

    public function update(AuthorRequest $request, Author $author)
    {
        return $author;
    }

    public function destroy(Author $author)
    {
        return (string) $author->delete();
    }
}
