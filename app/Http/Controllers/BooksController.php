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
}
