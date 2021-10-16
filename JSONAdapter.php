<?php

class JSONAdapter implements IAdapter
{
	public function proceed(string $s)
	{
		return '$s has been converted from JSON.';
	}
}