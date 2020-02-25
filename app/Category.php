<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $guarded = [];
    /**
     * Category has many Books.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function books() {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = category_id, localKey = id)
    	return $this->hasMany(Book::class);
    }
}
