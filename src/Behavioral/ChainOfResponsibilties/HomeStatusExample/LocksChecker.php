<?php

namespace Balhagar\PhpDesignPatterns\Behavioral\ChainOfResponsibilties\HomeStatusExample;

use Exception;

class LocksChecker extends HomeChecker
{
    protected $succesor;

    public function __construct(HomeChecker $succesor = null)
    {
        $this->succesor = $succesor;
    }

    /**
     * check the status or the request got certain info
     * handle the request or the status if you can
     * else pass it to the next object in the chain
     *
     * @param  HomeStatus $status could be a request or status
     * @return [next]             handle the status or return next object in the chain
     */
    public function check(HomeStatus $status)
    {
        if (! $status->doorsLocked) {
            throw new Exception("Doors not locked, Abort!");
        }

        return $this->next($status);
    }
}
