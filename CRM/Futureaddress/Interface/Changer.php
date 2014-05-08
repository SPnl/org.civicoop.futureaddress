<?php

/* 
 * Interface for an address changer
 */

interface CRM_Futureaddress_Interface_Changer {
  
  /**
   * Find address which should be changed
   * 
   */
  public function checkAndChange();
  
  public function getChangeCount();
  
  public function getFailureCount();
  
}

