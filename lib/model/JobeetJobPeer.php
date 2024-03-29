<?php


/**
 * Skeleton subclass for performing query and update operations on the 'jobeet_job' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Tue Feb 21 20:29:22 2012
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class JobeetJobPeer extends BaseJobeetJobPeer {

static public function getActiveJobs()
  {
    $criteria = new Criteria();
    $criteria->add(self::EXPIRES_AT, time(), Criteria::GREATER_THAN);
 
    return self::doSelect($criteria);
  }


} // JobeetJobPeer
