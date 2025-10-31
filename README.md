# 최재근 개인 블로그
```
/var/www/blog/
├── config/
│   ├── config.php          # 기본 설정 (세션, 타임존, 환경변수)
│   └── database.php        # 데이터베이스 연결
├── includes/
│   └── functions.php       # 헬퍼 함수들 (레이아웃, 인증, 유틸리티)
├── templates/
│   ├── layouts/
│   │   ├── header.php      # 공통 헤더 (네비게이션 포함)
│   │   └── footer.php      # 공통 푸터
│   └── pages/

├── public/
│   ├── css/
│   │   └── style.css       # 메인 스타일시트
│   ├── js/
│   │   └── main.js         # 메인 JavaScript
│   ├── index.php           # 메인 페이지
├── uploads/                 # 파일 업로드 디렉토리
├── .env.local              # 환경 변수 설정 (DB 정보 등)
└── README.md               # 프로젝트 설명
```
