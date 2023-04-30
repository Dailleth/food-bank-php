<?php

namespace Database\Class\FoodBank;

class Products implements \JsonSerializable {

	private ?int $idproducts = null;
	private ?string $products_names = null;
	private ?int $idproducts_types = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Products {
		$products = new Products();

		$products->setIdproducts(
			isset(request->idproducts) ? request->idproducts : null
		);

		$products->setProductsNames(
			isset(request->products_names) ? request->products_names : null
		);

		$products->setIdproductsTypes(
			isset(request->idproducts_types) ? request->idproducts_types : null
		);

		return $products;
	}

	public function getIdproducts(): ?int {
		return $this->idproducts;
	}

	public function setIdproducts(?int $idproducts): Products {
		$this->idproducts = $idproducts;
		return $this;
	}

	public function getProductsNames(): ?string {
		return $this->products_names;
	}

	public function setProductsNames(?string $products_names): Products {
		$this->products_names = $products_names;
		return $this;
	}

	public function getIdproductsTypes(): ?int {
		return $this->idproducts_types;
	}

	public function setIdproductsTypes(?int $idproducts_types): Products {
		$this->idproducts_types = $idproducts_types;
		return $this;
	}

}