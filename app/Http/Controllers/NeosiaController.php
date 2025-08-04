<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NeosiaController extends Controller
{
    public function index()
    {
        $products=[
            ['img_path' => '/img/landingpage/ansys.png'],
            ['img_path' => '/img/landingpage/staad.png'],
            ['img_path' => '/img/landingpage/zwcad.png'],
            ['img_path' => '/img/landingpage/solidwork.png'],
            ['img_path' => '/img/landingpage/zw3d.png'],
            ['img_path' => '/img/landingpage/autopipe.png'],
            
        ];
        
        $profiles = [
    [
        'img' => '/img/landingpage/person.png',
        'name' => 'Mummayyis Pramonoaaaaaaaaa',
        'title' => 'Technical Trainer',
        'subtitle' => 'CAD/CAM/CAE Specialist',
        'color' => 'blue-500'
    ],
    [
        'img' => '/img/landingpage/person.png',
        'name' => 'Mummayyis Pramono',
        'title' => 'Technical Trainer',
        'subtitle' => 'CAD/CAM/CAE Specialist',
        'color' => 'red-500'
    ],
    [
        'img' => '/img/landingpage/person.png',
        'name' => 'Mummayyis Pramono',
        'title' => 'Technical Trainer',
        'subtitle' => 'CAD/CAM/CAE Specialist',
        'color' => 'green-500'
    ],
    [
        'img' => '/img/landingpage/person.png',
        'name' => 'Mummayyis Pramono',
        'title' => 'Technical Trainer',
        'subtitle' => 'CAD/CAM/CAE Specialist',
        'color' => 'blue-500'
    ],
    [
        'img' => '/img/landingpage/person.png',
        'name' => 'Mummayyis Pramono',
        'title' => 'Technical Trainer',
        'subtitle' => 'CAD/CAM/CAE Specialist',
        'color' => 'red-500'
    ],
    [
        'img' => '/img/landingpage/person.png',
        'name' => 'Mummayyis Pramono',
        'title' => 'Technical Trainer',
        'subtitle' => 'CAD/CAM/CAE Specialist',
        'color' => 'green-500'
    ],

];

        return view('index', compact('products', 'profiles'));
    }
    public function courseAll()
    {
       
        return view('courseAll');
    }
    public function courseDetail()
    {
       
        return view('courseDetail');
    }
    public function serviceDetail()
    {
       
        return view('serviceDetail');
    }
}
