<?php

// IoT Device Generator Class
class IoTDeviceGenerator {
    private $deviceName;
    private $deviceType;
    private $securityLevel;

    public function __construct($deviceName, $deviceType, $securityLevel) {
        $this->deviceName = $deviceName;
        $this->deviceType = $deviceType;
        $this->securityLevel = $securityLevel;
    }

    public function generateDevice() {
        // Generate a unique device ID
        $deviceId = uniqid();

        // Generate a random encryption key
        $encryptionKey = bin2hex(random_bytes(16));

        // Create a device configuration array
        $deviceConfig = array(
            'device_id' => $deviceId,
            'device_name' => $this->deviceName,
            'device_type' => $this->deviceType,
            'security_level' => $this->securityLevel,
            'encryption_key' => $encryptionKey
        );

        return $deviceConfig;
    }
}

// Test case
$generator = new IoTDeviceGenerator('Smart Light', 'Lighting', 'High');
$deviceConfig = $generator->generateDevice();

// Print the generated device configuration
print_r($deviceConfig);

?>