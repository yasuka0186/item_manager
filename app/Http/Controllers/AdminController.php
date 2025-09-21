<?php
namespace App\Http\Controllers;

class AdminController extends Controller
{
    // 管理者ページの表示
    public function index()
    {
        // admins.blade.php を返却
        return view("admin.admins");
    }

    // 管理者追加ページ
    public function showAdd()
    {
        return view("admin.add");
    }

    // 管理者登録の実行
    public function add(Request $request)
    {
        // フォーム力した値を全て確認
        dd($request->all());

        // 個別にパラメータを確認
        // $request->name
    }


    // 管理者編集ページ
    public function showEdit($id)
    {
        return view("admin.edit", ["id" => $id]);
    }
}