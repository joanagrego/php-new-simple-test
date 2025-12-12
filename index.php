<?php
require_once 'vendor/autoload.php';

use App\DateTimeService;
use App\HttpClientService;
use App\SessionService;
use App\LoggerService;

echo "=== Testing Breaking Changes ===\n\n";

// Test 1: Carbon breaking changes
echo "1. Testing Carbon DateTime Service...\n";
$dateService = new DateTimeService();
echo $dateService->formatDate('2024-01-15') . "\n";
print_r($dateService->getWeekRange());
echo "\n";

echo "2. Testing Guzzle HTTP Client Service...\n";
$httpService = new HttpClientService();
try {
    $result = $httpService->makeRequest('/posts/1');
    echo "Success: " . json_encode($result) . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
echo "\n";

echo "3. Testing Symfony Session Service...\n";
$sessionService = new SessionService();
$sessionService->setUser(123);
echo "User ID: " . $sessionService->getUser() . "\n\n";

echo "4. Testing Monolog Logger Service...\n";
$loggerService = new LoggerService();
$loggerService->log('Application running');

echo "\n=== All tests completed ===\n";