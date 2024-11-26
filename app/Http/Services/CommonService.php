<?php
namespace App\Http\Services;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Config;
class CommonService {

    public $model;
    public function __construct($model = ''){
        $this->model = $model;
    }
    // Filter Properties

    public function filterProperties(Object $request){
        $category_id = $request->category_id;
        $type = $request->type;
        $order = $request->order;
        $price_range = $request->price_range;
        $categories_filter = $request->categories_filter;
        $cities_filter = $request->cities_filter;
        $project_filter = $request->project_filter;
        $number_of_bedrooms = $request->number_of_bedrooms;
        $number_of_bathrooms = $request->number_of_bathrooms;
        $property_age = $request->property_age;
        $availablePriceRange = config('app.price_range_for_sale');
        $availablePriceRangeRent = config('app.price_range_for_rent');
        $propertyAgeRange = config('app.age_range_for_property');
        $properties = $this->model::with(['author','facilities','features']);
        if($request->property_type == 'featured'){
            $properties = $properties->where('is_featured',1);
        }
        if($request->city_id){
            $properties = $properties->where('city_id',$request->city_id);
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
        if(isset($categories_filter)){
            $properties = $properties->whereHas('categories',function($query) use($request,$categories_filter){
                $query->whereIn('category_id',$categories_filter);
            });
        }
        if($cities_filter){
            $properties = $properties->whereIn('city_id',$cities_filter);
        }
        if($project_filter){
            $properties = $properties->whereIn('project_id',$cities_filter);
        }
        if($number_of_bedrooms){
            if(is_array($number_of_bedrooms)){
                $properties = $properties->whereIn('number_bedroom',$number_of_bedrooms);
            }else{
                $properties = $properties->where('number_bedroom',$number_of_bedrooms);
            }
        }
        if($number_of_bathrooms){
            if(is_array($number_of_bathrooms)){
                $properties = $properties->whereIn('number_bathroom',$number_of_bathrooms);
            }else{
                $properties = $properties->where('number_bathroom',$number_of_bathrooms);
            }
        }
        $properties = $properties->orderBy('views','DESC');
        if($order){
            $properties = $properties->orderBy('id',$order);
        }
        if ($request->filled('city_id')) {
            $properties = $properties->where('city_id', $request->city_id);
        }

        if ($request->filled('min_area')) {
            $properties = $properties->where('square', '>=', $request->min_area);
        }

        if ($request->filled('max_area')) {
            $properties = $properties->where('square', '<=', $request->max_area);
        }

        if ($request->filled('min_price')) {
            $properties = $properties->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $properties = $properties->where('price', '<=', $request->max_price);
        }
        $totalFoundProperties = $properties->count();
        $exclusiveProperties = $properties->take(3)->get();
        $properties = $properties->paginate(2)->appends(['category_id' => $category_id,'type'=>$type,'price_range'=>$price_range]);
        return [
            'totalFoundProperties' => $totalFoundProperties,
            'exclusiveProperties' => $exclusiveProperties,
            'properties' => $properties,
        ];
    }


    public function login(Object $request){
        if (Auth::guard('web')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return true;
        }else{
            return false;
        }
    }


    public function signup(Object $request){
        return User::create($request->toArray());
    }
 }


?>
