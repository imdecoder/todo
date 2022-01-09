<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use App\Models\User;
use App\Models\Work;

use Illuminate\Http\Request;

class Works extends Controller
{
    public function index()
    {
        $works = Work::paginate(15);

        return view('works.index', [
            'works' => $works
        ]);
    }

    public function create()
    {
        $form = [
            'user_id' => User::all('id', 'firstname', 'lastname')->sortBy('firstname')->sortBy('lastname'),
            'priority_id' => Priority::all('id', 'name')->sortBy('id')
        ];

        return view('works.create', [
            'form' => $form
        ]);
    }

    public function store(Request $request)
    {
        Work::create($request->post());

        return redirect()->route('works')->withSuccess('Görev başarılıyla oluşturuldu.');
    }

    public function show($id)
    {
        return 'hop';
    }

    public function edit($id)
    {
        $work = Work::find($id) ?? abort(404, 'Görev Bulunamadı!');

        $form = [
            'user_id' => User::all('id', 'firstname', 'lastname')->sortBy('firstname')->sortBy('lastname'),
            'priority_id' => Priority::all('id', 'name')->sortBy('id')
        ];

        return view('works.edit', [
            'work' => $work,
            'form' => $form
        ]);
    }

    public function update(Request $request, $id)
    {
        Work::find($id) ?? abort(404, 'Görev Bulunamadı!');

        Work::where('id', $id)->update($request->except([
            '_method',
            '_token'
        ]));

        return redirect()->route('works')->withSuccess('Görev güncelleme işlemi başarılıyla gerçekleşti.');
    }

    public function destroy($id)
    {
        $work = Work::find($id) ?? abort(404, 'Görev Bulunamadı!');
        $work->delete();

        return redirect()->route('works')->withSuccess('Görev silme işlemi başarılıyla gerçekleşti.');
    }
}
