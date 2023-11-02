<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

global $head, $style , $body , $end;
$head = '<html><head>';
$style = <<<EOF
<style>
body {font-size:16pt; color:#999;}
h1{font-size:100pt; text-align:rignt; color:#eee;
    margin:-40px 0px -50px 0px;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag,$txt)
{
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class BookappController extends Controller
{

public function index(Request $request)
{
    $items = DB::select('select * from books');
    return view('bookapp.index',['items'=>$items]);
}













//    public function index() {
//     global $head, $style , $body , $end;
    
//     $html = $head . tag('title','bookapp/Index')   .   $style  .
//     $body
//     .    tag('h1','Index')  . tag('p','ここは本屋さんのトップページです')
//     .    '<a href="/bookapp/insert">これは追加するフォームです</a><br>'
//     .    '<a href="/bookapp/update">これは更新するフォームです</a><br>'
//     .    '<a href="/bookapp/delete">これは削除するフォームです</a>'
//     .    $end;
//     return $html;
// }

// public function insert(){
//     global $head, $style , $body , $end;
//     $html = $head . tag('title','bookapp/Insert')   .   $style  .
//     $body
//     .    tag('h1','Insert')  . tag('p','ここは本屋さんの追加フォームです')
//     .    $end;
//     return $html;

// }
// public function update(){
//     global $head, $style , $body , $end;
//     $html = $head . tag('title','bookapp/Update')   .   $style  .
//     $body
//     .    tag('h1','Update')  . tag('p','ここは本屋さんの更新フォームです')
//     .    $end;
//     return $html;

// }public function delete(){
//     global $head, $style , $body , $end;
//     $html = $head . tag('title','bookapp/Delete')   .   $style  .
//     $body
//     .    tag('h1','Delete')  . tag('p','ここは本屋さんの削除フォームです')
//     .    $end;
//     return $html;

// }




    //
}
