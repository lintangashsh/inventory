<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'detail',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'id';
    }

    /**
     * Scope a query to only include products with specific name.
     */
    public function scopeByName($query, string $name)
    {
        return $query->where('name', 'like', '%' . $name . '%');
    }

    /**
     * Scope a query to order products by latest.
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    /**
     * Get the product's formatted created date.
     */
    public function getFormattedCreatedAtAttribute(): string
    {
        return $this->created_at->format('d M Y H:i');
    }

    /**
     * Get the product's formatted updated date.
     */
    public function getFormattedUpdatedAtAttribute(): string
    {
        return $this->updated_at->format('d M Y H:i');
    }

    /**
     * Get the product's short detail (first 100 characters).
     */
    public function getShortDetailAttribute(): string
    {
        if (empty($this->detail)) {
            return '';
        }

        return strlen($this->detail) > 100
            ? substr($this->detail, 0, 100) . '...'
            : $this->detail;
    }
}