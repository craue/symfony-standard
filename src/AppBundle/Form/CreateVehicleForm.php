<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CreateVehicleForm extends AbstractType {

	/**
	 * {@inheritDoc}
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$choices = array(2, 4);
		$builder->add('numberOfWheels', 'choice', array(
			'choices' => array_combine($choices, $choices),
			'empty_value' => '',
		));
	}

	/**
	 * {@inheritDoc}
	 */
	public function getName() {
		return 'createVehicle';
	}

}
