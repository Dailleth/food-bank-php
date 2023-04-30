<?php

namespace Database\Class\FoodBank;

class Transactions implements \JsonSerializable {

	private ?int $idtransactions = null;
	private ?int $idproducts = null;
	private ?string $transactions_deadline = null;
	private ?string $transactions_types_service = null;
	private ?string $transactions_recipient_name = null;
	private ?int $transactions_amount = null;
	private ?string $transactions_photo = null;
	private ?string $transactions_code = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Transactions {
		$transactions = new Transactions();

		$transactions->setIdtransactions(
			isset(request->idtransactions) ? request->idtransactions : null
		);

		$transactions->setIdproducts(
			isset(request->idproducts) ? request->idproducts : null
		);

		$transactions->setTransactionsDeadline(
			isset(request->transactions_deadline) ? request->transactions_deadline : null
		);

		$transactions->setTransactionsTypesService(
			isset(request->transactions_types_service) ? request->transactions_types_service : null
		);

		$transactions->setTransactionsRecipientName(
			isset(request->transactions_recipient_name) ? request->transactions_recipient_name : null
		);

		$transactions->setTransactionsAmount(
			isset(request->transactions_amount) ? request->transactions_amount : null
		);

		$transactions->setTransactionsPhoto(
			isset(request->transactions_photo) ? request->transactions_photo : null
		);

		$transactions->setTransactionsCode(
			isset(request->transactions_code) ? request->transactions_code : null
		);

		return $transactions;
	}

	public function getIdtransactions(): ?int {
		return $this->idtransactions;
	}

	public function setIdtransactions(?int $idtransactions): Transactions {
		$this->idtransactions = $idtransactions;
		return $this;
	}

	public function getIdproducts(): ?int {
		return $this->idproducts;
	}

	public function setIdproducts(?int $idproducts): Transactions {
		$this->idproducts = $idproducts;
		return $this;
	}

	public function getTransactionsDeadline(): ?string {
		return $this->transactions_deadline;
	}

	public function setTransactionsDeadline(?string $transactions_deadline): Transactions {
		$this->transactions_deadline = $transactions_deadline;
		return $this;
	}

	public function getTransactionsTypesService(): ?string {
		return $this->transactions_types_service;
	}

	public function setTransactionsTypesService(?string $transactions_types_service): Transactions {
		$this->transactions_types_service = $transactions_types_service;
		return $this;
	}

	public function getTransactionsRecipientName(): ?string {
		return $this->transactions_recipient_name;
	}

	public function setTransactionsRecipientName(?string $transactions_recipient_name): Transactions {
		$this->transactions_recipient_name = $transactions_recipient_name;
		return $this;
	}

	public function getTransactionsAmount(): ?int {
		return $this->transactions_amount;
	}

	public function setTransactionsAmount(?int $transactions_amount): Transactions {
		$this->transactions_amount = $transactions_amount;
		return $this;
	}

	public function getTransactionsPhoto(): ?string {
		return $this->transactions_photo;
	}

	public function setTransactionsPhoto(?string $transactions_photo): Transactions {
		$this->transactions_photo = $transactions_photo;
		return $this;
	}

	public function getTransactionsCode(): ?string {
		return $this->transactions_code;
	}

	public function setTransactionsCode(?string $transactions_code): Transactions {
		$this->transactions_code = $transactions_code;
		return $this;
	}

}