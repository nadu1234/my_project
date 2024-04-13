<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // DB 接続用 class

class SampleController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sample テキストです。"; // 追加

//         $records = DB::connection('mysql')->select("select * from users"); // query 実行処理 実行結果を $records に代入
//         $name = $records[0]->name; // dd の処理を削除するため、$name 変数に代入する内容へ変更


//         $insertResult = DB::connection("mysql")->insert("insert into users (ID,email,name,password) values (1,'a@a','信二','aiueo'),
//         (2,'b@b','太郎','kakikukeko'),
//         (3,'c@c','花子','sashisuseso')");
//         dd($insertResult);

//         $updateResult = DB::connection("mysql")->update("update items set price = 600 where name = 'りんご'");
//         dd($updateResult);

        $deleteResult = DB::connection("mysql")->delete("delete from users where name = '太郎'");
        dd($deleteResult);

        return view("sample/index" , [ "sampleValue" => $sampleValue ]); // 変更
    }
}
