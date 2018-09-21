<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;

class MediaController extends Controller
{
    //
    public function delete(Request $request)
    {
        $selected = $request->input('delete');
        foreach($selected as $media) {
            $media = Media::where('id', '=', $media)->firstOrFail();
            $media->deleted_at = date("Y-m-d H:i:s");
            $media->save();
        }
        return $selected;
    }
}
