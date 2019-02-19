<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;

class MediaController extends Controller
{
    /**
     * Index function for general listing.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $media = Media::all();

        return response()->json($media);
    }


    /**
     * Store-Action
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $media = Media::create($request->all());

        return response()->json($media);
    }


    /**
     * Show-Action
     *
     * @param Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $id)
    {
        $media = Note::find($id);

        return response()->json($media);
    }


    /**
     * Update-Action
     *
     * @param Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $media = Note::findOrFail($id);
        $media->update($request->all());

        return response()->json($media);


    }


    /**
     * Destroy-Action
     *
     * @param Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request, $id)
    {
        Media::find($id)->delete();

        return response()->json([], 204);
    }//
}
