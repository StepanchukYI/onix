<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjectImage extends Model
{
	#region Properties

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [ 'object_id', 'src', 'alt', 'sort_id', 'created_at', 'updated_at' ];

	#endregion


	#region Relationships

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function object()
	{
		return $this->belongsTo( Object::class );
	}

	#endregion
}
