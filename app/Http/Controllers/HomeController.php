<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\WebsiteSetting;
use App\Models\Navigation;
use App\Models\Product;
use App\Models\Category;
use App\Models\About;
use App\Models\Certification;
use App\Models\Management;
use App\Models\ProductionFacility;
use App\Models\CompanyOverview;
use App\Models\Celebrity;
use App\Models\CelebrityType;

class HomeController extends Controller
{
    public function index()
    {
        $settings = WebsiteSetting::first();

        $banners = Banner::orderBy('sort_order', 'asc')->get();
        
        $navigations = Navigation::orderBy('sort_order', 'asc')->get();

        $products = Product::orderBy('sort_order', 'asc')->get();
                
        $categories = Category::orderBy('sort_order', 'asc')->get();

        $abouts = About::orderBy('sort_order', 'asc')->get();

        $certifications = Certification::orderBy('sort_order', 'asc')->get();

        $managements = Management::orderBy('sort_order', 'asc')->get();

        $productions = ProductionFacility::orderBy('sort_order', 'asc')->get();

        $overviews = CompanyOverview::orderBy('sort_order', 'asc')->get();

        $celebrities = Celebrity::orderBy('sort_order', 'asc')->get();

        $celebrityTypes = CelebrityType::all();
        
    
        return view('index', compact(
                    'banners', 
                    'settings', 
                    'navigations', 
                    'abouts',
                    'products', 
                    'overviews',
                    'managements',
                    'certifications',
                    'productions',
                    'categories',
                    'celebrities',
                    'celebrityTypes'
                    ));
    }
}