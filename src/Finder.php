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

use ccruz17\ObjectToFind;

class Finder
{

    /**
     * Find a string or alias of a string into a collection
     * @param  array $find Array of ObjectToFind
     * @param  array $collection  Collection with values where to search
     * @return array       Return the same array, but with a property that indicate its state
     */
    public function find_my_strings($find, $collection, $search_in_name=false) {
        if($search_in_name) {

        }else {
            //Search each aliases of object into collection
            foreach ($find as $obj) {
                foreach ($obj->get_aliases() as $key => $val) {
                    foreach ($collection as $k => $v) {
                        if($v == $val) {
                            $obj->set_is_in(true);
                            $obj->set_found_as($v);
                            break;
                        }
                    }
                }
            }
            return $find;
        }
    }
}
