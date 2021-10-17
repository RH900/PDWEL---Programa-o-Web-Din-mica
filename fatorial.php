<?php

echo "ola mundo";
echo "<br>";


function factorial($n)
{
	$aux = $n;
	$f = 1;
	while ($n > 0)
	{
		
		$f = $f * $n;
		$n = $n - 1;
	}
	echo "<br> Fatorial de $aux e : $f ";
	return $f;
	
}


echo "<br> Teste da funcao factorial()";
factorial(5); // teste



function primeNumber($n)
{
	$aux = $n;
	$d = 2; //suposto divisor
	
	if ($n < 0)
	{
		$n = $n * (-1); // tranformar em positivo
	}
	
	do //lopping para checar os possiveis divisores
	{
		if ($n == 0)
		{
			echo "<br> zero nao e primo ou composto ";
			return null;
			break;
		}else if ($n == 2 || $n == 1)
		{
			echo "<br> o numero $aux e primo ";
			return $n;
			break;
			
		}
		else if ($n % $d == 0) // caso ache divisor menor que o numero dado
		{
			echo "<br> o numero $aux e composto ";
			return null;
			break;
		}
		$d++; // aumenta uma unidade para testar o proximo divisor
	}while($d < $n);
	
	if ($d == $n) // caso ache nenhum divisor menor que ele proprio
	{
		echo "<br> o numero $aux e primo ";
		return $n;
	}
}

echo "<p> Teste da funcao primeNumber()";
primeNumber(8);


function perfectNumber($n)
{
	$d = 1;
	$s = 0;
	do
	{
		if ($n % $d == 0)
		{
			$s = $s + $d;
		}
		$d++;
		
	}while ($s < $n);
	
	
	if ($s == $n)
		{
			echo "<br> o numero $n e perfeito ";
			return $n;
		}
		else
		{
			echo "<br> o numero $n nao e perfeito ";
			return null;
		}

}

echo "<p> Teste da funcao perfectNumber() ";
perfectNumber(6);


function vetFactorial($n)
{
	$aux = 1;
	$factorial = array();
	
	while ($aux <= $n)
	{
		$factorial[] = factorial ($aux);
		$aux = $aux + 1;
	}
	echo "<br>";
	print_r ($factorial);
	echo "<br>";
}

vetFactorial(5);

function vetPrime($n)
{
	$aux = 0;
	$primeNumbers = array();
	
	while ($aux < $n)
	{

		
		$aux++;
		
		if (primeNumber($aux) != null)
		{
			$primeNumbers[] = primeNumber($aux);
		}
	}
	echo "<br>";
	print_r($primeNumbers);
	echo "<br>";
}

vetPrime(5);


function vetNumbers($n)
{
	$aux = 0;
	$perfectNumbers = array();
	
	while ($aux < $n)
	{
		
		$aux++;
		
		if (perfectNumber($aux) != null)
		{
			$perfectNumbers[] = perfectNumber($aux);
		}
		
	}
	echo "<br>";
	print_r($perfectNumbers);
	echo "<br>";
}

vetNumbers(6);



?>