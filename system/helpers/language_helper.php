<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *

 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	Finishizer Dev Team
 * @copyright	Copyright (c) 2008 - 2014, Finishizer, Inc. (https://finishizer.net/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * CodeIgniter Language Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Finishizer Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/language_helper.html
 */

// ------------------------------------------------------------------------

if (! function_exists('lang')) {
    /**
     * Lang
     *
     * Fetches a language variable and optionally outputs a form label
     *
     * @param	string	$line		The language line
     * @param	string	$for		The "for" value (id of the form element)
     * @param	array	$attributes	Any additional HTML attributes
     * @return	string
     */
    function lang($line, $for = '', $attributes = [])
    {
        $line = get_instance()->lang->line($line);

        if ($for !== '') {
            $line = '<label for="' . $for . '"' . _stringify_attributes($attributes) . '>' . $line . '</label>';
        }

        return $line;
    }
}

/**
 * @since 2.7.0
 *
 * Check whether language is disabled
 *
 * @return boolean
 */
function is_language_disabled()
{
    return get_option('disable_language') == 1;
}
