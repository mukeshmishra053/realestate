<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Botble\RealEstate\Models\Category;
use Botble\RealEstate\Models\City;
use Botble\RealEstate\Models\Property;
use Botble\RealEstate\Models\Project;
use Botble\RealEstate\Models\Feature;
use App\Http\Requests\ContactFormRequest;
use Botble\Blog\Models\Post;
use Botble\Location\Models\State;
use Botble\Testimonial\Models\Testimonial;
use Botble\Contact\Models\Contact;
use Botble\Page\Models\Page;
use Carbon\Carbon;
use Botble\RealEstate\Repositories\Interfaces\PropertyInterface;
use Botble\RealEstate\Repositories\Interfaces\ProjectInterface;
use Botble\Payment\Models\Payment;
use Illuminate\Support\Facades\View;
use App\Http\Services\CommonService;
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
        $commonCategoryQuery = Category::with('properties')->withCount('properties')->orderBy('properties_count', 'desc')->having('properties_count','>',0);
        $cityQuery = City::with('properties','state')->withCount('properties')->orderBy('properties_count', 'desc')->having('properties_count','>',0);
        $categoriesData = Category::take(5)->get();
        $homeInteriorCategories = $commonCategoryQuery->where('is_interior',1)->get();
        $properties = $this->propertyRepository->getRelatedProperties(1,6);
        $featuredProjects = Category::with('properties')->whereHas('properties',function($query){
            $query->where('is_featured',1)->limit(6);
        })->where('is_interior',0)->take(4)->get();
        $popularCities = $cityQuery->limit(5)->get();
        $topCategories = $commonCategoryQuery->limit(5)->get();
        $blogList = Post::with(['tags','categories'])->orderBY('id','ASC')->limit(4)->get();
        $categoryListings = $commonCategoryQuery->limit(6)->get();
        $totalPayment = Payment::get()->sum('amount');
        $highlyViewedProperties = Property::where('created_at', '>=', Carbon::now()->subYear())->orderBy('views','DESC')->take(6)->get();
        $averagePropertyPerMonth = Property::selectRaw('AVG(record_count) as average_records_per_month')
        ->fromSub(function ($query) {
            $query->selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as record_count')
                ->from((new Property)->getTable())
                ->groupByRaw('YEAR(created_at), MONTH(created_at)');
        }, 'monthly_counts')->value('average_records_per_month');
        $totalPropertiesSale = Property::where('type','sale')->count();
        $totalPropertiesRent = Property::where('type','rent')->count();
        $randomState = State::find(35);
        $citiesList = $cityQuery->where('state_id',$randomState->id)->take(10)->get();
        $amenities = Feature::take(50)->get();
        $categoriesExceptInteriors = Category::where('is_interior',0);
        $categoriesExceptHomeInteriors = $categoriesExceptInteriors->get();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        // echo "<pre>";
        // print_r(json_decode(json_encode($citiesList),true)); die;
        return view('frontend.pages.home',compact('categoriesData','singleCity','categoriesExceptHomeInteriors','amenities','citiesList','randomState','totalPropertiesSale','totalPropertiesRent','averagePropertyPerMonth','totalPayment','categoryListings','topCategories','blogList','homeInteriorCategories','popularCities','properties','featuredProjects','highlyViewedProperties','featuredProjects'));
    }
    // Contact Us
    public function contactUs(Request $request){
        $categoriesData =  Category::take(5)->get();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        // echo "<pre>";
        // print_r($singleCity); die;
        return view('frontend.pages.contact_us',compact('categoriesData','singleCity'));
    }
    // About Us
    public function aboutUs(Request $request){
        $categoriesData =  Category::take(5)->get();
        $aboutUsData = Page::where('name','about_us')->first();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        return view('frontend.pages.about_us',compact('categoriesData','aboutUsData','singleCity'));
    }
    // Home Interior Page
    public function homeInterior(Request $request){
        $categoriesData =  Category::take(5)->get();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        return view('frontend.pages.home_interior',compact('categoriesData','singleCity'));
    }
    // Home Interior Details Page
    public function homeInteriorDetails(Request $request){
        $categoriesData =  Category::take(5)->get();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        return view('frontend.pages.home_interior_details',compact('categoriesData','singleCity'));
    }
    // Privacy Policy Page
    public function privacyPolicy(Request $request){
        $categoriesData =  Category::take(5)->get();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        return view('frontend.pages.privacy_policy',compact('categoriesData','singleCity'));
    }
    // Terms & Condition Page
    public function termsCondition(Request $request){
        $categoriesData =  Category::take(5)->get();
        $terms_conditionData = Page::where('name','terms_condition')->first();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        return view('frontend.pages.terms_condition',compact('categoriesData','terms_conditionData','singleCity'));
    }
    // Terms & Condition Page
    public function testimonials(Request $request){
        $categoriesData =  Category::take(5)->get();
        $testimonials = Testimonial::all();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        //  echo "<pre>";
        // print_r($testimonials); die;
        return view('frontend.pages.testimonials',compact('categoriesData','testimonials','singleCity'));
    }
    // Construction Page
    public function construction(Request $request){
        $categoriesData =  Category::take(5)->get();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        return view('frontend.pages.construction',compact('categoriesData','singleCity'));
    }
    // Blog Page
    public function blogs(Request $request){
        $categoriesData =  Category::take(5)->get();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        return view('frontend.pages.blogs',compact('categoriesData','singleCity'));
    }
    // Property Details
    public function propertyDetails($id){
        $categoriesData =  Category::take(5)->get();
        $singleProperty = Property::with(['author','facilities','features','reviews.author'])->find($id);
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        return view('frontend.pages.home_interior_details',compact('singleProperty','categoriesData','singleCity'));
    }
    // Properties
    public function properties(Request $request){
        $filterData = $request->all();
        // echo "<pre>";
        // print_r($filterData); die;
        $categoriesData =  Category::take(5)->get();
        $cityQuery = City::with('properties','state')->withCount('properties')->orderBy('properties_count', 'desc')->having('properties_count','>',0);
        $categoriesExceptInteriors = Category::where('is_interior',0);
        $categoriesExceptHomeInteriors = $categoriesExceptInteriors->get();
        $common = new CommonService(Property::class);
        $properties = $common->filterProperties($request);
        $exclusiveProperties = $properties['exclusiveProperties'];
        $randomState = State::find(35);
        $citiesList = $cityQuery->take(50)->get();
        $filterCategories = $categoriesExceptInteriors->take(50)->get();
        $filterCategories = $categoriesExceptInteriors->take(50)->get();
        $amenities = Feature::take(50)->get();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        $projectsList = Project::with('properties')->withCount('properties')->orderBy('properties_count', 'desc')->having('properties_count','>',0)->take(50)->get();
        return view('frontend.pages.properties',compact('amenities','filterData','projectsList','singleCity','filterCategories','randomState','citiesList','categoriesExceptHomeInteriors','categoriesData','exclusiveProperties'));
    }
    //Search Property by Text
    public function filterPropertyBySearch(Request $request){
        try{
            $search = $request->search;
            $type = $request->type;
            $propertyList =  Property::with(['author','facilities','features'])
            ->where(function ($query) use ($search){
                $query->whereHas('categories',function($query) use ($search){
                    $query->where('name','like','%'. $search . '%');
                });
                $query->orWhere('name','like','%'. $search . '%');
                $query->orWhere('description','like','%'. $search . '%');
                $query->orWhere('location','like','%'. $search . '%');
            });
            if(isset($type)){
                $propertyList = $propertyList->where('type',$type);
            }
            $propertyList = $propertyList->orderBy('id','DESC')->limit(10)->select('id','name','images')->get();
            $html = View::make('frontend.layout.filter_dropdown',['propertyList'=>$propertyList,'type'=>$type])->render();
            return response()->json(['status'=>($propertyList) ? 200 : 400,'msg'=>($propertyList) ? 'Action performed successfully' : 'Something went wrong','url'=>'','html'=>$html]);
        }catch(\Exception $e){
            return response()->json(['status'=>400,'msg'=>$e->getMessage(),'url'=>'']);
        }
    }

    public function getFilterProperties(Request $request){
        try{
            $common = new CommonService(Property::class);
            $properties = $common->filterProperties($request);
            $totalFoundProperties = $properties['totalFoundProperties'];
            $properties = $properties['properties'];
            $html =  View::make('frontend.layout.property-list',compact('properties','totalFoundProperties'))->render();
            return response()->json(['status'=>($properties) ? 200 : 400,'msg'=>($properties) ? 'Action performed successfully' : 'Something went wrong','url'=>'','html'=>$html,'pagination_html' => $properties->links()->render(),'total_result_found'=>$totalFoundProperties]);
        }catch(\Exception $e){
            return response()->json(['status'=>400,'msg'=>$e->getMessage(),'url'=>'']);
        }
    }


    //Search Cities
    public function searchCities(Request $request){
        try{
            $search = $request->get('search');
            $cityList =  City::where('name','like','%'. $search . '%')->orderBy('name','ASC')->get();
            return response()->json(['status'=>($cityList) ? 200 : 400,'msg'=>($cityList) ? 'Action performed successfully' : 'Something went wrong','url'=>'','data'=>$cityList]);
        }catch(\Exception $e){
            return response()->json(['status'=>400,'msg'=>$e->getMessage(),'url'=>'']);
        }
    }
    //Search Categories
    public function searchCategories(Request $request){
        try{
            $search = $request->get('search');
            $categoryList =  Category::where('name','like','%'. $search . '%')->orderBy('name','ASC')->get();
            return response()->json(['status'=>($categoryList) ? 200 : 400,'msg'=>($categoryList) ? 'Action performed successfully' : 'Something went wrong','url'=>'','data'=>$categoryList]);
        }catch(\Exception $e){
            return response()->json(['status'=>400,'msg'=>$e->getMessage(),'url'=>'']);
        }
    }
    //Search Projects
    public function searchProjects(Request $request){
        try{
            $search = $request->get('search');
            $projectList =  Project::where('name','like','%'. $search . '%')->orderBy('name','ASC')->get();
            return response()->json(['status'=>($projectList) ? 200 : 400,'msg'=>($projectList) ? 'Action performed successfully' : 'Something went wrong','url'=>'','data'=>$projectList]);
        }catch(\Exception $e){
            return response()->json(['status'=>400,'msg'=>$e->getMessage(),'url'=>'']);
        }
    }
    //Search Projects
    public function applyFilter(Request $request){
        $filterData = $request->all();
        // echo "<pre>";
        // print_r($filterData); die;
        $categoriesData =  Category::take(5)->get();
        $categoriesExceptHomeInteriors = Category::where('is_interior',0)->get();
        $cityQuery = City::with('properties','state')->withCount('properties')->orderBy('properties_count', 'desc')->having('properties_count','>',0);
        $citiesList = $cityQuery->where('state_id',35)->take(10)->get();
        $amenities = Feature::take(50)->get();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        return view('frontend.pages.properties',compact('categoriesData','citiesList','amenities','singleCity','filterData','categoriesExceptHomeInteriors'));
    }
     // Home Interior Page
    public function projects(Request $request){
        $categoriesData =  Category::take(5)->get();
        $singleCity = City::with('properties','state')->withCount('properties')->orderBy('properties_count')->first();
        $projectsList = Project::with(['investor'])->where(['city_id' => $request->get('city_id')])->paginate(2)->appends(['city_id' => $request->get('city_id')]);
        // echo "<pre>";
        // print_r($projectsList); die;
        return view('frontend.pages.projects',compact('categoriesData','singleCity','projectsList'));
    }
     // Submit Contact Us Page
    public function saveContactUs(ContactFormRequest $request){
        try{
            $projectList =  Contact::create($request->toArray());
            return response()->json(['status'=>($projectList) ? 200 : 400,'msg'=>($projectList) ? 'Action performed successfully' : 'Something went wrong','url'=>'','data'=>$projectList]);
        }catch(\Exception $e){
            return response()->json(['status'=>400,'msg'=>$e->getMessage(),'url'=>'']);
        }
    }
}
