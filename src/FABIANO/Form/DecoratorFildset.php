<?php 

namespace FABIANO\Form;
use FABIANO\Form\InterfaceForm\ElementInterface;

class DecoratorFildset
{
	protected $campo;

	public function __construct(ElementInterface $campo)
	{
		$this->campo = $campo;
		$fildset = '<fieldset>'.$this->campo->getElement().'</fieldset>';
		
		// Minha duvida..
		return $this->campo;
	}
}