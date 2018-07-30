<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: false");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=utf-8");
echo json_encode($data);
