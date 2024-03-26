<?php
/** op-module-testcase:/Testcase.class.php
 *
 * @created   2019-12-13
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP\MODULE;

/** use
 *
 */
use OP\IF_UNIT;
use OP\OP_UNIT;

/** Testcase
 *
 * @created   2019-12-13
 * @version   1.0
 * @package   op-module-testcase
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Testcase implements IF_UNIT
{
	/** use trait
	 *
	 */
	use OP_UNIT;

	/** Use Count method.
	 *
	 * @created    2020-10-09
	 * @var        integer
	 */
	private $_count;

	/** constructor
	 *
	 * @created    2020-10-09
	 */
	function __construct()
	{
		$this->_count = 0;
	}

	/** Count is used to check if same instance.
	 *
	 * @created    2020-10-09
	 * @return     integer
	 */
	function Count():int
	{
		$this->_count++;
		return $this->_count;
	}
}
