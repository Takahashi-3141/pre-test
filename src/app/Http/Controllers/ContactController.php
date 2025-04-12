<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        //カテゴリー覧を取得

        //カテゴリ一覧を返却
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only([
            'last_name',
            'first_name',
            'gender',
            'email',
            'phone1',
            'phone2',
            'phone3',
            'address',
            'building',
            'category_id',
            'detail'
        ]);

        return view('confirm', compact('contact'));

    }

    public function store(Request $request)
    {
        $form = $request->all();

        Contact::create($form);

        return view('thanks');
    }

    public function admin(Request $request)
    {
        $contact = $request->only([
            'last_name',
            'first_name',
            'gender',
            'email',
            'phone1',
            'phone2',
            'phone3',
            'address',
            'building',
            'category_id',
            'detail'
        ]);

        return view('admin', compact('contact'));
    }
}
