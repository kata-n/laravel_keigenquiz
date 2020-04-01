<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Information;

class InformationController extends Controller
{
    public function index()
    {
      $informations = Information::orderby('id', 'desc')->get();

      return $informations;
    }
}
