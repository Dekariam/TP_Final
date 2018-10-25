<?php namespace Config;
 
class SingletonDao
{
    
    private static $instance=array();
	/* Se instancia a si mismo*/
	public static function getInstance()
	{
		
		$class=get_called_class();
		if(!isset(self::$instance[$class]))
			{
				self::$instance[$class]=new $class;
			}
		
	
		return self::$instance[$class];
	}
}
?>