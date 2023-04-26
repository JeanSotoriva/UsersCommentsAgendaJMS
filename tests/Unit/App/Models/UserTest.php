<?php

namespace Tests\Unit\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class UserTest extends TestCase
{

    protected function model(): Model
    {
        return new User();
    }

    public function testTraits()
    {
        $traits = array_keys(class_uses($this->model()));

        $expectedTraits = [
            HasApiTokens::class,
            HasFactory::class,
            Notifiable::class,
        ];

        $this->assertEquals($expectedTraits, $traits);
    }

    public function testFillable()
    {
        $fillable = $this->model()->getFillable();

        $expectedFillable = [
            'name',
            'email',
            'password',
        ];
        $this->assertEquals($expectedFillable, $fillable);
        
    }

    public function testIncrementIsFalse()
    {
        $incrementing = $this->model()->incrementing;
        $this->assertFalse($incrementing);
    }

    public function testHasCasts(){
        $espectedCasts = [
            'email_verified_at' => 'datetime',
            'id' => 'string',
        ];
        $casts = $this->model()->getCasts();
        assertEquals($espectedCasts, $casts);
    }

}