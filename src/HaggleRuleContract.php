<?php

namespace GuoJiangClub\HaggleRule;

interface HaggleRuleContract
{
    /**
     * get haggle list.
     *
     * @param int $total  total haggle amount.
     * @param int $times  total haggle times.
     * @return mixed
     */
    public  function getHaggleList(int $total, int $times);
}
