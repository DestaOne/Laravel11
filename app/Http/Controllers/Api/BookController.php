<?php

namespace App\Http\Controllers\Api;

//import model Post
use App\Models\Book;

use App\Http\Controllers\Controller;

//import resource PostResource
use App\Http\Resources\BookResource;

//import Http request
use Illuminate\Http\Request;

//import facade Validator
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $books = Book::latest()->paginate(5);

        //return collection of posts as a resource
        return new BookResource(true, 'List Data Posts', $books);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'title'     => 'required',
            'description'     => 'required',
            'author'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }


        //create post
        $book = Book::create([
            'title'     => $request->title,
            'description'     => $request->description,
            'author'   => $request->author,
        ]);

        //return response
        return new BookResource(true, 'Data Post Berhasil Ditambahkan!', $book);
    }
     /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        //find post by ID
        $book = Book::find($id);

        //return single post as a resource
        return new BookResource(true, 'Detail Data Post!', $book);
    }
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'title'     => 'required',
            'author'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //find post by ID
        $book = Book::find($id);

        
        $book->update([
            'title'     => $request->title,
            'description'     => $request->description,
            'author'   => $request->author,
         ]);
        

        //return response
        return new BookResource(true, 'Data Post Berhasil Diubah!', $book);
    }
   /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {

        //find post by ID
        $book = Book::find($id);

        //delete post
        $book->delete();

        //return response
        return new BookResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}