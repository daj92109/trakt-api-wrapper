<?php
/**
 * Created by PhpStorm.
 * User: bwubs
 * Date: 26/02/15
 * Time: 00:48
 */

namespace Wubs\Trakt\Request\Calendars;


use Wubs\Trakt\Request\AbstractRequest;
use Wubs\Trakt\Request\Parameters\Days;
use Wubs\Trakt\Request\Parameters\StartDate;
use Wubs\Trakt\Request\RequestType;
use Wubs\Trakt\Request\TimePeriod;

class Movies extends AbstractRequest
{
    use TimePeriod;

    public function __construct(StartDate $startDate = null, Days $days = null)
    {
        $this->setStartDate($startDate);
        $this->setDays($days);

        parent::__construct();
    }

    public function getMethod()
    {
        return RequestType::GET;
    }

    public function getUrl()
    {
        return "calendars/movies/" . $this->getStartDate() . "/" . $this->getDays();
    }
}