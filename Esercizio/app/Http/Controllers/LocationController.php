<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    public function index() {
    $locations = Location::all();
    return view('pages.location-index', compact('locations'));
 }

    public function show($id) {
    $location = Location::findOrFail($id);
    return view('pages.location-show', compact('location'));
 }
}
