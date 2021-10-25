<?php

class XMLAdapter implements IAdapter
{
	public function proceed(string $s)
	{
		return '$s has been converted from XML.';
	}
}
