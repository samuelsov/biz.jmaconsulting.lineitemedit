<?php

/**
 * Collection of upgrade steps.
 */
class CRM_Lineitemedit_Upgrader extends CRM_Lineitemedit_Upgrader_Base {

  /**
  * Example: Run an external SQL script when the module is installed.
  *
  */
 public function install() {
   CRM_Lineitemedit_Util::generatePriceField();
 }

 public function uninstall() {
   CRM_Lineitemedit_Util::disableEnablePriceField();
 }

 public function disable() {
   CRM_Lineitemedit_Util::disableEnablePriceField();
 }

 public function enable() {
   CRM_Lineitemedit_Util::disableEnablePriceField(TRUE);
 }

  /**
   * Example: Run a couple simple queries.
   *
   * @return TRUE on success
   * @throws Exception
   *
   */
  public function upgrade_2000() {
    $this->ctx->log->info('Applying update 2000');
    CRM_Lineitemedit_Util::generatePriceField();
    return TRUE;
  }

}
