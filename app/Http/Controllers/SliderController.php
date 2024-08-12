<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('admin.pages.slider.index', [
      'title' => 'slider',
      'heading' => 'Data slider',
      'slider' => Slider::all(),
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      'image' => 'required|mimes:jpg,png,jpeg',
    ], [
      'name.required' => 'Nama Slider harus diisi.',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'status' => 'false',
        'title' => 'Error',
        'description' => $validator->errors()->first(),
        'icon' => 'error'
      ]);
    }

    $image = $request->file('image');
    $hashIMG = md5($image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
    $imagePath = 'assets/attach/' . $hashIMG;
    $image->storeAs($imagePath);

    $data = [
      'name' => $request->name,
      'image' => $hashIMG,
    ];

    Slider::create($data);

    return response()->json([
      'status' => 'true',
      'title' => 'Berhasil',
      'description' => 'Slider berhasil ditambahkan.',
      'icon' => 'success'
    ]);
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $tag = Slider::where('id', $id)->first();

    if ($tag) {
      return response()->json([
        'status' => 'true',
        'tag' => $tag
      ]);
    } else {
      return response()->json([
        'status' => 'false'
      ]);
    }
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required',
    ], [
      'name.required' => 'Nama tag harus diisi.',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'status' => 'false',
        'title' => 'Error',
        'description' => $validator->errors()->first(),
        'icon' => 'error'
      ]);
    }

    $tag = Slider::find($id);


    if ($tag) {
      $data = [
        'name' => $request->name,
      ];
      $hashIMG = null;
      if ($request->hasFile('image')) {

        $image = $request->file('image');
        $hashIMG = md5($image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
        $imagePath = 'assets/attach/' . $hashIMG;
        $image->storeAs($imagePath);
        $data['image'] = $hashIMG;
      }

      $tag->update($data);

      return response()->json([
        'status' => 'true',
        'title' => 'Berhasil',
        'description' => 'Slider berhasil diubah.',
        'icon' => 'success'
      ]);
    } else {
      return response()->json([
        'status' => 'false',
        'title' => 'Error',
        'description' => 'Slider Gagal Diubah.',
        'icon' => 'error'
      ]);
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $data = Slider::find($id);

    if ($data) {

      $data->delete();

      return response()->json([
        'status' => 'true',
        'title' => 'Berhasil',
        'description' => 'Slider berhasil dihapus.',
        'icon' => 'success',
      ]);
    } else {
      return response()->json([
        'status' => 'false',
        'title' => 'Gagal',
        'description' => 'Slider tidak ditemukan.',
        'icon' => 'error',
      ]);
    }
  }
}
