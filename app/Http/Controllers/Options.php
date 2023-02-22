<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Options extends Controller
{
    public function index()
{
  $options = [
    ['id' => 1, 'label' => 'Option 1'],
    ['id' => 2, 'label' => 'Option 2'],
    ['id' => 3, 'label' => 'Option 3'],
  ];

  return inertia('Index', ['options' => $options]);
}
}
