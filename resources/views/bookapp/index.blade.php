@extends('layouts.bookapp')

{{-- @section('title','Index') --}}
{{-- 上と同じ --}}
@section('title','bookapp.index')
   
@section('menubar')
    @parent
  本の名前と在庫数
@endsection

@section('content')
  <table>
    <tr>
        <th>book_name</th>
        <th>book_stock</th>
    </tr>
    @foreach ($items as $item)
        <tr>
        
            <td>{{$item->book_name}}</td>
            <td>{{$item->book_stock}}</td>
        </tr>
    @endforeach
  </table>
@endsection

@section('footer')
    copyright 2020 tuyano
@endsection