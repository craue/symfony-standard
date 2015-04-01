<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Vehicle {

	/**
	 * @var integer
	 * @Assert\NotBlank
	 */
	public $numberOfWheels;

}
