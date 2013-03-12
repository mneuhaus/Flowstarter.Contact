<?php
namespace Flowstarter\Contact\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Flowstarter.Contact".   *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Contact person
 *
 * @Flow\Entity
 */
class ContactPerson {

	/**
	 * The name
	 * @var string
	 */
	protected $name;

	/**
	 * The email
	 * @var string
	 */
	protected $email;


	/**
	 * Get the Contact person's name
	 *
	 * @return string The Contact person's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Contact person's name
	 *
	 * @param string $name The Contact person's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Get the Contact person's email
	 *
	 * @return string The Contact person's email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets this Contact person's email
	 *
	 * @param string $email The Contact person's email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

}
?>