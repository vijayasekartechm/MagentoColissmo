<?php
/**
 * Colissimo Shipping Module
 *
 * @author    Magentix
 * @copyright Copyright © 2017 Magentix. All rights reserved.
 * @license   https://www.magentix.fr/en/licence.html Magentix Software Licence
 * @link      https://colissimo.magentix.fr/
 */
namespace Colissimo\Shipping\Model\Config\Source\Country;

use Colissimo\Shipping\Model\Config\Source\Country;

/**
 * Class Homecl
 */
class Homecl extends Country
{

    /**
     * Countries setter
     */
    public function setCountries()
    {
        $active = $this->shippingHelper->getConfig('homecl/country');

        $this->countries = array_keys($active);
    }
}