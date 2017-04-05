
Инкапсуляция - представляет собой код, в котором находятся все функции и переменные, в общем вся логика  требуемой программы. И все данные и методы работы с ними могут быть изолированы от внешнего вмешательтва. А также использоваться как рабочий чертеж для решения подобных задач. В производстве для изготовления любой детали используется чертеж, он будет служить прототипом для создания множества деталей.  И как в обыкновенном чертеже все что касается детали подробно описано : точные размеры, марка стали,  шаг резьбы и т.д. Наш  чертеж состоящий из свойств и методов для их обработки называется классом и тоже должен быть подробно описан. Все свойства и методы также должны быть защищены от изменения. 
Поэтому из-за многочисленных описаний и обьявлений кода становится больше. Но сама структура программы становится стройнее.Наш класс в дальнейшем используется как экземпляр для создания подобных программ(обЪектов). И если нам необходимо внести изменения во множество созданных на базе класса рабочих экземпляров, достаточно сделать изменения в классе. 

Однако кроме увеличенного обьема кода есть и еще один минус. Если при описании класса в чем - то была допущена ошибка то она каснется всех созданных обьектов.    

<?php

 echo "<br>";
class Car {
	public $model = 'модель';
	public function getmodel(){
		echo $this->model."<br>";
	}
	public $color = 'Цвет: темно-синий<br>';
	public function getColor() {
		echo $this->color."<br>";
	}
	public $engine_volume = 'Объем двигателя:<br>';
	public function getengine_volume() {
		echo $this->engine_volume."<br>";
	}
	public $type_of_drive = 'Тип привода:<br>';
	public function getType_of_drive() {
		echo $this->type_of_drive."<br>";
	}
	public $body_type = 'Тип кузова:<br>';
	public function getBody_type() {
		echo $this->body_type."<br>";
	}
	public $type_of_transmission = 'Тип трансмисии:<br>';
	public function getType_of_transmission() {
		echo $this->type_of_transmission."<br>";
	}
}
$vaz = new Car();
$vaz->model = "Ваз 2105";
$vaz->type_of_transmission="ручной";
$vaz->body_type="седан";
$vaz->type_of_drive="задний";
$vaz->engine_volume="1.5 литра";
$vaz->color = "Морская волна";
$vaz->getmodel();
$vaz->getColor();
$vaz->getengine_volume();
$vaz->getType_of_drive();
$vaz->getBody_type();
$vaz->getType_of_transmission();
$funcargo = new Car();
$vaz->model = "Toyota - Funcargo";
$vaz->type_of_transmission="автоматический";
$vaz->body_type="седан";
$vaz->type_of_drive="4wd";
$vaz->engine_volume="1.7 литра";
$vaz->color = "Красный";
$vaz->getmodel();
$vaz->getColor();
$vaz->getengine_volume();
$vaz->getType_of_drive();
$vaz->getBody_type();
$vaz->getType_of_transmission();
		echo "<br>Образовательное учреждение<br>"; /// чертим школу
class School 
{	public $name = 'название учреждения';
	public function getname(){
		echo $this->name ."<br>";
	}
	public $Size  = 'размер здания';
	public function getsize() {
		echo $this->size ."<br>";
	}
	public $number_students = "количество учащихся";
	public function getnumber_students() {
		echo $this->number_students."<br>";
	}
	public $number_tichers = "количество преподавателей";
	public function getnumber_tichers() {
		echo $this->number_tichers."<br>";
	}
	public $rating_students = 'Успеваемость:';
	public function getrating_students() {
		echo $this->rating_students."<br>";
	}
	public $price = 'Стоимость обучения';
	public function getprice() {
		echo $this->price."<br>";
	}
}
$CerkovnoPrihodskaya = new School(); // И по этому чертежу создаем маленькую школу
$CerkovnoPrihodskaya->name = "Церковноприходская";
$CerkovnoPrihodskaya->number_students = '3';
$CerkovnoPrihodskaya->number_tichers = '1';
$CerkovnoPrihodskaya->rating_students = '3';
$CerkovnoPrihodskaya->price = 'бесплатно';
$CerkovnoPrihodskaya->size = '5*3 кв.м';
$CerkovnoPrihodskaya->getname();
$CerkovnoPrihodskaya->getsize();
$CerkovnoPrihodskaya->getnumber_students();
$CerkovnoPrihodskaya->getnumber_tichers();
$CerkovnoPrihodskaya->getrating_students();
$CerkovnoPrihodskaya->getprice();
////
$PolitechnicalUneversity = new School(); // А по этому чертежу создаем университет
$PolitechnicalUneversity->name = 'Политехнический университет';
$PolitechnicalUneversity->number_students = '5000';
$PolitechnicalUneversity->number_tichers = '320';
$PolitechnicalUneversity->rating_students = 'у всех своя';
$PolitechnicalUneversity->price = 'от бюджетного места и до бесконечности';
$PolitechnicalUneversity->size = '1000*1200 кв.м';
$PolitechnicalUneversity->getname();
$PolitechnicalUneversity->getsize();
$PolitechnicalUneversity->getnumber_students();
$PolitechnicalUneversity->getnumber_tichers();
$PolitechnicalUneversity->getrating_students();
$PolitechnicalUneversity->getprice();
echo "<br>вагон<br>";//описываем класс вагон
class Vagon 
{
	public $tara = 'Масса тары:';
	public function gettara() {
		echo "Масса". $this->tara."<br>";
	}
	public $typevag = 'тип вагона: ';
	public function gettypevag() {
		echo 'тип вагона'. $this->typevag."<br>";
	}
	public $countAxis = 'Число осей: ';
	public function getcountAxis() {
		echo 'Число осей'. $this->countAxis."<br>";
	}
	public $length = 'Длина по осям автосцепок: ';
	public function getlength() {
		echo "Длина". $this->length."<br>";
	}
}
	
$Platform = new Vagon(); // И по его типу создаем три разных вагона Платформу
$Platform->typevag = 'Платформа';
$Platform->tara = '25';
$Platform->countAxis = '4';
$Platform->length = '21';
$Platform->gettypevag();
$Platform->gettara();
$Platform->getcountAxis();
$Platform->getlength();
////////
$Poluvagon = new Vagon();// И полувагон
$Poluvagon->typevag = 'Полувагон';
$Poluvagon->tara = '22';
$Poluvagon->countAxis = '4';
$Poluvagon->length = '18';
$Poluvagon->gettypevag();
$Poluvagon->gettara();
$Poluvagon->getcountAxis();
$Poluvagon->getlength();
/////
$Tank = new Vagon();// И цистерну
$Tank->typevag = 'Цистерна';
$Tank->tara = '32';
$Tank->countAxis = '4';
$Tank->length = '12';
$Tank->gettypevag();
$Tank->gettara();
$Tank->getcountAxis();
$Tank->getlength();
////
?>
	