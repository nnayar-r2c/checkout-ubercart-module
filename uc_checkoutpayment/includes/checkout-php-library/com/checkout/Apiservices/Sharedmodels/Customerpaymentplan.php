<?php

/**
 * Checkout.com Apiservices\Sharedmodels\Customerpaymentplan.
 *
 * PHP Version 5.6
 *
 * @category Api Services
 * @package Checkoutapi
 * @license https://checkout.com/terms/ MIT License
 * @link https://www.checkout.com/
 */

namespace com\checkout\Apiservices\Sharedmodels;

/**
 * Class Charge Back.
 *
 * @category Api Services
 * @version Release: @package_version@
 */
class Customerpaymentplan extends \com\checkout\Apiservices\Sharedmodels\Basehttp {

  protected $object;
  protected $planId;
  protected $name;
  protected $planTrackId;
  protected $autoCapTime;
  protected $currency;
  protected $value;
  protected $cycle;
  protected $recurringCount;
  protected $status;
  protected $customerPlanId;
  protected $recurringCountLeft;
  protected $totalCollectedValue;
  protected $totalCollectedCount;
  protected $startDate;
  protected $previousRecurringDate;
  protected $nextRecurringDate;

  /**
   * Get an object.
   *
   * @return mixed
   *   The object.
   */
  public function getObject() {
    return $this->object;
  }

  /**
   * Get the Payment plan ID.
   *
   * It is generated by Checkout.com and
   * prefixed with rp_ for identical recurring plans.
   *
   * @return string
   *   The plan Id.
   */
  public function getPlanId() {
    return $this->planId;
  }

  /**
   * Get the name of the paymentPlan.
   *
   * The name as displayed in The Hub and attached to the customer.
   *
   * @return string
   *   The name.
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Get the unique identifier for the recurring plan set by the Merchant.
   *
   * @return string
   *   The plan track id.
   */
  public function getPlanTrackId() {
    return $this->planTrackId;
  }

  /**
   * Get the delayed capture time in hours.
   *
   * @return mixed
   *   The auto cap time.
   */
  public function getAutoCapTime() {
    return $this->autoCapTime;
  }

  /**
   * Get the Three-letter ISO currency code.
   *
   * This code is representing the currency in
   * which the recurring charge will be made.
   *
   * @return mixed
   *   The currency.
   */
  public function getCurrency() {
    return $this->currency;
  }

  /**
   * Get the value of the transaction.
   *
   * A non-zero positive integer (i.e. decimal figures not allowed).
   * For most currencies, value is divided into 100 units
   * (e.g. "value = 100" is equivalent to 1 US Dollar).
   *
   * @return mixed
   *   The value.
   */
  public function getValue() {
    return $this->value;
  }

  /**
   * Get the elapsed time in between the charge and the first transaction.
   *
   * The time in between the charge and the first transaction of the recurring
   * plan. Maximum of 4 chars.
   *
   * Usage format:
   *   Xd (X: 1 - 730 days) e.g. 7d
   *   Xw (X: 1 - 104 weeks) e.g. 2w
   *   Xm (X: 1 - 24 months) e.g. 1m
   *   Xy (X: 1 - 2 years) e.g. 1y
   *
   * @return mixed
   *   The value.
   */
  public function getCycle() {
    return $this->cycle;
  }

  /**
   * Get the number of recurring transactions included in the Payment Plan.
   *
   * Note: recurringCount does not include the initial payment.
   *
   * @return mixed
   *   The recurringCount.
   */
  public function getRecurringCount() {
    return $this->recurringCount;
  }

  /**
   * Get the status of the recurring payment plan.
   *
   * It is used for the endpoint that will allow to monitor the health
   * of a recurring plan. Possible returned values are:
   *   0, "Failed Initial" : The transaction in the main charge request failed
   *     or was declined.
   *   1, "Active" : Active recurring payment plan, response if
   *     the transaction / payment plan is successful.
   *   2, "Cancelled" : Cancelled
   *   3, "In Arrears" : The recurring transactions failed.
   *   4, "Suspended" : Merchant paused the service. Or If retries also failed.
   *   5, "Completed" : Recurring payment plan completed.
   *
   * @return mixed
   *   The status.
   */
  public function getStatus() {
    return $this->status;
  }

