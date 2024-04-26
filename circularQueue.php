<?php
class CircularQueue {
private $items;
private $size;
private $currentIndex;

public function __construct(array $items) {
$this->items = $items;
$this->size = count($items);
$this->currentIndex = 0;
}

public function getNextItem() {
$item = $this->items[$this->currentIndex];
$this->currentIndex = ($this->currentIndex + 1) % $this->size;
return $item;
}
}





?>
