<?php
class QuadraticEquation 
{
  public $a;
  public $b;
  public $c;
  public function QuadraticEquation($a, $b,$c)
    {
      $this->a = $a;
      $this->b = $b;
      $this->c = $c;
    }

  public function getDiscriminant()
    {
      return pow($this->b,2)-(4*$this->a*$this->c);
    }
  public function getRoot1()
    {
      if($this->getDiscriminant()>0){
        return (-$this->b+sqrt($this->getDiscriminant()))/2* $this->a;
      }else if
        ($this->getDiscriminant()==0){
            return (-$this->b/2* $this->a);
          }else
        return 0;
    }
  public function getRoot2()
  {
    if($this->getDiscriminant()>0){
      return (-$this->b-sqrt($this->getDiscriminant()))/2* $this->a;
    }else if
      ($this->getDiscriminant()==0){
      return (-$this->b/2* $this->a);
      }else
        return 0;
  }
}
?>