@extends('layouts.bookapp')

@section('title','bookapp.delete')

@section('menubar')
 @parent
 削除ページ
@endsection

@section('content')
      
 <form action="/bookapp/del" method="post">
<table>
      @csrf
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr><th>book_name:</th><td><input type="text" name="book_name" value="{{$form->book_name}}"></td></tr>
      <tr><th>book_stock:</th><td><input type="number" name="book_stock" value="{{$form->book_stock}}"></td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>    
</table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection