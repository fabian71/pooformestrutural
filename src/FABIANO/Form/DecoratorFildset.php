<?php 

namespace FABIANO\Form;
use FABIANO\Form\InterfaceForm\ElementInterface;

class DecoratorFildset implements ElementInterface 
{
	protected $campo;

	public function __construct(ElementInterface $campo)
	{
		$this->campo = $campo;
	}

	public function setName($name){

	}
	
	public function setId($id){

	}
	public function getElement(){
		return '<fieldset>'.$this->campo->getElement().'</fieldset>';
	}
}