<?php
class Time 
{
  // Properties
  private $number;
  // Methods
  function set_number($n) 
  {
    $this->number = $n;
  }
  function get_number() 
  {
    return $this->number;
  }
  function Display_Time()
  {
    echo "<br/> Display Results <br/>";
    for ($x = 1; $x <= 12; $x++) 
    {
        echo "$this->number * $x : " . $this->number * $x ."<br/>";
    }
  }
}
?>