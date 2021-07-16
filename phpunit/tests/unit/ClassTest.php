<?php

use PHPUnit\Framework\TestCase;

class ClassTest extends TestCase {
	public function testSalaryIncrement() {
		$basicSalary			= 5000;
		$providentFund			= 450;
		$transportAllowance	= 750;
		$yearlyIncrement		= 0.5;

		$netSalary = (($basicSalary + $providentFund + $transportAllowance) * $yearlyIncrement);
		$this->assertEquals($netSalary, 3100);
	}
}