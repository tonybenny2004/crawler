<?php
namespace Crawler;
use \Crawler\Model\Url\Url;
/**
 * Index File
 *
 * @url Crawler
 * @package  Core
 * @author   @tonybenny tonybenny2004@gmail.com
 * @license  NONE 
 * @version  0.1.1
 * @link      http://tonybenny.com
 */

/**
 * Class Managing Crawler
 *
 *  @url Crawler
 *  @package  Core
 *  @author   @tonybenny tonybenny2004@gmail.com
 *  @license  NONE http://tonybenny.com
 *  @version  0.1.1
 *  @link     http://tonybenny.com
 */
class Index Extends Url
	{
	  public function __construct()
			{
				 parent::__construct("http://php.net");
				 parent::getCountOfImages("http://php.net");
				 parent::setUrl("http://php.net");
			} 


	}
