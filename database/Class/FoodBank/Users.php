<?php

namespace Database\Class\FoodBank;

class Users implements \JsonSerializable {

	private ?int $idusers = null;
	private ?string $users_name = null;
	private ?string $users_lastname = null;
	private ?string $users_address = null;
	private ?string $users_email = null;
	private ?string $users_password = null;
	private ?string $users_document = null;
	private ?string $users_document_types = null;
	private ?string $users_phone = null;
	private ?int $idroles = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Users {
		$users = new Users();

		$users->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$users->setUsersName(
			isset(request->users_name) ? request->users_name : null
		);

		$users->setUsersLastname(
			isset(request->users_lastname) ? request->users_lastname : null
		);

		$users->setUsersAddress(
			isset(request->users_address) ? request->users_address : null
		);

		$users->setUsersEmail(
			isset(request->users_email) ? request->users_email : null
		);

		$users->setUsersPassword(
			isset(request->users_password) ? request->users_password : null
		);

		$users->setUsersDocument(
			isset(request->users_document) ? request->users_document : null
		);

		$users->setUsersDocumentTypes(
			isset(request->users_document_types) ? request->users_document_types : null
		);

		$users->setUsersPhone(
			isset(request->users_phone) ? request->users_phone : null
		);

		$users->setIdroles(
			isset(request->idroles) ? request->idroles : null
		);

		return $users;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): Users {
		$this->idusers = $idusers;
		return $this;
	}

	public function getUsersName(): ?string {
		return $this->users_name;
	}

	public function setUsersName(?string $users_name): Users {
		$this->users_name = $users_name;
		return $this;
	}

	public function getUsersLastname(): ?string {
		return $this->users_lastname;
	}

	public function setUsersLastname(?string $users_lastname): Users {
		$this->users_lastname = $users_lastname;
		return $this;
	}

	public function getUsersAddress(): ?string {
		return $this->users_address;
	}

	public function setUsersAddress(?string $users_address): Users {
		$this->users_address = $users_address;
		return $this;
	}

	public function getUsersEmail(): ?string {
		return $this->users_email;
	}

	public function setUsersEmail(?string $users_email): Users {
		$this->users_email = $users_email;
		return $this;
	}

	public function getUsersPassword(): ?string {
		return $this->users_password;
	}

	public function setUsersPassword(?string $users_password): Users {
		$this->users_password = $users_password;
		return $this;
	}

	public function getUsersDocument(): ?string {
		return $this->users_document;
	}

	public function setUsersDocument(?string $users_document): Users {
		$this->users_document = $users_document;
		return $this;
	}

	public function getUsersDocumentTypes(): ?string {
		return $this->users_document_types;
	}

	public function setUsersDocumentTypes(?string $users_document_types): Users {
		$this->users_document_types = $users_document_types;
		return $this;
	}

	public function getUsersPhone(): ?string {
		return $this->users_phone;
	}

	public function setUsersPhone(?string $users_phone): Users {
		$this->users_phone = $users_phone;
		return $this;
	}

	public function getIdroles(): ?int {
		return $this->idroles;
	}

	public function setIdroles(?int $idroles): Users {
		$this->idroles = $idroles;
		return $this;
	}

}