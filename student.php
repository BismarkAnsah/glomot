<?php

class Student
{


    /**
     * gets gradepoint for mark supplied
     *
     * @param float $mark mark scored in a particular course.
     * @return float grade point for the specified mark.
     */
    public function getGradePoint(float $mark)
    {
        if($mark>=80)
            return 4.0;
        if($mark>=75)
            return 3.5;
        if($mark>=70)
            return 3.0;
        if($mark>=65)
            return 2.5;
        if($mark>=60)
            return 2.0;
        if($mark>=55)
            return 1.5;
        if($mark>=50)
            return 1.0;
        if($mark<50)
            return 0;

    }
}