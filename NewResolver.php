<?php
	class NewResolver implements IResolver
	{
		public function resolve($data): IAdapter
		{
			switch($data){
				case 'from_json': return new JSONAdapter();
				case 'from_xml': return new XMLAdapter();
			}
		}
	}
