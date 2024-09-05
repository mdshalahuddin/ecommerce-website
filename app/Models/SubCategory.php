<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    private static $subCategory, $image, $imageName, $directory, $imageUrl;
    protected $fillable = ['name','description','image','status'];
    public static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$imageName = Self::$image->getClientOriginalName();
        self::$directory = 'upload/sub-category-image/';
        self::$image->move(Self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
    public static function newSubCategory($request){
        self::$subCategory = new SubCategory();
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory-> description  = $request-> description ;
        self::$subCategory->image = self::getImageUrl($request);
        self::$subCategory->status = $request->status;
        self::$subCategory->save();
    }

    public static function  updateSubCategory($request,$id){
        self::$subCategory = SubCategory::find($id);
        if($request->file('image')){
            if(file_exists( self::$subCategory->image)){
                unlink(self::$subCategory->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }else{
            self::$imageUrl = self::$subCategory->image;
        }
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory-> description  = $request-> description ;
        self::$subCategory->image = self::$imageUrl;
        self::$subCategory->status = $request->status;
        self::$subCategory->save();

    }
    public static function  deleteSubCategory($id){
        self::$subCategory = SubCategory::find($id);
            if(file_exists( self::$subCategory->image)){
                unlink(self::$subCategory->image);
            }
            self::$subCategory->delete();
    }

    public  function category(){
        return $this->belongsTo(Category::class);
    }
}