<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//1.
//1つのコントローラとHTMLを作成してください。GetまたはpostでHTMLから値をコントローラに渡してください。
//その値をコントローラで加工して異なるHTMLに表示してください。

//2.
//1つのコントローラとHTMLを作成してください。入力テキスト、ラジオボタン、チェックボックス、プルダウン、テキストエリアを作成し、入力された値をget, postで値をコントローラに渡してください。
//その値を別のHTMLに表示してください。
//3.
// xamppで作成したmembersのテーブルの情報をすべて一覧でHTMLに表示してください。
//4.
// 入力テキスト、ラジオボタン、チェックボックス、プルダウン、テキストエリアなどを作成し、入力された値をget, postで値をコントローラに渡してください。
// その値をテーブルにINSERTしてください。
// INSERTした値を含めて、すべてのテーブルの値を別のHTMLに一覧で表示してください。
//5.
// 先で表示した一覧の値の右横に削除ボタンを作成します。削除ボタンを押したら、「削除してもいいですか？」と確認ダイアログを表示し、OKボタンを押したらその値をテーブルから削除します。
// 削除が反映された後に、すべてのテーブルの値を一覧で表示してください。


class HelloController extends Controller
{
   public function show()
	{
		$member=DB::table('sales_staff')->get();

		return view('greeting',['member'=>$member,'greet'=>'World','name'=>'名前を入力してください','select'=>'選択してください']);
	}
	
	public function contents(Request$request)
	{
		
		$name=$request->input('name');
		$radio=$request->input('radio');
        $checkbox=$request->input('checkbox');
        $date=$request->input('date');
        $comment=$request->input('comment');

		DB::table('questionnaire')->insert(['NAME'=>$name],
								['PLACE'=>$radio],
								['TODO'=>$checkbox],
								['HOWLONG'=>$date],
								['COMMENT'=>$comment]);

        return view('contents',['name'=>$name,'radio'=>$radio,'checkbox'=>$checkbox,'date'=>$date,'comment'=>$comment]);
    }

	
}
