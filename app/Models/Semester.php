<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Semester
 *
 * @property int $id
 * @property string $name
 * @property string $number
 * @property Carbon $year
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Semester extends Model
{
	protected $table = 'semesters';

	protected $dates = [
		'year',
		'start_date',
		'end_date'
	];

	protected $fillable = [
		'name',
		'number',
		'year',
		'start_date',
		'end_date'
	];

    public function course()
	{
		return $this->hasMany(Course::class);
	}

    public function course_groups()
	{
		return $this->hasMany(CourseGroup::class);
	}

}
