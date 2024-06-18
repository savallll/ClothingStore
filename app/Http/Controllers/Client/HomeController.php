<?php

namespace App\Http\Controllers\Client;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service\Brand\BrandServiceInterface;
use App\Service\Product\ProductServiceInterface;
use App\Service\ProductCategory\ProductCategoryService;

class HomeController extends Controller
{
    private $productServices ;
    private $productcategory;
    private $brands;
    public function __construct(ProductServiceInterface $productService,
                               ProductCategoryService $productCategoryService,
                               BrandServiceInterface $brandService,
    ){
        $this->productServices = $productService;
        $this->productcategory=$productCategoryService;
        $this->brands = $brandService;
    }
    public function index(){
        $latestProducts = $this->productServices->getLatestProducts();
        $featuredProducts = $this->productServices->getLatestFeaturedProduct();
        $featuredProductsCategory = $this->productServices->getFeaturedProducts();
        $ProductsDiscountedOver30 = $this->productServices->getProductsDiscountedOver30();
        $category = $this->productcategory->all();
        $brands = $this->brands->all();

        
        $slide = Photo::where('type', 'slide')->get();

        $viewData = [
            'slide' => $slide,
            'latestProducts' => $latestProducts,
            'featuredProducts' => $featuredProducts,
            'featuredProductsCategory' => $featuredProductsCategory,
            'ProductsDiscountedOver30' => $ProductsDiscountedOver30,
            'category' => $category,
            'brands' => $slide,
        ];

        return view ('index',$viewData);
    }
}
