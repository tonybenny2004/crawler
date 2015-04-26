<?php
/**
 * File Containing the Curl Class
 *
 * @url Crawler
 * @package  Core
 * @author   @tonybenny tonybenny2004@gmail.com
 * @license  NONE 
 * @version  0.1.1
 * @link     http://tonybenny.com
 */
namespace Crawler\Model\Url;

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

abstract class Url
{ 

    /**
     * Curl Variable
     * @var string
     */
    public $curl = null;

    /**
     * url 
     * @var string
     */
    public $url = null;

    /**
     * Constructor of the Class
     * 
     * @param string $url Url of the application
     *
     * @access public
     * @return  void
     */
    public function __construct($url)
    {
        if (!extension_loaded('curl')) {
        throw new \ErrorException('cURL library is not loaded');
        }
        $regex= '|<a.*?href="(.*?)"|';
        preg_match_all($regex,$this->setCurl($url),$parts);
        $this->link=$parts[1];
        echo "URL:\n";
        foreach($this->link as $linkn){
                print  $linkn."\n";
            }


    }

    /**
     * string name of the Url
     *
     * @access public
     * @return string name of the Url
     */
    public function getUrl()
    {
        return $this->url;
    }

     /**
     * Set name of the Url
     *
     * @access public
     * @return Set name of the Url
     */
    public function setUrl($url)
    {
         $this->url = $url;
    }

    /**
     * Initialize  the Curl  
     * 
     * @param Initialize the Curl  for the url
     *
     * @access public
     * @return  void
     */
     public function setCurl($url)
     {

        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $url);    // The url to get links from
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true); // We want to get the respone
        $result = curl_exec($this->curl);
        curl_close($this->curl);  
        return $result;
     }
    /**
     * Get the count of Images
     *
     * @access public
     * @return count of Images
     */
    public function getCountOfImages($url)
    {
      $match = preg_match_all("#<img.+>#U", $this->setCurl($url), $matches);
      echo "Count of Images:\n";
      echo count($matches[0])."\n";
    }
      


}
