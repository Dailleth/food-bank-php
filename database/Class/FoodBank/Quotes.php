<?php

namespace Database\Class\FoodBank;

class Quotes implements \JsonSerializable {

	private ?int $idquotes = null;
	private ?string $quotes_hour = null;
	private ?string $quotes_date = null;
	private ?int $idusers = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Quotes {
		$quotes = new Quotes();

		$quotes->setIdquotes(
			isset(request->idquotes) ? request->idquotes : null
		);

		$quotes->setQuotesHour(
			isset(request->quotes_hour) ? request->quotes_hour : null
		);

		$quotes->setQuotesDate(
			isset(request->quotes_date) ? request->quotes_date : null
		);

		$quotes->setIdusers(
			isset(request->idusers) ? request->idusers : null
		);

		return $quotes;
	}

	public function getIdquotes(): ?int {
		return $this->idquotes;
	}

	public function setIdquotes(?int $idquotes): Quotes {
		$this->idquotes = $idquotes;
		return $this;
	}

	public function getQuotesHour(): ?string {
		return $this->quotes_hour;
	}

	public function setQuotesHour(?string $quotes_hour): Quotes {
		$this->quotes_hour = $quotes_hour;
		return $this;
	}

	public function getQuotesDate(): ?string {
		return $this->quotes_date;
	}

	public function setQuotesDate(?string $quotes_date): Quotes {
		$this->quotes_date = $quotes_date;
		return $this;
	}

	public function getIdusers(): ?int {
		return $this->idusers;
	}

	public function setIdusers(?int $idusers): Quotes {
		$this->idusers = $idusers;
		return $this;
	}

}