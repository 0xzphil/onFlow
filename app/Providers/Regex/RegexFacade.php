<?php 
namespace App\Providers\Regex;

use Illuminate\Support\Facades\Facade;

class RegexFacade extends Facade{
	protected static function getFacadeAccessor(){
		return 'regexClass';
	}
}
?>