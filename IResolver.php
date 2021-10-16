<?php
	interface IResolver
	{
		public function resolve(string $data): IAdapter;
	}