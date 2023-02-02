<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class ProductController extends Controller
{
    function index(){
        return view('admin.product_import');
    }

    protected $fetch_data = array();
    function getcategory(Request $request)
    {
        $url = "";
        $counrty = $request->country;
        if($counrty == 'us'){
            //echo "us";
            
            $url = 'https://www.amazon.com';
            $client = new Client();
            $page = $client->request('GET',$url);
            //print_r($page->text());
            $page->filter('.searchSelect ')->each(function($node){
                $node->filter('select')->each(function($node){
                    $node->filter('option')->each(function($node){
                        $this->fetch_data[$node->text()] = $node->attr('value');
                    });
                });
            });
            $category = $this->fetch_data;
            //print_r($category);
            $str = '<option value="" > ALL </option>';
            foreach($category as $category=>$category_value){
                $str .= '<option value="'.$category_value.'" >'.$category.'</option>';
            }
            echo $str;
        }
        if($counrty == 'uk'){
            $url = 'https://www.amazon.co.uk/';
             $client = new Client();
             $page = $client->request('GET',$url);
             //print_r($page);
             $page->filter('.searchSelect ')->each(function($node){
                $node->filter('select')->each(function($node){
                    $node->filter('option')->each(function($node){
                        // echo $node->text();
                        $this->fetch_data[$node->text()] = $node->attr('value');
                    });
                });
             });
             $category = $this->fetch_data;
                $str = '<option value="" > ALL </option>';
                foreach($category as $category=>$category_value){
                    $str.= '<option value="'.$category_value.'" >'.$category.'</option>';
                }
                echo $str;
        }
    }

    function product_search(Request $request)
    {
        
        // $url = 'https://www.amazon.co.uk/s';
        // $client = new Client();
        return $request->all();
    }
    
}
