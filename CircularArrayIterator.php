<?php

class CircularArrayIterator implements Iterator {

	private $_data = [];
	private $_keys = [];
	private $_ptr;
	private $_upperBound = null;
	
	public function __construct(array $iterable) {
		$this->_ptr = 0;
		if (count($iterable) > 0) {
			$this->_upperBound = 0;
			foreach($iterable as $key => $value) {
				array_push($this->_keys, $key);
				array_push($this->_data, $value);
				$this->_upperBound += 1;
			}
		}
	}

	public function current() {
		return $this->_data[$this->_ptr];
	}
	
	public function key() {
		return $this->_keys[$this->_ptr];
	}
	
	public function next(): void {	
		$this->_ptr += 1;
		if ($this->_ptr == $this->_upperBound) {
			$this->rewind();	
		}
	}
	
	public function rewind(): void {
		$this->_ptr = 0;
	}
	
	public function valid(): bool {
		return isset($this->_data[$this->_ptr]);
	}
	
}