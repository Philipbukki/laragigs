<?php
namespace App\Models;

class Listing{

    private static $listings = [
        [
            "id"=>1,
            "title"=>"First listing",
            "poster"=>"Philip Bukki",
            "description"=> "A very incredible listing by mr fantastic"
        ],
        [
            "id"=>2,
            "title"=>"Second listing",
            "poster"=>"Vero Phil",
            "description"=> "A very incredible listing by her excellency"
        ],
        [
            "id"=>2,
            "title"=>"Second listing",
            "poster"=>"Vero Phil",
            "description"=> "A very incredible listing by her excellency"
        ],
        [
            "id"=>2,
            "title"=>"Second listing",
            "poster"=>"Vero Phil",
            "description"=> "A very incredible listing by her excellency"
        ],
        [
            "id"=>2,
            "title"=>"Second listing",
            "poster"=>"Vero Phil",
            "description"=> "A very incredible listing by her excellency"
        ]
   
        ];

    public static function all(){

        return Listing::$listings;
    }

    public static function getById($id){

        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }

        }
    }
}