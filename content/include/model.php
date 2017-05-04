<?php

abstract class Model extends Config {
    
    protected $con;
    
    public function __construct() {
		$this->con = \BASE::$con;
        
        if (isset($_GET['android_mode'])) {
			$this->androidMode = true;
		}
    }
    
    public function getCustomBodyAttributes() {
        return $this->customBodyAttributes === '' ? $this->customBodyAttributes : (' ' . $this->customBodyAttributes);
    }
    
    public function getLink() {
		return \URLS::link('/' . $this->controllerNameRaw);
	}
	
	public function addCustomCodeToHeader($code) {
		$this->customHeaderCode .= $code;
	}
    
    
	protected function getDayNumberAbs($resultIn) {
		$remainder = $resultIn % SECONDS_IN_DAY;
		$resultOut = (($resultIn - $remainder) / SECONDS_IN_DAY);
		
		return $resultOut;
	}

	protected function getDayNumber($resultIn) {
		return $this->getDayNumberAbs($resultIn) - $this->getDayNumberAbs($this->getRegisteredDayInSeconds());
	}

	protected function getImageIds() {
		$userId_safe = $this->con->real_escape_string($this->userId);
		
		$query = "SELECT timestamp_in_seconds FROM users WHERE id = '$userId_safe'";
		$result = $this->con->query($query);

		$row = $result->fetch_row();
		return intval($row[0]);
	}


	protected function getRegisteredDayInSeconds() {
		$userId_safe = $this->con->real_escape_string($this->userId);
		
		$query = "SELECT timestamp_in_seconds FROM users WHERE id = '$userId_safe'";
		$result = $this->con->query($query);

		$row = $result->fetch_row();
		return intval($row[0]);
	}
    
    public function doCommonInit() {
		
			// Getting current day
			$registerDayNumberAbs = $this->getDayNumberAbs($this->getRegisteredDayInSeconds());
			$todaysDayNumberAbs = $this->getDayNumberAbs(time());
			
			
			$dayNumber = ($todaysDayNumberAbs - $registerDayNumberAbs) % 7;
			$weekNumber = ($todaysDayNumberAbs - $registerDayNumberAbs - $dayNumber) / 7;
			
			$weekNumber++; $dayNumber++;
			$this->weekToday = $weekNumber;
			$this->dayToday = $dayNumber;
	}
}

