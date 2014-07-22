<?php

class Queue {

	private $redis;

	public function __construct() {
		$this->redis = new Redis();
	}

	public function pop($key, $score) {
		$redis->zRange($key, 0, $score);
	}

	public function push($key, $value, $score) {
		return $this->redis->zAdd($key, $score, $value);
	}
}