  /**
   * Get the ID that uniquely identifies the customer payment plan.
   *
   * Note: ID prefixed with cp_ .
   *
   * @return mixed
   *   The customerPlanId.
   */
  public function getCustomerPlanId() {
    return $this->customerPlanId;
  }

  /**
   * Get the number of transactions remaining in the recurring plan.
   *
   * @return mixed
   *   The recurringCountLeft.
   */
  public function getRecurringCountLeft() {
    return $this->recurringCountLeft;
  }

  /**
   * Get the total value of transactions that will be applied against the card.
   *
   * @return mixed
   *   The totalCollectedValue.
   */
  public function getTotalCollectedValue() {
    return $this->totalCollectedValue;
  }

  /**
   * Get the total number of transactions that will be applied against the card.
   *
   * @return mixed
   *   The totalCollectedCount.
   */
  public function getTotalCollectedCount() {
    return $this->totalCollectedCount;
  }

  /**
   * Get the forecasted timestamp of the first transaction.
   *
   * Forecasted timestamp of the first transaction generated
   * by the recurring plan in "YYYY-MM-DD" format.
   *
   * @return mixed
   *   The startDate.
   */
  public function getStartDate() {
    return $this->startDate;
  }

  /**
   * Get the date of last recurring transaction.
   *
   * Date of last recurring transaction in "YYYY-MM-DD" format.
   *
   * @return mixed
   *   The previousRecurringDate.
   */
  public function getPreviousRecurringDate() {
    return $this->previousRecurringDate;
  }

  /**
   * Get the date of next recurring transaction.
   *
   * Date of next recurring transaction in "YYYY-MM-DD" format. This is
   * especially useful when the merchant has applied a double recurring plan.
   *
   * @return mixed
   *   The nextRecurringDate.
   */
  public function getNextRecurringDate() {
    return $this->nextRecurringDate;
  }

  /**
   * Set an object.
   *
   * @param int $object
   *   The object.
   */
  public function setObject($object) {
    $this->object = $object;
  }

  /**
   * Set the Payment plan ID.
   *
   * It is generated by Checkout.com and
   * prefixed with rp_ for identical recurring plans.
   *
   * @param string $planId
   *   The plan Id.
   */
  public function setPlanId($planId) {
    $this->planId = $planId;
  }

  /**
   * Set the name of the paymentPlan.
   *
   * The name as displayed in The Hub and attached to the customer.
   *
   * @param string $name
   *   The name.
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * Set the unique identifier for the recurring plan set by the Merchant.
   *
   * @param string $planTrackId
   *   The plan track id.
   */
  public function setPlanTrackId($planTrackId) {
    $this->planTrackId = $planTrackId;
  }

  /**
   * Set the delayed capture time in hours.
   *
   * @param mixed $autoCapTime
   *   The auto cap time.
   */
  public function setAutoCapTime($autoCapTime) {
    $this->autoCapTime = $autoCapTime;
  }

  /**
   * Set the Three-letter ISO currency code.
   *
   * This code is representing the currency in
   * which the recurring charge will be made.
   *
   * @param mixed $currency
   *   The currency.
   */
  public function setCurrency($currency) {
    $this->currency = $currency;
  }

  /**
   * Set the value of the transaction.
   *
   * A non-zero positive integer (i.e. decimal figures not allowed).
   * For most currencies, value is divided into 100 units
   * (e.g. "value = 100" is equivalent to 1 US Dollar).
   *
   * @param mixed $value
   *   The value.
   */
  public function setValue($value) {
    $this->value = $value;
  }

