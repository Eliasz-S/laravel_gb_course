<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    public function getNews()
    {
        return \DB::table($this->table)
            ->join("categories", "$this->table.category_id", "=", "categories.id")
            ->select([
                "$this->table.id", 
                "$this->table.category_id", 
                "$this->table.title", 
                "$this->table.description", 
                "$this->table.created_at", 
                "categories.title as categoryTitle"
            ])
            ->orderBy("$this->table.id")
            ->get();
    }

    public function getNewsById(int $id)
    {
        return \DB::table($this->table)
            ->join("categories", "$this->table.category_id", "=", "categories.id")
            ->select([
                "$this->table.id", 
                "$this->table.category_id", 
                "$this->table.title", 
                "$this->table.description", 
                "$this->table.created_at", 
                "categories.id as categoryId",
                "categories.title as categoryTitle"
            ])
            ->where("$this->table.id", $id)
            ->first();
    }
}
