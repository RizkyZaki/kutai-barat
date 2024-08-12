<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Information;
use App\Models\News;
use App\Models\Slider;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  public function home()
  {
    return view('client.pages.home', [
      'title' => 'Beranda',
      'slider' => Slider::latest()->get(),
      'news' => News::latest()->limit(3)->get()
    ]);
  }

  public function newsDetail($slug)
  {
    $data = News::where('slug', $slug)->first();
    return view('client.pages.news-detail', [
      'title' => $data->name,
      'data' => $data
    ]);
  }
  public function info($slug)
  {
    $data = Information::where('slug', $slug)->first();
    return view('client.pages.information', [
      'title' => $data->name,
      'data' => $data
    ]);
  }
  public function news()
  {
    $data = News::all();
    return view('client.pages.news', [
      'title' => 'Berita',
      'news' => $data
    ]);
  }
  public function contact()
  {
    return view('client.pages.contact', [
      'title' => 'Kontak Kami',
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'subject' => 'required|string|max:255',
      'email' => 'required|email',
      'message' => 'required|string',
    ]);
    Contact::create([
      'subject' => $request->subject,
      'email' => $request->email,
      'message' => $request->message,
    ]);
    return back()->with('success', 'Pesan kamu telah dikirim!');
  }
}
