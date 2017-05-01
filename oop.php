<p>
Инкапсуляция - представляет собой код, в котором находятся все функции и переменные, в общем вся логика  требуемой программы. И все данные и методы работы с ними могут быть изолированы от внешнего вмешательтва, а также использоваться как рабочий чертеж для решения подобных задач.
<p> В производстве для изготовления любой детали используется чертеж, он будет служить прототипом для создания множества деталей.  И как в обыкновенном чертеже все что касается детали подробно описано : точные размеры, марка стали,  шаг резьбы и т.д.
 Наш  чертеж состоящий из свойств и методов для их обработки называется классом и тоже должен быть подробно описан. Все свойства и методы также должны быть защищены от изменения. </p>
<p>
Из-за многочисленных описаний и обьявлений кода становится больше. Но сама структура программы становится стройнее.Наш класс в дальнейшем используется как экземпляр для создания подобных программ(обЪектов). И если нам необходимо внести изменения во множество созданных на базе класса рабочих экземпляров, достаточно сделать изменения в классе.<p> 
<p>
Однако кроме увеличенного обьема кода есть и еще один минус. Если при описании класса в чем - то была допущена ошибка то она каснется всех созданных обьектов.    
</p>
<?php
error_reporting(-1);
 /**
 * 
 */
 class Product 
 {
 	public $price ;
 	public function showprice()
 	{
 		echo 'Стоимость:'. $this->price."<br>";
 	}
 	public function __construct()
 	{
 		echo "---------------------------------------------<br>";
 	}
 	
 }

 echo "<br>";
class Car extends Product {
	public $model = 'модель';
	public function getmodel(){
		echo 'модель: '. $this->model."<br>";
	}
	public $color = 'Цвет: темно-синий<br>';
	public function getColor() {
		echo 'цвет: '. $this->color."<br>";
	}
	public $engine_volume = 'Объем двигателя:<br>';
	public function getengine_volume() {
		echo 'обьем: '. $this->engine_volume."<br>";
	}
	public $type_of_drive = 'Тип привода:<br>';
	public function getType_of_drive() {
		echo 'тип привода: '. $this->type_of_drive."<br>";
	}
	public $body_type = 'Тип кузова:<br>';
	public function getBody_type() {
		echo 'тип кузова: '. $this->body_type."<br>";
	}
	public $type_of_transmission = 'Тип трансмисии:<br>';
	public function getType_of_transmission() {
		echo "Тип трансмисии: ". $this->type_of_transmission."<br>";
	}

}
$vaz = new Car();
	$vaz->model = "Ваз 2105";
	$vaz->type_of_transmission="ручной";
	$vaz->body_type="седан";
	$vaz->type_of_drive="задний";
	$vaz->engine_volume="1.5 литра";
	$vaz->color = "Морская волна";
	$vaz->price = "90000";
	$vaz->getmodel();
	$vaz->getColor();
	$vaz->getengine_volume();
	$vaz->getType_of_drive();
	$vaz->getBody_type();
	$vaz->getType_of_transmission();
	$vaz->showprice();
$funcargo = new Car();
	$funcargo->model = "Toyota - Funcargo";
	$funcargo->type_of_transmission="автоматический";
	$funcargo->body_type="седан";
	$funcargo->type_of_drive="4wd";
	$funcargo->engine_volume="1.7 литра";
	$funcargo->color = "Красный";
	$funcargo->price = "470000";
	$funcargo->getmodel();
	$funcargo->getColor();
	$funcargo->getengine_volume();
	$funcargo->getType_of_drive();
	$funcargo->getBody_type();
	$funcargo->getType_of_transmission();
	$funcargo->showprice();
class TV extends Product
{
	public $model;
	public function showmodel()
		{
			echo 'модель:'. $this->model."<br>";
		}
	public $color  ;
	public function showcolor()
		{
			echo 'Цвет:'. $this->color."<br>";
		}
	public $ScreenSize ;
	public function showScreenSize()
		{
			echo 'Размер экрана:'. $this->ScreenSize."<br>";
		}
	public $resolution ;
	public function showresolution()
		{
			echo 'Разрешение:'. $this->resolution."<br>";
		}
	
}
$Samsung = new TV();
$Samsung->model = "UEF6400AK";
$Samsung->price = "32000";
$Samsung->color = "Black";
$Samsung->ScreenSize = '80 см';
$Samsung->resolution = "1920x1080 px" ;
$Samsung->showprice();
$Samsung->showmodel();
$Samsung->showcolor();
$Samsung->showScreenSize();
$Samsung->showresolution();
$LG = new TV();
$LG->model = "LG 28LH451U";
$LG->price = "14300";
$LG->color = "Grey";
$LG->ScreenSize ="71 см";
$LG->resolution = "1366x768 px";
$LG->showprice();
$LG->showmodel();
$LG->showcolor();
$LG->showScreenSize();
$LG->showresolution();
class Pencil extends Product
{
	public $model ;
	public function showmodel()
		{
			echo 'модель:'. $this->model."<br>";
		}
	public $color ;
	public function showcolor()
		{
			echo 'Цвет:'. $this->color."<br>";
		}
	public $material ;
	public function showmaterial()
		{
			echo 'Материал:'.$this->material."<br>";
		}
	
}
$Bic = new Pencil();
$Bic->model = 'Шариковая ручка';
$Bic->color = 'red';
$Bic->material = 'plastic';
$Bic->price = '25р';
$Bic->showprice();
$Bic->showmodel();
$Bic->showcolor();
$Bic->showmaterial();
$Parker = new Pencil();
$Parker->model = 'Перьевая ручка ';
$Parker->color = "Gold";
$Parker->material = "metall, plastic";
$Parker->price = "1200р";
$Parker->showprice();
$Parker->showmodel();
$Parker->showcolor();
$Parker->showmaterial();
class Duck 
{
	public function __construct()
	{
		echo "------------------------<br>";
	}
	public $name ;
	public  function showname()
	{
		echo 'Название: '. $this->name."<br>";
	}
	public $wing_size;
	public function showwing_size()
	{
		echo 'Размах крыльев:'. $this->wing_size."<br>";
	}
	public $color ;
	public function showcolor()
	{
		echo 'Цвет:'. $this->color."<br>";
	}
	public $timelife ;
	public function showtimelife()
	{
		echo 'Время жизни:'. $this->timelife."<br>";
	}
	public $massa ;
	public function showmassa()
	{
		echo 'Вес:'. $this->massa."<br>";
	}
}

$Duck_mandarine = new Duck;
$Duck_mandarine->name = 'Утка мандаринка';
$Duck_mandarine->timelife = ' 2 года';
$Duck_mandarine->color = 'white-grey-yellow';
$Duck_mandarine->massa = '500 г';
$Duck_mandarine->wing_size = '30см';
$Duck_mandarine->showname();
$Duck_mandarine->showwing_size();
$Duck_mandarine->showcolor();
$Duck_mandarine->showtimelife();
$Duck_mandarine->showmassa();
$Duck_Gagara = new Duck;
$Duck_Gagara->name = 'Утка гагара';
$Duck_Gagara->age = ' 20 лет';
$Duck_Gagara->timelife = '20 лет';
$Duck_Gagara->color = 'white-grey';
$Duck_Gagara->massa = '6 кг';
$Duck_Gagara->wing_size = '152см';
$Duck_Gagara->showname();
$Duck_Gagara->showwing_size();
$Duck_Gagara->showcolor();
$Duck_Gagara->showtimelife();
$Duck_Gagara->showmassa();

?>
	