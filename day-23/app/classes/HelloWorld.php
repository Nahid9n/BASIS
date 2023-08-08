<?php


namespace App\classes;


class HelloWorld
{
    public $message, $firstName,$lastName,$firstNumber,$secondNumber;

    public function __construct()
    {

    }

    public function index()
    {
      $this->firstName = 'BASIS';
      $this->lastName = 'BITM';
      $this->firstNumber = 10;
      $this->secondNumber = 20;
      $this->thirdNumber = 30;
      $this->fourthNumber = false;
      $this->fifthNumber= $this->firstNumber+$this->secondNumber;

      switch ($this->firstNumber){
          case 10:
              echo 'hello world';
              break;
          case 20:
              echo 'hello Bangladesh';
              break;
          case 30:
              echo 'hello America';
              break;

          default:
              echo 'hello India';
              break;
      }


//        if ($this->firstNumber > $this->secondNumber){
//            echo $this->fifthNumber;
//        }
//        elseif ($this->secondNumber > $this->thirdNumber){
//            echo 'Hello Nahid';
//        }
//        elseif ($this->thirdNumber > $this->firstNumber){
//            echo 'Hello PHP';
//        }
//        else{
//            echo $this->fifthNumber;
//        }


//      if ($this->firstNumber > $this->secondNumber){
//          echo $this->fifthNumber;
//      }
//      else{
//          echo 'False';
//      }


//      if ($this->firstNumber > $this->secondNumber){
//          echo $this->fifthNumber;
//      }
//      echo gettype($this->firstName);

//     echo 'Arithmatic operator';
//      echo '</br>';
//      echo $this->firstNumber + $this->secondNumber;
//        echo '</br>';
//      echo $this->firstNumber - $this->secondNumber;
//        echo '</br>';
//      echo $this->firstNumber * $this->secondNumber;
//        echo '</br>';
//      echo $this->firstNumber / $this->secondNumber;
//        echo '</br>';
//      echo $this->firstNumber % $this->secondNumber;
//      echo '</br>';
//
//      echo ++$this->firstNumber;
//      echo '<br/>';
//      echo $this->firstNumber;
//      echo '<br>';
//      echo $this->firstNumber;
//        echo '<br>';
//
//
////      echo $this->firstName .'&nbsp;'. $this->lastName ;
///
//        echo 'Assignment Operator';
//        echo '</br>';
//        echo $this->firstNumber += $this->secondNumber;
//        echo '</br>';
//        echo $this->firstNumber -= $this->secondNumber;
//        echo '</br>';
//        echo $this->firstNumber *= $this->secondNumber;
//        echo '</br>';
//        echo $this->firstNumber /= $this->secondNumber;
//        echo '</br>';
//        echo $this->firstNumber %= $this->secondNumber;
//        echo '</br>';
//        echo $this->firstNumber .= $this->secondNumber;
//        echo '</br>';

//        echo 'Conditional Operator';
//        echo ($this->firstNumber > $this->secondNumber) && ($this->secondNumber > $this->thirdNumber) ;
//        echo '</br>';
//        echo ($this->firstNumber < $this->secondNumber) && ($this->secondNumber < $this->thirdNumber) ;
//        echo '</br>';
//        echo ($this->firstNumber > $this->secondNumber) && ($this->secondNumber < $this->thirdNumber) ;
//        echo '</br>';
//        echo ($this->firstNumber < $this->secondNumber) && ($this->secondNumber > $this->thirdNumber) ;
//        echo '</br>';
//
//        echo 'Conditional Operator';
//        echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber > $this->thirdNumber) ;
//        echo '</br>';
//        echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber < $this->thirdNumber) ;
//        echo '</br>';
//        echo ($this->firstNumber > $this->secondNumber) || ($this->secondNumber < $this->thirdNumber) ;
//        echo '</br>';
//        echo ($this->firstNumber < $this->secondNumber) || ($this->secondNumber > $this->thirdNumber) ;
//        echo '</br>';

//            echo !$this->fourthNumber;






    }

};
