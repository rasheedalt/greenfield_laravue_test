<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lecturer
 *
 * @property int $id
 * @property string $title
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Lecturer extends Model
{
	protected $table = 'lecturers';

	protected $fillable = [
		'title',
		'first_name',
		'last_name',
		'email'
	];

    public function course_groups()
	{
		return $this->hasMany(CourseGroup::class);
	}
}
