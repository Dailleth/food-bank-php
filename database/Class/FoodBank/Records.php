<?php

namespace Database\Class\FoodBank;

class Records implements \JsonSerializable {

	private ?int $idrecords = null;
	private ?int $idusers = null;
	private ?string $records_type = null;
	private ?string $records_date = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Records {
		$records = new Records();

		$records->setIdrecords(
			isset(request->idrecords) ? request->idrecords : null
		);

		$records->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		$records->setRecordsType(
			isset(request->records_type) ? request->records_type : null
		);

		$records->setRecordsDate(
			isset(request->records_date) ? request->records_date : null
		);

		return $records;
	}

	public function getIdrecords(): ?int {
		return $this->idrecords;
	}

	public function setIdrecords(?int $idrecords): Records {
		$this->idrecords = $idrecords;
		return $this;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): Records {
		$this->idusers = $idusers;
		return $this;
	}

	public function getRecordsType(): ?string {
		return $this->records_type;
	}

	public function setRecordsType(?string $records_type): Records {
		$this->records_type = $records_type;
		return $this;
	}

	public function getRecordsDate(): ?string {
		return $this->records_date;
	}

	public function setRecordsDate(?string $records_date): Records {
		$this->records_date = $records_date;
		return $this;
	}

}