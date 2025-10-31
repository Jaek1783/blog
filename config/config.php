<?php
/**
 * 기본 설정 파일
 */

// 에러 리포팅 (개발 환경)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 타임존 설정
date_default_timezone_set('Asia/Seoul');

// 세션 시작
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// .env.local 파일 로드
function loadEnv($path) {
    if (!file_exists($path)) {
        die('.env.local 파일을 찾을 수 없습니다.');
    }
    
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // 주석 제외
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        
        // KEY=VALUE 파싱
        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);
        
        // 환경 변수로 설정
        if (!array_key_exists($key, $_ENV)) {
            $_ENV[$key] = $value;
            putenv("$key=$value");
        }
    }
}

// .env.local 로드
loadEnv(__DIR__ . '/../.env.local');

// 상수 정의
define('SITE_NAME', getenv('SITE_NAME') ?: 'My Blog');
define('SITE_URL', getenv('SITE_URL') ?: 'http://localhost');
define('TIMEZONE', getenv('TIMEZONE') ?: 'Asia/Seoul');

// 경로 상수
define('BASE_PATH', dirname(__DIR__));
define('PUBLIC_PATH', BASE_PATH . '/public');
define('CONFIG_PATH', BASE_PATH . '/config');
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('UPLOADS_PATH', BASE_PATH . '/uploads');

