<?php

class ParentClass
{
    public $var1= 1;
    public $var2= 2;

    /**
     * @return int
     */
    public function getVar1(): int
    {
        return $this->var1;
    }

    /**
     * @param int $var1
     */
    public function setVar1(int $var1): void
    {
        $this->var1 = $var1;
    }

    /**
     * @return int
     */
    public function getVar2(): int
    {
        return $this->var2;
    }

    /**
     * @param int $var2
     */
    public function setVar2(int $var2): void
    {
        $this->var2 = $var2;
    }
}


class Peirs1 extends ParentClass
{

   public $property= 10;

    public function summParentVar1():int{
        return $this->var1+$this->property;
  }
      /**
       * @return int
      */
   public function getProperty(): int
   {

   }

   /**
    * @param int $property
    */
    public function setProperty(int $property): void
   {
       $this->property = $property;
    }
}
$funsumm= new Peirs1();
echo $funsumm->summParentVar1(). "<br>";

final class Peirs2 extends ParentClass
{
    public $property2=10;

    public function multParentVar2():int
    {
        return $this->var2*$this->property2;
    }

    /**
    * @return mixed
    */
   public function getProperty2()
    {
        return $this->property2;
    }

    /**
     * @param mixed $property2
     */
    public function setProperty2($property2): void
    {
        $this->property2 = $property2;
    }

}
$Multvar= new Peirs2();
echo $Multvar->multParentVar2(). "<br>";

abstract class Peirs3 extends ParentClass
{
    public $property3=10;
    protected $a= 5;

    public function devisParentVar1(): int
    {
        return $this->var1 % $this->property3;
    }

    /**
     * @return mixed
     */
    public function getProperty3()
    {
        return $this->property3;
    }

    /**
     * @param mixed $property3
     */
    public function setProperty3($property3): void
    {
        $this->property3 = $property3;
    }

    public function con($a)
    {
        $this->a= $a;
    }
     abstract function send();
}

class Apeirs extends Peirs3
{
    protected $b=2;
    public $c= 6;
    public function con2($b)
    {
        $this->b=  $b;
    }
 function send()
 {
    echo $this->a**$this->b . "<br>";
 }

    /**
     * @return int
     */
    public function getC(): int
    {
        return $this->c;
    }

    /**
     * @param int $c
     */
    public function setC(int $c): void
    {
        $this->c = $c;
    }
    public function SummAperis()
    {
        return $this->c+$this->property3;
    }
    public function Summcorn1()
    {
        return $this->c+$this->var2;
    }
}
$outlokc= new Apeirs();
$outlokc->send() . "<br>";
echo $outlokc->SummAperis() . "<br>";
echo $outlokc->Summcorn1() . "<br>";


Class NewClassOne extends Peirs1
{
    public $g= 7;

    public function sumParent2()
    {
     return $this->g + $this->property;
    }
    public function sumcorn()
    {
        return $this->g + $this->var1;
    }

    /**
     * @return int
     */
    public function getG(): int
    {
        return $this->g;
    }

    /**
     * @param int $g
     */
    public function setG(int $g): void
    {
        $this->g = $g;
    }
}
$sumperent= new NewClassOne();
echo $sumperent->sumParent2() . "<br>";
echo $sumperent->sumcorn() . "<br>";




