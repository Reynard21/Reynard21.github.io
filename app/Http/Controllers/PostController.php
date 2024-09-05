<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\Catch_;

class PostController extends Controller
{
    // public function showPublicImage($title)
    // {
    //     $image = Post::where('title', $title)->firstOrFail();
    //     return view('public_page', compact('image'));
    // }

    public function showPostAPI()
    {
        return view('aktivitasanak');
    }

    public function getAktivitasAnakAPI()
    {

        try {


            $response = Post::where('category', 'Aktivitas Anak')->get();


            return view('aktivitasanak')->with(['data' => $response]);
        } catch (\Exception $e) {
            Log::info($e);
        };
    }

    public function getKegiatanGuruAPI()
    {

        try {


            $response = Post::where('category', 'Kegiatan Guru')->get();


            return view('kegiatanguru')->with(['data' => $response]);
        } catch (\Exception $e) {
            Log::info($e);
        };
    }

    public function getPuncakTemaAPI()
    {

        try {


            $response = Post::where('category', 'Puncak Tema')->get();


            return view('puncaktema')->with(['data' => $response]);
        } catch (\Exception $e) {
            Log::info($e);
        };
    }

    public function getKegiatanPembelajaranAPI()
    {

        try {


            $response = Post::where('category', 'Kegiatan Pembelajaran')->get();


            return view('kegiatanpembelajaran')->with(['data' => $response]);
        } catch (\Exception $e) {
            Log::info($e);
        };
    }

    public function getHomeAPI()
    {

        try {


            $response = Post::latest()->take(6)->get();


            return view('home')->with(['data' => $response]);
        } catch (\Exception $e) {
            Log::info($e);
        };
    }



}
