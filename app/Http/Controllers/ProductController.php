<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = array(
            [
                'name' => 'iPhone11',
                'description' => 'The iPhone 11 combines a sleek design, powerful performance with an A13 Bionic chip, 
                and advanced dual-camera system, making it a standout choice for users seeking a top-tier smartphone experience.',
                'price' => 799.99,
            ],
            [
                'name' => 'Beats Studio 3',
                'description' => 'The Beats Studio 3 headphones offer premium sound quality and active noise cancellation, making them ideal for immersive listening experiences.',
                'price' => 129.99,
            ],
        );

        return view('products', compact('products'));
    }
}
