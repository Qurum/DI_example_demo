<?php
	class Resolver
	{
		public function resolve($data): IAdapter
		{
			switch($data){
				case 'JSON': return new JSONAdapter();
				case 'XML': return new XMLAdapter();
			}
		}
	}