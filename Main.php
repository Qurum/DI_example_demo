<?php

class Main
{
	private $provider;
	private $resolver;
	
	public function __construct(IProvider $provider, IResolver $resolver)
	{
		$this->provider = $provider;
		$this->resolver = $resolver;
	}
	
	public function run()
	{
		$data = $this->provider->getData();
		$adapter = $this->resolver->resolve($data);
		echo $adapter->proceed($data);
	}
}