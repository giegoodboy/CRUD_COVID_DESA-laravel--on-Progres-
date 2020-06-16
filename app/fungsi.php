<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class fungsi extends Model
{
    public static function deleteData($id){
        DB::table('allDB')->where('id', '=', $id)->delete();
      }


}
