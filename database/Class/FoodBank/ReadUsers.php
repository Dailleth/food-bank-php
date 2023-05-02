<?php

namespace Database\Class\FoodBank;

class ReadUsers implements \JsonSerializable {

	private ?int $idusers = null;
	private ?string $users_name = null;
	private ?string $users_lastname = null;
	private ?string $users_address = null;
	private ?string $users_email = null;
	private ?string $users_document = null;
	private ?string $users_document_types = null;
	private ?string $users_phone = null;
	private ?int $idroles = null;
	private ?string $roles_name = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): ReadUsers {
		$readusers = new ReadUsers();

		$readusers->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$readusers->setUsersName(
			isset(request->users_name) ? request->users_name : null
		);

		$readusers->setUsersLastname(
			isset(request->users_lastname) ? request->users_lastname : null
		);

		$readusers->setUsersAddress(
			isset(request->users_address) ? request->users_address : null
		);

		$readusers->setUsersEmail(
			isset(request->users_email) ? request->users_email : null
		);

		$readusers->setUsersDocument(
			isset(request->users_document) ? request->users_document : null
		);

		$readusers->setUsersDocumentTypes(
			isset(request->users_document_types) ? request->users_document_types : null
		);

		$readusers->setUsersPhone(
			isset(request->users_phone) ? request->users_phone : null
		);

		$readusers->setIdroles(
			isset(request->idroles) ? request->idroles : null
		);

		$readusers->setRolesName(
			isset(request->roles_name) ? request->roles_name : null
		);

		return $readusers;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): ReadUsers {
		$this->idusers = $idusers;
		return $this;
	}

	public function getUsersName(): ?string {
		return $this->users_name;
	}

	public function setUsersName(?string $users_name): ReadUsers {
		$this->users_name = $users_name;
		return $this;
	}

	public function getUsersLastname(): ?string {
		return $this->users_lastname;
	}

	public function setUsersLastname(?string $users_lastname): ReadUsers {
		$this->users_lastname = $users_lastname;
		return $this;
	}

	public function getUsersAddress(): ?string {
		return $this->users_address;
	}

	public function setUsersAddress(?string $users_address): ReadUsers {
		$this->users_address = $users_address;
		return $this;
	}

	public function getUsersEmail(): ?string {
		return $this->users_email;
	}

	public function setUsersEmail(?string $users_email): ReadUsers {
		$this->users_email = $users_email;
		return $this;
	}

	public function getUsersDocument(): ?string {
		return $this->users_document;
	}

	public function setUsersDocument(?string $users_document): ReadUsers {
		$this->users_document = $users_document;
		return $this;
	}

	public function getUsersDocumentTypes(): ?string {
		return $this->users_document_types;
	}

	public function setUsersDocumentTypes(?string $users_document_types): ReadUsers {
		$this->users_document_types = $users_document_types;
		return $this;
	}

	public function getUsersPhone(): ?string {
		return $this->users_phone;
	}

	public function setUsersPhone(?string $users_phone): ReadUsers {
		$this->users_phone = $users_phone;
		return $this;
	}

	public function getIdroles(): ?int {
		return $this->idroles;
	}

	public function setIdroles(?int $idroles): ReadUsers {
		$this->idroles = $idroles;
		return $this;
	}

	public function getRolesName(): ?string {
		return $this->roles_name;
	}

	public function setRolesName(?string $roles_name): ReadUsers {
		$this->roles_name = $roles_name;
		return $this;
	}

}