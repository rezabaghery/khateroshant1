<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\Http;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;
class index extends Controller
{

    function home(){


        return view('home');
    }
    function product(){

        $id=isset($_GET['id']) ? $_GET['id'] : 0;
        $address = "https://timcheh.com/product/".$id;

        $client = new Client();
        $crawler = $client->request('GET', $address);
        $title=$crawler->filter('h1.product_styles_product_title__2NMTI')->count() > 0 ? $crawler->filter('h1.product_styles_product_title__2NMTI')->text() : 'محصول یافت نشد!';
        $price=$crawler->filter('.product_styles_price__3Ws3t')->count() > 0 ? $crawler->filter('.product_styles_price__3Ws3t')->text() : '';
        $img=$crawler->filter('.product_styles_img__1p0hn > img')->count() > 0 ? $crawler->filter('.product_styles_img__1p0hn > img')->attr('src') : '';

        return view('product', compact('title', 'price', 'img'));
    }


}
