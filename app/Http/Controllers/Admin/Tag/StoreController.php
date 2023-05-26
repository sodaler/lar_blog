<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Tag::firstOrCreate([
            'title' => $data['title']
        ],[
            'title' => $data['title']
        ]);
        session(['alert' => __('Тег успешно создан: ') . $data['title']]);
        return redirect()->route('admin.tag.index');
    }
}
