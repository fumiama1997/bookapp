<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'book_name' => 'required',
        'book_stock'=> 'integer|min:0|max:150'
    );

    public function getdata()
    {
        return $this->id . ':' . $this->book_name . '(' . $this->book_stock . ')';
    }
}
