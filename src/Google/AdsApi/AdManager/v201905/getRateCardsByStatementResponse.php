<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getRateCardsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201905\RateCardPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201905\RateCardPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\RateCardPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\RateCardPage $rval
     * @return \Google\AdsApi\AdManager\v201905\getRateCardsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
