<?php

namespace chebakova;


class Line
{
    public function equation($a, $b)
    {
        if ($a == 0) {
            throw new ChebakovaException("Ошибка: уравнения не существует.");

        }
        return $this->X = -($b / $a);
    }

    protected $X;
}

