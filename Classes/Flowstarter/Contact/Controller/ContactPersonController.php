<?php
namespace Flowstarter\Contact\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Flowstarter.Contact".   *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \Flowstarter\Contact\Domain\Model\ContactPerson;

/**
 * ContactPerson controller for the Flowstarter.Contact package 
 *
 * @Flow\Scope("singleton")
 */
class ContactPersonController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \Flowstarter\Contact\Domain\Repository\ContactPersonRepository
	 */
	protected $contactPersonRepository;

	/**
	 * Shows a list of contactpeople
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('contactpeople', $this->contactPersonRepository->findAll());
	}

	/**
	 * Shows a single contact person object
	 *
	 * @param \Flowstarter\Contact\Domain\Model\ContactPerson $contactPerson The contact person to show
	 * @return void
	 */
	public function showAction(ContactPerson $contactPerson) {
		$this->view->assign('contactPerson', $contactPerson);
	}

	/**
	 * Shows a form for creating a new contact person object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new contact person object to the contact person repository
	 *
	 * @param \Flowstarter\Contact\Domain\Model\ContactPerson $newContactPerson A new contact person to add
	 * @return void
	 */
	public function createAction(ContactPerson $newContactPerson) {
		$this->contactPersonRepository->add($newContactPerson);
		$this->addFlashMessage('Created a new contact person.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing contact person object
	 *
	 * @param \Flowstarter\Contact\Domain\Model\ContactPerson $contactPerson The contact person to edit
	 * @return void
	 */
	public function editAction(ContactPerson $contactPerson) {
		$this->view->assign('contactPerson', $contactPerson);
	}

	/**
	 * Updates the given contact person object
	 *
	 * @param \Flowstarter\Contact\Domain\Model\ContactPerson $contactPerson The contact person to update
	 * @return void
	 */
	public function updateAction(ContactPerson $contactPerson) {
		$this->contactPersonRepository->update($contactPerson);
		$this->addFlashMessage('Updated the contact person.');
		$this->redirect('index');
	}

	/**
	 * Removes the given contact person object from the contact person repository
	 *
	 * @param \Flowstarter\Contact\Domain\Model\ContactPerson $contactPerson The contact person to delete
	 * @return void
	 */
	public function deleteAction(ContactPerson $contactPerson) {
		$this->contactPersonRepository->remove($contactPerson);
		$this->addFlashMessage('Deleted a contact person.');
		$this->redirect('index');
	}

}

?>