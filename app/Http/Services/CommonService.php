<?php
namespace App\Http\Services;
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
            $properties = $properties->whereIn('number_bedroom',$number_of_bedrooms);
        }
        $properties = $properties->orderBy('views','DESC');
        if($order){
            $properties = $properties->orderBy('id',$order);
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
 }


?>
