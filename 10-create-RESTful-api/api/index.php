<?php
declare(strict_types=1);
require dirname(__DIR__) . "/api/bootstrap.php";

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$parts = explode("/", $path);
$resource = $parts[4];
$id = $parts[5] ?? null;
if ($resource != "tasks") {
    http_response_code(404);
    exit;
}

$database = new Database($_ENV["DB_HOST"], $_ENV["DB_NAME"], $_ENV["DB_USER"], $_ENV["DB_PASS"]);
$user_gateway = new UserGateway($database);
$auth = new Auth($user_gateway);
if (!$auth->authenticateAPIKey()) {
    exit;
}

$user_id = $auth->getUserId();
$taskGateway = new TaskGateway($database);
$controller = new TaskController($taskGateway, $user_id);
$controller->processRequest($_SERVER['REQUEST_METHOD'], $id);
?>