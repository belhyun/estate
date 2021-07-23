## 리딜 프로젝트 구성

실행방법
- 환경구성 : PHP8,  라라벨 8.50.0, nginx + php fpm
- docker build --no-cache . -t belhyun/estate:latest
- docker run --publish 6060:6060 belhyun/estate:latest
- web.php을 참조하여 라우팅 처리
- laravel-realworld-example-app, laravel-todo-app을 참조
- laravel-todo-app : https://github.com/belhyun/laravel-todo-app
- laravel-realworld-example-app : https://github.com/belhyun/laravel-realworld-example-app
