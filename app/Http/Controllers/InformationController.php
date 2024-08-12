<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class InformationController extends Controller
{
  public function index()
  {
    return view('admin.pages.information.index', [
      'title' => 'Informasi',
      'heading' => 'Data Informasi',
      'data' => Information::latest()->get(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.pages.information.create', [
      'title' => 'Informasi',
      'heading' => 'Tambah Informasi',
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
    ], [
      'name.required' => 'Judul Tidak Boleh Kosong.',
      'description.required' => 'Deskripsi Tidak Boleh Kosong.',
      'slug.required' => 'Slug Tidak Boleh Kosong',

    ]);

    $hashIMG = null;

    if ($request->hasFile('attachment')) {
      $request->validate([
        'attachment' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
      ], [
        'attachment.image' => 'File yang diunggah harus berupa gambar.',
        'attachment.mimes' => 'File gambar harus dalam format: jpeg, png, jpg, gif.',
        'attachment.max' => 'Ukuran file gambar tidak boleh lebih dari 2MB.',
      ]);
      $image = $request->file('attachment');
      $hashIMG = md5($image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
      $imagePath = 'assets/attach/' . $hashIMG;
      $image->storeAs($imagePath);
    }

    Information::create([
      'enhancer' => Auth()->id,
      'name' => $request->name,
      'slug' => $request->slug,
      'attachment' => $hashIMG,
      'description' => $request->description,
    ]);

    return redirect('dashboard/information')->with('success', 'Profile Berhasil Dibuat');
  }


  /**
   * Display the specified resource.
   */
  public function show(Information $info) {}

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Information $info)
  {
    return view('admin.pages.information.update', [
      'title' => 'Informasi',
      'heading' => 'Ubah Data Informasi',
      'data' => $info,
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Information $info)
  {
    // Validasi data dengan pesan kustom
    $validatedData = $request->validate([
      'name' => 'required',
      'slug' => 'required',
      'description' => 'required',
      'attachment' => $request->hasFile('attachment') ? 'image|mimes:jpeg,png,jpg|max:2048' : '',
    ], [
      'name.required' => 'Judul Tidak Boleh Kosong.',
      'slug.required' => 'Slug Tidak Boleh Kosong',
      'description.required' => 'Deskripsi Tidak Boleh Kosong',
      'attacment.image' => 'File yang diunggah harus berupa gambar.',
      'attachment.mimes' => 'File gambar harus dalam format: jpeg, png, jpg.',
      'attachment.max' => 'Ukuran file gambar tidak boleh lebih dari 2MB.',
    ]);

    if ($request->hasFile('attachment')) {
      if ($info->attachment) {
        Storage::delete('assets/attach/' . $info->attachment);
      }

      $attachment = $request->file('attachment');
      $hashIMG = md5($attachment->getClientOriginalName()) . '.' . $attachment->getClientOriginalExtension();
      $attachment->storeAs('assets/attach', $hashIMG);

      $info->attachment = $hashIMG;
    }

    $info->name = $request->name;
    $info->description = $request->description;
    $info->slug = $request->slug;
    $info->save();

    return redirect('dashboard/information')->with('success', 'Profil berhasil diubah');
  }



  /**
   * Remove the specified resource from storage.
   */
  public function destroy($slug)
  {
    $info = Information::where('slug', $slug)->first();

    if ($info) {
      if ($info->attachment) {
        Storage::delete('assets/attach/' . $info->attachment);
      }

      $info->delete();

      return response()->json([
        'status' => 'true',
        'title' => 'Berhasil',
        'description' => 'Informasi berhasil dihapus.',
        'icon' => 'success',
      ]);
    } else {
      return response()->json([
        'status' => 'false',
        'title' => 'Gagal',
        'description' => 'Informasi tidak ditemukan.',
        'icon' => 'error',
      ]);
    }
  }
}
