<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class Ajax extends Controller
{
    public function index()
    {
        return redirect()->route('home');
    }

    public function post(Request $request)
    {
        $type = $request->input('type');
        $data = $request->input('data');

        switch ($type)
        {
            case 'check':
                try
                {
                    Work::where('id', $data)->update([
                        'status' => 'passive'
                    ]);

                    return response('success');
                }
                catch (QueryException $e)
                {
                    return response('Hata! Güncelleme işlemi gerçekleştirelemedi.');
                }
                break;

            case 'delete':
                try
                {
                    Work::where('id', $data)->delete();

                    return response('success');
                }
                catch (QueryException $e)
                {
                    return response('Hata! Silme işlemi gerçekleştirelemedi.');
                }
                break;

            default:
                return redirect()->route('home');
                break;

            case 'add':
                try
                {
                    Work::insert($data);

                    return response('success');
                }
                catch (QueryException $e)
                {
                    return response('Hata! Ekleme işlemi gerçekleştirelemedi.');
                }
                break;

            case 'search':
                try
                {
                    $works = Work::query()->where('title', '=', $data)->orWhere('title', 'like', '%' . $data . '%')->orderBy('title')->get();

                    return response($works);
                }
                catch (QueryException $e)
                {
                    return response('error');
                }
                break;
        }
    }
}
