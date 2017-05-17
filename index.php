<?php 
 interface GetSomeinterface 
 {
public function someinterface();	
	
}
class Product implements GetSomeinterface
{
	
	public $price;
	public $color;
	public $title;
	public function someinterface($res='')
	{
		$link = file_get_contents($res);
		$link = explode('***', $link);
		$i = rand(0,2);
		$link = "<img src = $link[$i]>";

		echo "$link";
		echo "<br>";
	}
}


  class Car extends Product 
{	
	
	public $volume_engine;	
	public function __construct($price,$color,$volume_engine,$title)
	{
		$this->price = $price;
		$this->color = $color;
		$this->title = $title;
		$this->volume_engine = $volume_engine;
		echo "<br>";
		echo "цена- ". $this->price."<br>";
		echo "цвет- ".$this->color."<br>";
		echo "обьем двигателя- ".$this->volume_engine."<br>";
		echo "Название- ".$this->title = $title."<br>";


	}
}
$vaz_2105 = new Car('1200$','Морская волна','1.5','vaz-05');
$vaz_2105->someinterface($res='links/vaz.txt');
$toyota_camry = new Car('15000$','White','1.5','camry');
$toyota_camry->someinterface($res='links/toyota.txt');


  class Tv extends Product
{	
	
	public $diag;	
	public function __construct($price,$color,$diag,$title)
	{
		
		$this->price = $price;
		$this->color = $color;
		$this->diag = $diag;
		$this->title = $title;
		echo "<br>";
		echo "цена- ". $this->price."<br>";
		echo "цвет- ".$this->color."<br>";
		echo "диагональ- ".$this->diag."<br>";
		echo "Название- ".$this->title = $title."<br>";


	}
}

$samsung = new Tv('300$','White','21 дюйм','samsung');
$samsung->someinterface($res='links/tv.txt');
$lg = new Tv('700$','Black','32','lg');
$lg->someinterface($res='links/tv2.txt');

  class Pen extends Product 
{	
	
	public $type;	
	public function __construct($price,$color,$type,$title)
	{
		
		$this->price = $price;
		$this->color = $color;
		$this->type = $type;
		$this->title = $title;
		echo "<br>";
		echo "цена- ". $this->price."<br>";
		echo "цвет- ".$this->color."<br>";
		echo "тип- ".$this->type."<br>";
		echo "Название- ".$this->title."<br>";


	}
}

$Parker = new Pen('100$','Gold','fountain pen','Parker');
$Parker->someinterface($res='links/pen2.txt');
$SimplePen = new Pen('1$','Green','ball pen','Простая шариковая ручка');
$SimplePen->someinterface($res='links/pen1.txt');
	
	interface Live
	{
		public function makelive();
	}
 	class Bird implements Live
 	{
 		public $massa;
		public $color;
		public $age;	
		public $title;
		public $wing_size;
 		
 		public function makelive($res = '')
 		{
 		$link = file_get_contents($res);
		$link = explode('***', $link);
		$i = rand(0,2);
		$link = "<img src = $link[$i]>";

		echo "$link";
		echo "<br>";
 		}
 		
 	}	

  class Duck extends Bird 
{	

	public function __construct($massa,$color,$wing_size,$title)
	{
		
		$this->massa = $massa;
		$this->color = $color;
		$this->title = $title;
		$this->wing_size = $wing_size;
		
		echo "<br>";
		echo "вес- ". $this->massa."<br>";
		echo "цвет- ".$this->color."<br>";
		echo "размах крыльев - ".$this->wing_size."<br>";
		echo "Название- ".$this->title = $title."<br>";


	}
}
$Duck_mandarine = new Duck('500г','white-grey-yellow','30см','Утка мандаринка');
$Duck_mandarine->makelive($res='links/litlbirds.txt');
$Duck_mandarine->age = ' 2 года';
echo "Время жизни =  $Duck_mandarine->age<br>";
$Duck_Gagara = new Duck('6кг','white-grey','152см','Утка Гагара');
$Duck_Gagara->age = ' 20 лет';
$Duck_Gagara->makelive($res='links/bigbirds.txt');
echo "Время жизни = $Duck_Gagara->age<br>";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Наследование и интерфейсы</title>
</head>
<body>

</body>
</html>
