<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

use DB;
class Cate extends Model
{
    public $table = 'gkinds';
    public $primaryKey = 'tid';
    // public $timestamps = false;
    public $guarded = [];
    
    public static function  getDatecate()
		{  
			$cate_data =DB::select("select *,concat(path,',',tid) as paths from gkinds order by paths");  
		     foreach ($cate_data as $key => $value) {
		         //统计path
		         $n = substr_count($value['path'],',');
		         //处理tname
		         $cate_data[$key]['tname'] = str_repeat("!---", $n).$value['tname'];
		     }
		      return $cate_data;
		}
}