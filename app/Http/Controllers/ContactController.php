<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function index()
  {
    return view('admin.pages.contact.index', [
      'title' => 'kontak',
      'heading' => 'Data kontak',
      'data' => Contact::latest()->get(),
    ]);
  }
}
