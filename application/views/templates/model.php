&lt;?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use \Illuminate\Database\Eloquent\Model as Eloquent;

class <?php echo $m_name ?> extends Eloquent {

	protected $table = "<?php echo $o_name?>"; 

	public static function view_item($slug) {
		$query = <?php echo $m_name ?>::where('slug', '=', $slug)->get();
		return $query;   
	}   

	public static function save_item($slug) {
		$query = <?php echo $m_name ?>::where('slug', '=', $slug)->save();
		return $query;   
	}   

	public static function trash_item($slug) {
		$query = <?php echo $m_name ?>::where('slug', '=', $slug)->save();
		return $query;   
	}   

	public static function activate_item($slug) {
		$query = <?php echo $m_name ?>::where('slug', '=', $slug)->save();
		return $query;   
	}   

	public static function empty_trash() {
		$query = <?php echo $m_name ?>::where('slug', '=', $slug)->save();
		return $query;   
	}   


}


