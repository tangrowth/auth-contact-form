<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * お問い合わせフォームの入力画面を表示
     */
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    /**
     * お問い合わせフォームの確認画面を表示
     */
    public function confirm(ContactRequest $request)
    {
        $form = $request->all();
        $category = Category::find($form['category_id']);
        return view('confirm', compact('form', 'category'));
    }

    /**
     * 確認画面で押されたボタンによって処理を分岐
     */
    public function store(Request $request)
    {
        /** 押されたボタンの値 */
        $action = $request->input('action');

        /**
         * 送信が押された場合はtellを結合して保存
         * 修正が押された場合はindexに戻す
         */
        if ($action == "送信") {
            $form = [
                'category_id' => $request->input('category_id'),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'gender' => $request->input('gender'),
                'email' => $request->input('email'),
                'tell' => $request->input('first_number') . $request->input('middle_number') . $request->input('middle_number'),
                'address' => $request->input('address'),
                'building' => $request->input('building'),
                'detail' => $request->input('detail'),
            ];
            Contact::create($form);
            return view('thanks');
        } else {
            return redirect()->route('index')->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
