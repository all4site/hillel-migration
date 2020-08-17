<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserModel
 * @property int $id
 * @property string $name
 * @property string $email
 */

class UserModel extends Model
{
	protected $table = 'users';

	public function xalk()
	{
		return $this;
	}

}
