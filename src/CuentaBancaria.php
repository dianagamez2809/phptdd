<?php
class CuentaBancaria
{
	protected $balance = 0;
	public function getBalance()
	{
		return $this -> balance;
	}
	protected   function   setBalance ( $balance )
	{
		if   ( $balance   >=   0 )   {
			$this -> balance   =   $balance ;
		}   else   {
			throw   new   Exception();
		}
	}
	public   function   depositarDinero ( $balance )
	{
		$this -> setBalance ( $this -> getBalance ( )   +   $balance ) ;
		return   $this -> getBalance ( ) ;
	}
	public function retirarDinero ( $balance )
	{
		$this -> setBalance ( $this -> getBalance ( )   -   $balance ) ;
		return   $this -> getBalance ( ) ;
	}
}