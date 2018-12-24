<?php
namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent
{
	const CREATED_AT = 'created_on_timestamp';
	const UPDATED_AT = 'last_updated_on_timestamp';

}

