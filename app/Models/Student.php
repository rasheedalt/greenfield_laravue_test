<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Course[] $courses
 *
 * @package App\Models
 */
class Student extends Model
{
	protected $table = 'students';

	protected $fillable = [
		'first_name',
		'last_name',
		'email'
	];

	public function courses()
	{
		return $this->belongsToMany(Course::class, 'student_courses');
	}
}
