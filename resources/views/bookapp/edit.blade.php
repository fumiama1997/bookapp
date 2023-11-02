@extends('layouts.bookapp')

@section('title','bookapp.edit')

@section('menubar')
 @parent
 更新ページ
@endsection

@section('content')
   @if(count($errors) > 0)
   <div>
    <ul>
        @foreach($errors->all() as $error)
         <li>{{$error}}</li>
        @endforeach
    </ul>
   </div>
@endif
 <form action="/bookapp/edit" method="post">
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