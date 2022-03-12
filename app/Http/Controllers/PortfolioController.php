<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home() {
        // $path = Storage::url('luthfi.png');
        // return '<img src="'.$path.'" alt="">';
        return view("portfolio.home");
    }

    public function about() {
        return view("portfolio.about");
    }

    public function service() {
        return view("portfolio.service");
    }

    public function contact() {
        return view("portfolio.contact");
    }

    public function showImage() {
        $path = Storage::url('public/luthfi.png');
        return '<img src="' .$path. '" alt="">';
    }

    public function myroadmap() {
        return view("portfolio.secured.myroadmap");
    }


}
