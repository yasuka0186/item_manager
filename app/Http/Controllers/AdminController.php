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

    // 管理者編集ページ
    public function showEdit($id)
    {
        return view("admin.edit", ["id" => $id]);
    }
}