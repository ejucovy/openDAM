<?php


/**
 * Skeleton subclass for representing a row from the 'usage_distribution' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * jeu. 26 janv. 2012 15:28:07 CET
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class UsageDistribution extends BaseUsageDistribution
{
	/*________________________________________________________________________________________________________________*/
	public function __toString()
	{
		return $this->getTitle();
	}
}
