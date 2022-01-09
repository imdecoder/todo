<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Users extends Controller
{
    public function index()
    {
        $users = User::paginate(15);

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create($request->post());

        return redirect()->route('users')->withSuccess('Kullanıcı başarılıyla oluşturuldu.');
    }

    public function show($id)
    {
        return 'hop';
    }

    public function edit($id)
    {
        $user = User::find($id) ?? abort(404, 'Kullanıcı Bulunamadı!');

        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        User::find($id) ?? abort(404, 'Kullanıcı Bulunamadı!');

        User::where('id', $id)->update($request->except([
            '_method',
            '_token'
        ]));

        return redirect()->route('users')->withSuccess('Kullanıcı güncelleme işlemi başarılıyla gerçekleşti.');
    }

    public function destroy($id)
    {
        $user = User::find($id) ?? abort(404, 'Kullanıcı Bulunamadı!');
        $user->delete();

        return redirect()->route('users')->withSuccess('Kullanıcı silme işlemi başarılıyla gerçekleşti.');
    }
}