  /**
   * Set the elapsed time in between the charge and the first transaction.
   *
   * The time in between the charge and the first transaction of the recurring
   * plan. Maximum of 4 chars.
   *
   * Usage format:
   *   Xd (X: 1 - 730 days) e.g. 7d
   *   Xw (X: 1 - 104 weeks) e.g. 2w
   *   Xm (X: 1 - 24 months) e.g. 1m
   *   Xy (X: 1 - 2 years) e.g. 1y
   *
   * @param mixed $cycle
   *   The value.
   */
  public function setCycle($cycle) {
    $this->cycle = $cycle;
  }

  /**
   * Set the number of recurring transactions included in the Payment Plan.
   *
   * Note: recurringCount does not include the initial payment.
   *
   * @param mixed $recurringCount
   *   The recurringCount.
   */
  public function setRecurringCount($recurringCount) {
    $this->recurringCount = $recurringCount;
  }

  /**
   * Set the status of the recurring payment plan.
   *
   * It is used for the endpoint that will allow to monitor the health
   * of a recurring plan. Possible returned values are:
   *   0, "Failed Initial" : The transaction in the main charge request failed
   *     or was declined.
   *   1, "Active" : Active recurring payment plan, response if
   *     the transaction / payment plan is successful.
   *   2, "Cancelled" : Cancelled
   *   3, "In Arrears" : The recurring transactions failed.
   *   4, "Suspended" : Merchant paused the service. Or If retries also failed.
   *   5, "Completed" : Recurring payment plan completed.
   *
   * @param mixed $status
   *   The status.
   */
  public function setStatus($status) {
    $this->status = $status;
  }

  /**
   * Set the ID that uniquely identifies the customer payment plan.
   *
   * Note: ID prefixed with cp_ .
   *
   * @param mixed $customerPlanId
   *   The customerPlanId.
   */
  public function setCustomerPlanId($customerPlanId) {
    $this->customerPlanId = $customerPlanId;
  }

  /**
   * Set the number of transactions remaining in the recurring plan.
   *
   * @param mixed $recurringCountLeft
   *   The recurringCountLeft.
   */
  public function setRecurringCountLeft($recurringCountLeft) {
    $this->recurringCountLeft = $recurringCountLeft;
  }

  /**
   * Set the total value of transactions that will be applied against the card.
   *
   * @param mixed $totalCollectedValue
   *   The totalCollectedValue.
   */
  public function setTotalCollectedValue($totalCollectedValue) {
    $this->totalCollectedValue = $totalCollectedValue;
  }

  /**
   * Set the total number of transactions that will be applied against the card.
   *
   * @param mixed $setTotalCollectedCount
   *   The totalCollectedCount.
   */
  public function setTotalCollectedCount($totalCollectedCount) {
    $this->totalCollectedCount = $totalCollectedCount;
  }

  /**
   * Set the forecasted timestamp of the first transaction.
   *
   * Forecasted timestamp of the first transaction generated
   * by the recurring plan in "YYYY-MM-DD" format.
   *
   * @param mixed $startDate
   *   The startDate.
   */
  public function setStartDate($startDate) {
    $this->startDate = $startDate;
  }

  /**
   * Set the date of last recurring transaction.
   *
   * Date of last recurring transaction in "YYYY-MM-DD" format.
   *
   * @param mixed $previousRecurringDate
   *   The previousRecurringDate.
   */
  public function setPreviousRecurringDate($previousRecurringDate) {
    $this->previousRecurringDate = $previousRecurringDate;
  }

  /**
   * Set the date of next recurring transaction.
   *
   * Date of next recurring transaction in "YYYY-MM-DD" format. This is
   * especially useful when the merchant has applied a double recurring plan.
   *
   * @param mixed $nextRecurringDate
   *   The nextRecurringDate.
   */
  public function setNextRecurringDate($nextRecurringDate) {
    $this->nextRecurringDate = $nextRecurringDate;
  }

  /**
   * Set the response code.
   *
   * A responseCode is a five-digit numeric code that indicates the status
   * of the request. Additional information on the request status may be
   * found in the responseMessage, responseAdvancedInfo and status fields.
   *
   * @param mixed $responseCode
   *   The nextRecurringDate.
   */
  public function setResponseCode($responseCode) {
    $this->responseCode = $responseCode;
  }

}
