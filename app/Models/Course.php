<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $semester_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|CourseCourseGroup[] $course_course_groups
 * @property Collection|Student[] $students
 *
 * @package App\Models
 */
class Course extends Model
{
	protected $table = 'courses';

	protected $casts = [
		'semester_id' => 'int'
	];

	protected $fillable = [
		'name',
		'code',
		'semester_id'
	];

	public function course_group()
	{
		return $this->belongsTo(CourseGroup::class);
	}

	public function students()
	{
		return $this->belongsToMany(Student::class, 'student_courses')
					->withPivot('id')
					->withTimestamps();
	}
}
