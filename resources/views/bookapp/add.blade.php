@extends('layouts.bookapp')

@section('title','bookapp.Add')

@section('menubar')
 @parent
 新規作成ページ
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
 <form action="/bookapp/add" method="post">
<table>
      @csrf
    <tr><th>book_name:</th><td><input type="text" name="book_name" value="{{old('name')}}"></td></tr>
    <tr><th>book_stock:</th><td><input type="number" name="book_stock" value="{{old('stock')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>    
</table>
</form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection