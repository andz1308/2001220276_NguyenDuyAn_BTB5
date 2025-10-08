<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content'];

    // Tạm mock findOrFail() nếu chưa có DB:
    public static function findOrFail($id)
    {
        $mockData = [
            1 => new self(['id' => 1, 'title' => 'Demo 1', 'content' => 'Nội dung bài 1']),
            2 => new self(['id' => 2, 'title' => 'Demo 2', 'content' => 'Nội dung bài 2']),
        ];

        if (!isset($mockData[$id])) {
            abort(404, "Article not found");
        }

        return $mockData[$id];
    }
}
