<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
  public function index()
  {
    return view('admin.pages.news.index', [
      'title' => 'Berita',
      'heading' => 'Data Berita',
      'data' => News::latest()->get(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.pages.news.create', [
      'title' => 'Berita',
      'heading' => 'Tambah Berita',
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'slug' => 'required',
      'description' => 'required',
      'landscape' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
      'potrait' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ], [
      'name.required' => 'Judul Tidak Boleh Kosong.',
      'description.required' => 'Deskripsi Tidak Boleh Kosong.',
      'slug.required' => 'Slug Tidak Boleh Kosong',
      'landscape.image' => 'File yang diunggah harus berupa gambar.',
      'landscape.mimes' => 'File gambar harus dalam format: jpeg, png, jpg, gif.',
      'landscape.max' => 'Ukuran file gambar tidak boleh lebih dari 2MB.',
      'potrait.image' => 'File yang diunggah harus berupa gambar.',
      'potrait.mimes' => 'File gambar harus dalam format: jpeg, png, jpg, gif.',
      'potrait.max' => 'Ukuran file gambar tidak boleh lebih dari 2MB.',

    ]);

    $hashLS = null;
    $hashPT = null;

    if ($request->hasFile('landscape')) {
      $image = $request->file('landscape');
      $hashLS = md5($image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
      $imagePath = 'assets/attach/' . $hashLS;
      $image->storeAs($imagePath);
    }
    if ($request->hasFile('potrait')) {
      $image = $request->file('potrait');
      $hashPT = md5($image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
      $imagePath = 'assets/attach/' . $hashPT;
      $image->storeAs($imagePath);
    }

    News::create([
      'enhancer' => Auth::user()->id,
      'name' => $request->name,
      'slug' => $request->slug,
      'landscape' => $hashLS,
      'potrait' => $hashPT,
      'description' => $request->description,
    ]);

    return redirect('dashboard/news')->with('success', 'Berita Berhasil Dibuat');
  }


  /**
   * Display the specified resource.
   */
  public function show(News $info) {}

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($slug)
  {
    $news = News::where('slug', $slug)->first();
    return view('admin.pages.news.update', [
      'title' => 'Berita',
      'heading' => 'Ubah Data Berita',
      'data' => $news,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $slug)
  {
    // Validasi data dengan pesan kustom
    $news = News::where('slug', $slug)->first();
    $validatedData = $request->validate([
      'name' => 'required',
      'slug' => 'required',
      'description' => 'required',
      'landscape' => $request->hasFile('landscape') ? 'image|mimes:jpeg,png,jpg|max:2048' : '',
      'potrait' => $request->hasFile('potrait') ? 'image|mimes:jpeg,png,jpg|max:2048' : '',
    ], [
      'name.required' => 'Judul Tidak Boleh Kosong.',
      'slug.required' => 'Slug Tidak Boleh Kosong',
      'description.required' => 'Deskripsi Tidak Boleh Kosong',
      'landscape.image' => 'File yang diunggah harus berupa gambar.',
      'landscape.mimes' => 'File gambar harus dalam format: jpeg, png, jpg, gif.',
      'landscape.max' => 'Ukuran file gambar tidak boleh lebih dari 2MB.',
      'potrait.image' => 'File yang diunggah harus berupa gambar.',
      'potrait.mimes' => 'File gambar harus dalam format: jpeg, png, jpg, gif.',
      'potrait.max' => 'Ukuran file gambar tidak boleh lebih dari 2MB.',
    ]);

    if ($request->hasFile('landscape')) {

      $landscape = $request->file('landscape');
      $hashLS = md5($landscape->getClientOriginalName()) . '.' . $landscape->getClientOriginalExtension();
      $landscape->storeAs('assets/attach', $hashLS);

      $news->landscape = $hashLS;
    }
    if ($request->hasFile('potrait')) {

      $potrait = $request->file('potrait');
      $hashPT = md5($potrait->getClientOriginalName()) . '.' . $potrait->getClientOriginalExtension();
      $potrait->storeAs('assets/attach', $hashPT);

      $news->potrait = $hashPT;
    }

    $news->name = $request->name;
    $news->description = $request->description;
    $news->slug = $request->slug;
    $news->save();

    return redirect('dashboard/news')->with('success', 'Berita berhasil diubah');
  }



  /**
   * Remove the specified resource from storage.
   */
  public function destroy($slug)
  {
    $info = News::where('slug', $slug)->first();

    if ($info) {
      if ($info->landscape) {
        Storage::delete('assets/attach/' . $info->landscape);
      }
      if ($info->potrait) {
        Storage::delete('assets/attach/' . $info->potrait);
      }

      $info->delete();

      return response()->json([
        'status' => 'true',
        'title' => 'Berhasil',
        'description' => 'Berita berhasil dihapus.',
        'icon' => 'success',
      ]);
    } else {
      return response()->json([
        'status' => 'false',
        'title' => 'Gagal',
        'description' => 'Berita tidak ditemukan.',
        'icon' => 'error',
      ]);
    }
  }
}
