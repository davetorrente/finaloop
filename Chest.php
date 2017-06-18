<?php
class Chest
{
	protected $lock;

	protected $isClosed;
	
	public function __construct($lock){

		$this->lock = $lock;	
	}

	public function closed()
	{	

		if($this->isClosed())
		{
			$this->lock->lock();
		}
		
		

		echo "closed";
	}

	public function open()
	{

		if($this->lock->isLocked())
		{
			$this->lock->unlock();
		}	

		$this->isClosed = false;	

		echo "open";
	}

	public function isClosed()
	{
		return $this->isClosed = true;
	}

	
	
}