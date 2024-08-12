<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
  public function setting()
  {
    return view('admin.pages.settings.index', [
      'title' => 'Pengaturan Website',
      'heading' => 'Pengaturan',
      'setting' => Settings::first()
    ]);
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required',
      'keyword' => 'required',
      'email' => 'required',
      'link_yt' => 'required',
      'link_fb' => 'required',
      'link_ig' => 'required',
      'address' => 'required',
      'phone' => 'required',
      'logo' => $request->hasFile('logo') ? 'file|image' : '',
      'description' => 'required',
    ]);



    if ($request->file('logo')) {
      $eks = $request->file('logo')->getClientOriginalExtension();
      $request->file('logo')->storeAs('assets/logo', md5($request->input('name')) . '.' . $eks);
      $validatedData['logo'] = md5($request->input('name')) . '.' . $eks;
    }

    Settings::first()->update($validatedData);

    return redirect()->back()->with('success', 'Berhasil Memperbarui Pengaturan');
  }
}
