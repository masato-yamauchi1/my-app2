<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class Contact extends Controller
{
    /**
     * お問合せページの表示
     * 引数：なし
     * 戻値：View
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * ajaxで送られたお問い合わせをメールにて処理（テストのためメール処理はかきません）
     * 引数：フォームリクエスト、（method:POST）
     * 戻値：エラーがエラーページへリダイレクト
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20',
            'title' => 'required|max:100',
            'body' => 'max:1000',
            'mail' => 'required|email|max:200',
        ]);
        
        if ($validator->fails()) {
            return redirect('/errorpage');
           } else {
            //メール実装して終了
          }
    }

}
