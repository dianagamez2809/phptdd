<?php
       require_once '/../src/CuentaBancaria.php';
       class   CuentaBancaria_Test   extends   PHPUnit_Framework_TestCase
       {
             protected $cb;
              protected function setUp()
             {
                    $this -> cb = new CuentaBancaria();
             }

             public   function   testBalanceIncialEsCero ( )
             {                 
                    $this -> assertEquals ( 0 ,   $this -> cb -> getBalance () ) ;
             }
             public   function   testBalanceNoPuedeSerNegativo ( )
             {
                    try   {
                           $this -> cb -> depositarDinero ( 1 ) ;
                    }
                   catch   ( CuentaBancariaException   $e )   {
                           $this -> assertEquals ( 0 ,   $this -> cb -> getBalance ( ) ) ;
                            return ;
                    }
             }
             public function testBalanceNoPuedeSerNegativo2()
             {
             	try   {
             		$this -> cb -> retirarDinero ( 1 ) ;
             	}
             	catch   ( Exception   $e )   {
             		$this -> assertEquals ( 0 ,   $this -> cb -> getBalance ( ) ) ;
             		return 0 ;
             	}
             }
       }