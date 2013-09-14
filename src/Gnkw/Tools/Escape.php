<?php
namespace Gnkw\Tools;
/*
* Copyright (c) 2012 GNKW
*
* This file is part of GNKW Tools.
*
* GNKW Tools is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* GNKW Tools is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
*
* You should have received a copy of the GNU Affero General Public License
* along with GNKW Tools.  If not, see <http://www.gnu.org/licenses/>.
*/


/**
 * Escape class
 * @author Anthony <anthony.rey@mailoo.org>
 * @since 14/09/2013
 */
class Escape
{
	/**
	 * Static escape, private constructor
	 */
	private function __construct(){}
	
	/**
	* Escape quotes
	* @param string $string String to escape
	* @param string $for To know types of quotes escaped (all|simple|double)
	*/
	public static function quotes($string, $for = 'all')
	{
		switch($for)
		{
			case 'simple' :
				return preg_replace('#\'#', '\\\'', $string);
			case 'double' :
				return preg_replace('#"#', '\\"', $string);
			default:
				return preg_replace('#\'|"#', '\\\\'.'$0', $string);
		}
	}
}
