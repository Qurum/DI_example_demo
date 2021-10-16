<?php

class NewProvider implements IProvider
{
	public function getData()
	{
		return 'from_json';
	}
}