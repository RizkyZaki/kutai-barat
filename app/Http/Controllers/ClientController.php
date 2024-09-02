<?php

namespace App\Http\Controllers;

use App\Models\Comments;
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
    $data = News::where('slug', $slug)->with('comments.replies')->first();
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
  public function commentStore(Request $request)
  {
    // Validasi data yang diterima
    $request->validate([
      'user' => 'required|string|max:1000',
      'comment' => 'required|string|max:1000',
      'news_id' => 'required|exists:news,id',
      'parent_id' => 'nullable|exists:comments,id',
    ]);

    Comments::create([
      'news_id' => $request->news_id,
      'user' => $request->user,
      'comment' => $request->comment,
      'parent_id' => $request->parent_id,
    ]);

    // Redirect kembali ke halaman sebelumnya
    return back()->with('success', 'Komentar berhasil ditambahkan!');
  }


  public function reply(Request $request, Comments $comment)
  {
    $request->validate([
      'user' => 'required|string|max:1000',
      'comment' => 'required|string|max:1000',
    ]);

    Comments::create([
      'news_id' => $comment->news_id,
      'user' => $request->user,
      'parent_id' => $comment->id,
      'comment' => $request->comment,
    ]);

    return back();
  }
}
