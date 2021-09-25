<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CourseGroup
 *
 * @property int $id
 * @property string $name
 * @property int $semester_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Course[] $courses
 *
 * @package App\Models
 */
class CourseGroup extends Model
{
	protected $table = 'course_groups';

	protected $casts = [
		'semester_id' => 'int'
	];

	protected $fillable = [
		'name',
		'semester_id',
        'lecturer_id',
        'course_id'
	];

	public function course()
	{
		return $this->belongsTo(Course::class);
	}

	public function lecturer()
	{
		return $this->belongsTo(Lecturer::class);
	}
}
