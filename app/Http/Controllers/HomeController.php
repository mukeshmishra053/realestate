<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Botble\RealEstate\Models\Category;
use Botble\RealEstate\Models\Property;
use Carbon\Carbon;
use Botble\RealEstate\Repositories\Interfaces\PropertyInterface;
use Botble\RealEstate\Repositories\Interfaces\ProjectInterface;
use Illuminate\Support\Facades\View;
use Config;
Class HomeController extends Controller {

    protected $propertyRepository;
    protected $projectRepository;
    public function __construct(PropertyInterface $propertyRepository,ProjectInterface $projectRepository)
    {
        $this->propertyRepository = $propertyRepository;
        $this->projectRepository = $projectRepository;
    }


    public function index(Request $request){
        $categoriesData = Category::all();
        $homeInteriorCategories = Category::with('properties')->where('is_interior',1)->get();

        $properties = $this->propertyRepository->getRelatedProperties(1,6);
        $featuredProjects = Category::with('properties')->whereHas('properties',function($query){
            $query->where('is_featured',1)->limit(6);
        })->where('is_interior',0)->take(4)->get();
        // echo "<pre>";
        // print_r(json_decode(json_encode($homeInteriorCategories),2)); die;
        $highlyViewedProperties = Property::where('created_at', '>=', Carbon::now()->subYear())->orderBy('views','DESC')->take(6)->get();

        return view('frontend.pages.home',compact('categoriesData','homeInteriorCategories','properties','featuredProjects','highlyViewedProperties','featuredProjects'));
    }
    // Contact Us
    public function contactUs(Request $request){
        $categoriesData = Category::all();
        return view('frontend.pages.contact_us',compact('categoriesData'));
    }
    // Home Interior Page
    public function homeInterior(Request $request){
        $categoriesData = Category::all();
        return view('frontend.pages.home_interior',compact('categoriesData'));
    }
    // Home Interior Details Page
    public function homeInteriorDetails(Request $request){
        $categoriesData = Category::all();
        return view('frontend.pages.home_interior_details',compact('categoriesData'));
    }
    // Privacy Policy Page
    public function privacyPolicy(Request $request){
        $categoriesData = Category::all();
        return view('frontend.pages.privacy_policy',compact('categoriesData'));
    }
    // Terms & Condition Page
    public function termsCondition(Request $request){
        $categoriesData = Category::all();
        return view('frontend.pages.terms_condition',compact('categoriesData'));
    }
    // Terms & Condition Page
    public function testimonials(Request $request){
        $categoriesData = Category::all();
        return view('frontend.pages.testimonials',compact('categoriesData'));
    }
    // Construction Page
    public function construction(Request $request){
        $categoriesData = Category::all();
        return view('frontend.pages.construction',compact('categoriesData'));
    }
    // Blog Page
    public function blogs(Request $request){
        $categoriesData = Category::all();
        return view('frontend.pages.blogs',compact('categoriesData'));
    }
    // Property Details
    public function propertyDetails($id){
        $categoriesData = Category::all();
        $singleProperty = Property::with(['author','facilities','features','reviews.author'])->find($id);
        return view('frontend.pages.home_interior_details',compact('singleProperty','categoriesData'));
    }
    // Properties
    public function properties(Request $request){
        $category_id = $request->get('category_id');
        $type = $request->get('type');
        $price_range = $request->get('price_range');
        $availablePriceRange = config('app.price_range_for_sale');
        $availablePriceRangeRent = config('app.price_range_for_rent');
        $categoriesData = Category::all();
        $properties = Property::with(['author','facilities','features']);
        if($request->property_type == 'featured'){
            $properties = $properties->where('is_featured',1);
        }
        if($category_id){
            $properties = $properties->whereHas('categories',function($query) use($request){
                $query->where('category_id',$request->category_id);
            });
        }
        if($type){
            $properties = $properties->where('type',$type);
        }
        if($price_range && $type == 'sale'){
            if(isset($availablePriceRange[$price_range])){
                [$minPrice,$maxPrice] = $availablePriceRange[$price_range];
                $properties = $properties->when($minPrice,fn($query) => $query->where('price', '>=', $minPrice))
                            ->when($maxPrice,fn($query) => $query->where('price', '<=', $maxPrice));
            }
        }
        if($price_range && $type == 'rent'){
            if(isset($availablePriceRangeRent[$price_range])){
                [$minRentPrice,$maxRentPrice] = $availablePriceRangeRent[$price_range];
                $properties = $properties->when($minRentPrice,fn($query) => $query->where('price', '>=', $minRentPrice))
                            ->when($maxRentPrice,fn($query) => $query->where('price', '<=', $maxRentPrice));
            }
        }
        $properties = $properties->orderBy('views','DESC');
        $totalFoundProperties = $properties->count();
        $exclusiveProperties = $properties->take(3)->get();
        $properties = $properties->paginate(2)->appends(['category_id' => $category_id,'type'=>$type,'price_range'=>$price_range]);

        return view('frontend.pages.properties',compact('properties','categoriesData','totalFoundProperties','exclusiveProperties'));
    }
    //Search Property by Text
    public function filterPropertyBySearch(Request $request){
        try{
            $search = $request->search;
            $propertyList =  Property::with(['author','facilities','features'])
            ->where(function ($query) use ($search){
                $query->whereHas('categories',function($query) use ($search){
                    $query->where('name','like','%'. $search . '%');
                });
                $query->orWhere('name','like','%'. $search . '%');
                $query->orWhere('description','like','%'. $search . '%');
                $query->orWhere('location','like','%'. $search . '%');
            })->orderBy('id','DESC')->get();
            $html = View::make('frontend.layout.filter_dropdown',['propertyList'=>$propertyList])->render();
            return response()->json(['status'=>($propertyList) ? 200 : 400,'msg'=>($propertyList) ? 'Action performed successfully' : 'Something went wrong','url'=>'','html'=>$html]);
        }catch(\Exception $e){
            return response()->json(['status'=>400,'msg'=>$e->getMessage(),'url'=>'']);
        }
    }
}
