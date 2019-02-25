<?php

//Реализуйте функцию getSameParity, которая принимает на вход массив чисел и возвращает новый,
// состоящий из элементов, у которых такая же чётность, как и у первого элемента входного массива.

$number = [];

function getSameParity($array)
{
   if(!empty($array))
   {

        if($array[0] % 2 == 0)
        {
            foreach($array as $elem)
            {
                if($elem % 2 == 0)
                {
                    $result[] = $elem;
                }
            }
        } else
        {
            foreach($array as $elem)
            {
                if($elem % 2 !== 0)
                {
                    $result[] = $elem;
                }
            }
        }

    return $result;
    }
}
print_r(getSameParity($number));
