<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
{
  return Book::all();
}
public function show($id)
{
    $Books = Book::find($id);
    if ($Books){
    return $Books;
 }  else {
 return response()->json([
     'message' => 'Book Not Found'
 ],404);
     
 }
}
public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required',
      'description' => 'required',
      'author' => 'required'
    ]);

    $book = Book::create(
      $request->only(['title', 'description', 'author'])
    );

    return response()->json([
      'created' => true,
      'data' => $book
    ], 201);
  }

}
