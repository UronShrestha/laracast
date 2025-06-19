<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

use function PHPUnit\Framework\returnValueMap;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'salary',
    ];
    // public static function all(): array{

    // }

    // public static function find(int $id): array
    // {
    //     $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
    //     if (!$job) {
    //         abort(404);
    //     }
    //     return $job;
    // }
}

// class Job
// {
//     public static function all(): array
//     {
//         return [
//             [
//                 'id' => 1,
//                 'title' => 'Teacher',
//                 'salary' => '$10000'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Chef',
//                 'salary' => '$5000'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Army',
//                 'salary' => '$7000'
//             ]
//         ];
//     }

//     public static function find(int $id): array
//     {
//         $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
//         if (!$job) {
//             abort(404);
//         }
//         return $job;
//     }
// }
