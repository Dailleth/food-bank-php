<?php

namespace Database\Class\FoodBank;

class Inventories implements \JsonSerializable {

	private ?int $idinventories = null;
	private ?int $inventories_amount = null;
	private ?string $inventories_date_admission = null;
	private ?string $inventories_expiration_date = null;
	private ?int $idproducts = null;
	private ?int $idusers = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Inventories {
		$inventories = new Inventories();

		$inventories->setIdinventories(
			isset(request->idinventories) ? request->idinventories : null
		);

		$inventories->setInventoriesAmount(
			isset(request->inventories_amount) ? request->inventories_amount : null
		);

		$inventories->setInventoriesDateAdmission(
			isset(request->inventories_date_admission) ? request->inventories_date_admission : null
		);

		$inventories->setInventoriesExpirationDate(
			isset(request->inventories_expiration_date) ? request->inventories_expiration_date : null
		);

		$inventories->setIdproducts(
			isset(request->idproducts) ? request->idproducts : null
		);

		$inventories->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		return $inventories;
	}

	public function getIdinventories(): ?int {
		return $this->idinventories;
	}

	public function setIdinventories(?int $idinventories): Inventories {
		$this->idinventories = $idinventories;
		return $this;
	}

	public function getInventoriesAmount(): ?int {
		return $this->inventories_amount;
	}

	public function setInventoriesAmount(?int $inventories_amount): Inventories {
		$this->inventories_amount = $inventories_amount;
		return $this;
	}

	public function getInventoriesDateAdmission(): ?string {
		return $this->inventories_date_admission;
	}

	public function setInventoriesDateAdmission(?string $inventories_date_admission): Inventories {
		$this->inventories_date_admission = $inventories_date_admission;
		return $this;
	}

	public function getInventoriesExpirationDate(): ?string {
		return $this->inventories_expiration_date;
	}

	public function setInventoriesExpirationDate(?string $inventories_expiration_date): Inventories {
		$this->inventories_expiration_date = $inventories_expiration_date;
		return $this;
	}

	public function getIdproducts(): ?int {
		return $this->idproducts;
	}

	public function setIdproducts(?int $idproducts): Inventories {
		$this->idproducts = $idproducts;
		return $this;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): Inventories {
		$this->idusers = $idusers;
		return $this;
	}

}