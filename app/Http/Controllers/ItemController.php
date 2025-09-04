<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // 商品一覧ページの表示
    public function index()
    {
        // index.blade.php を返却
        return view("item.index");
    }

    // 商品登録ページ表示用
    public function showAdd()
    {
        return view('item.add');
    }

    // 商品登録の実行
    public function add(Request $request)
    {
        // フォーム力した値を全て確認
        dd($request->all());

        // 個別にパラメータを確認
        // $request->name
        // $request->price
    }

    // 商品編集ページ
    public function showEdit($id)
    {
        return view('item.edit', ['id' => $id]);
    }
}