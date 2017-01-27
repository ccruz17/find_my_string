<?php
/**
 * Class Csv_reader, you can read and excel file
 *
 * This class can extract information from a target or multiple targets and each of them with one or more values
 *
 * @category   CCRUZ Find my string
 * @package    ccruz17/find_my_string
 * @author     Christian Cruz Garrido <ccruz.ga17@gmail.com>
 * @copyright  2016-2017 CCRUZ
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt  GNU GENERAL PUBLIC LICENSE V3
 * @link       https://github.com/ccruz17/find_my_string
 */

namespace ccruz17;

class ObjectToFind
{
    /**
     * Name of Object
     * @var string
     */
    private $name = '';

    /**
     * Aliases
     * @var array
     */
    private $aliases = array();

    /**
     * Is in
     * @var boolean
     */
    private $is_in = false;

    /**
     * Found as, in this field is saved the value found
     * @var string
     */
    private $found_as = '';

    function __construct($name, $aliases){
        $this->name = $name;
        $this->aliases = $aliases;
        $this->is_in = false;
        $this->found_as = '';
    }

    /**
     * Get the value of Name of Object
     *
     * @return string
     */
    public function get_name(){
        return $this->name;
    }

    /**
     * Set the value of Name of Object
     *
     * @param string name
     */
    public function set_name($name){
        $this->name = $name;
    }

    /**
     * Get the value of Aliases
     *
     * @return array
     */
    public function get_aliases(){
        return $this->aliases;
    }

    /**
     * Set the value of Aliases
     *
     * @param array aliases
     */
    public function set_aliases($aliases){
        $this->aliases = $aliases;
    }


    /**
    * Get the value of Is in
    *
    * @return boolean
    */
    public function get_is_in(){
        return $this->is_in;
    }

    /**
     * Set the value of Is in
     *
     * @param boolean is_in
     */
    public function set_is_in($is_in){
        $this->is_in = $is_in;
    }

   /**
    * Get the value of Found as, in this field is saved the value found
    *
    * @return string
    */
    public function get_found_as(){
        return $this->found_as;
    }

    /**
     * Set the value of Found as, in this field is saved the value found
     *
     * @param string found_as
     */
    public function set_found_as($found_as){
        $this->found_as = $found_as;
    }
}
