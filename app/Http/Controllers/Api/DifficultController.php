<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Difficult;


class DifficultController extends Controller
{
  public function index()
  {
    $category = Difficult::select('difficult_id', 'name')->get();

    return $category;
  }
}
