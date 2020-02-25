<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	protected $guarded = [];
    /**
     * Book belongs to Category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() {
    	// belongsTo(RelatedModel, foreignKey = category_id, keyOnRelatedModel = id)
    	return $this->belongsTo(Category::class);
    }
}
