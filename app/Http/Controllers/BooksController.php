<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $items = book::all();
        return view('bookapp.index',['items'=>$items]);
    }

    public function add(Request $request)
    {
        return view('bookapp.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, book::$rules);
        $book = new book;
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form)->save();
        return redirect('/bookapp');

    }

    public function edit(Request $request)
    {
        $book = book::find($request->id);
        return view('bookapp.edit',['form'=>$book]);
    }

    public function update(Request $request)
    {
        $this->validate($request,book::$rules);
        $book = book::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $book->fill($form)->save();
        return redirect('/bookapp');
    }
    public function delete(Request $request)
    {
        $book = book ::find($request->id);
        return view('bookapp.del',['form'=>$book]);
    }
    public function remove(Request $request)
    {
        book::find($request->id)->delete();
        return redirect('/bookapp');
    }










    //
}
