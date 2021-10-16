<?php

interface IAdapter
{
	public function proceed($data): string;
}