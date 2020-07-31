<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    Public function index()
    {
    	return view('frontend.index');
    }

     Public function aboutus()
    {
    	return view('frontend.aboutus');
    }
    Public function libary()
    {
    	return view('frontend.libary');
    }
    Public function careertest()
    {
    	return view('frontend.careertest');
    }
    Public function test()
    {
        return view('frontend.test');
    }
    Public function test1()
    {
        return view('frontend.test1');
    }
    Public function test2()
    {
        return view('frontend.test2');
    }
     Public function test_result()
    {
        return view('frontend.test_result');
    }
     Public function personalitytest()
    {
    	return view('frontend.personalitytest');
    }
     Public function contactus()
    {
    	return view('frontend.contactus');
    }
}
