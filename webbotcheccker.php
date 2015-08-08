<?php 

/**
 * @ WebBotChecker
 * Author : tisuchi
 * Email : tisuchi@gmail.com
 * URL : http://www.tisuchi.com
 *
 * ----------------------------------------------------------
 * This class will identify whether the current user is real 
 * human or bot. 
 */
class WebBotChecker {
	
	protected $botArrayCheck;

	function __construct() {
	
		//array to set the bot name and for further checking. If you want, then you can manully add more bot name. 
		$botArrayName = array (
	    	 'googlebot'        => '/Googlebot/',
			 'msnbot'           => '/MSNBot/',
			 'slurp'            => '/Inktomi/',
			 'yahoo'            => '/Yahoo/',
			 'askjeeves'        => '/AskJeeves/',
			 'fastcrawler'		=> '/FastCrawler/',
			 'infoseek'         => '/InfoSeek/',
			 'lycos'            => '/Lycos/',	    	 
	    	 'yandex'			=> '/YandexBot/',	    	 
	    	 'geohasher'		=> '/GeoHasher/',	    	 
	    	 'gigablast'		=> '/Gigabot/',
	    	 'baidu'			=> '/Baiduspider/',
	    	 'spinn3r'			=> '/Spinn3r/'	
		);
			
		
		/**
		 * Check whether the requester is bot or not
		 */
		if( true == isset( $_SERVER['HTTP_USER_AGENT'] )) {
	
			$this->botArrayCheck = preg_filter( $botArrayName, array_fill( 1, count( $botArrayName ), '$0' ), array( trim( $_SERVER['HTTP_USER_AGENT'] )));
		}
	}



	public function getMyBot() {
	
		/**
		 * return if the request can identified the bot or not
		 */
		return ( true == is_array( $this->botArrayCheck ) && 0 < count( $this->botArrayCheck )) ? $this->botArrayCheck[0] : 'Sorry! Its not a bot. ';		
	}
	
	
	/**
	 * [isThatBot description]
	 * @return boolean [This function will will increment the record of user if the user is not a bot.]
	 */
	function isThatBot() {
		
		//checking again if the bot is requested.
		return ( true == is_array( $this->botArrayCheck ) && 0 < count( $this->botArrayCheck )) ? 1 : 0;				
	}
}




?>
