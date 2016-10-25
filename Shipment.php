<?

class Shipment {
	private $emailSource;
	private $trackingNumber;
	private $origin;
	private $destination;
	private $waypoints;
	private $carrier;
	private $sender;
	private $currentLocation;
	private $ETA;
	private $status;

	/*
	 * Accessors function
	 * @return shipment properties
	 */
	function getEmailSource() {
		return $this->emailSource;
	}

	function getTrackingNumber() {
		return $this->trackingNumber;
	}

	function getOrigin() {
		return $this->origin;
	}

	function getDestination() {
		return $this->destination;
	}

	function getWaypoints() {
		return $this->waypoints;
	}

	function getCarrier() {
		return $this->carrier;
	}

	function getSender() {
		return $this->sender;
	}

	function getCurrentLocation() {
		return $this->currentLocation;
	}

	function getETA() {
		return $this->ETA;
	}

	function getStatus() {
		return $this->status;
	}

	/*
	 * Update function
	 * @return error code: (-1) for API issues, (0) for other errors, (0) for success
	 */
	function update() {
		
	}
}

?>
