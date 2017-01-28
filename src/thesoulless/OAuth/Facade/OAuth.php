<?php namespace thesoulless\OAuth\Facade;

/**
 * @author     Dariusz Prząda <thesoulless@gmail.com>
 * @copyright  Copyright (c) 2013
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */

use Illuminate\Support\Facades\Facade;

class OAuth extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'oauth'; }
}