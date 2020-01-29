# ev loop draft

`spoll` - event loop driver library

## 相关扩展

提供事件循环相关扩展

- raw `steam_select`
- https://pecl.php.net/package/ev
- https://pecl.php.net/package/event
- https://pecl.php.net/package/uv
- https://pecl.php.net/package/swoole

## 参考项目

### Workerman

- https://github.com/walkor/Workerman (base on steam_select, ext-ev, ext-event)

```text
PHP 5.3 or Higher
A POSIX compatible operating system (Linux, OSX, BSD)
POSIX and PCNTL extensions required
Event extension recommended for better performance
```

### reactphp

- https://github.com/reactphp/event-loop (base on steam_select, ext-ev, ext-event)
- https://github.com/reactphp/http
- https://github.com/reactphp/socket
- https://github.com/reactphp/stream
- https://github.com/reactphp/promise
- https://github.com/reactphp/reactphp/wiki/Users

### amphp

- https://github.com/amphp/amp
- https://github.com/amphp/parallel
- https://github.com/amphp/http-server
- https://github.com/amphp/websocket-server

### other

- https://github.com/php-pm/php-pm
- https://github.com/spatie/async

