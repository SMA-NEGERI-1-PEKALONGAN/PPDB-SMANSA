<?php

if (!function_exists('getServerMacAddress')) {
    function getServerMacAddress() {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $output = shell_exec("ipconfig /all");
        } else {
            $output = shell_exec("ifconfig -a");
        }

        preg_match('/([0-9a-fA-F]{2}[:-]){5}([0-9a-fA-F]{2})/', $output, $matches);

        return $matches[0] ?? 'MAC address not found';
    }
}

if (!function_exists('getClientMacAddress')) {
    function getClientMacAddress($ipAddress) {
        $output = shell_exec("arp -a " . escapeshellarg($ipAddress));

        preg_match('/([0-9a-fA-F]{2}[:-]){5}([0-9a-fA-F]{2})/', $output, $matches);

        return $matches[0] ?? 'MAC address not found';
    }
}

?>