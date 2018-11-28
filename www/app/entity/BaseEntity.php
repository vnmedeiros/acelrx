<?php

use Doctrine\ORM\Mapping as ORM;

class BaseEntity implements JsonSerializable {
	
	/** @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	**/
	protected $id;

	public function getId() {
		return $this->id;
	}

	public function jsonSerialize() {
		return $this->as_array();
	}

	public function as_array() {
		$vars = get_object_vars($this);
		return $vars;
	}
}