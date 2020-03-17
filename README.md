# hyperf-skeleton
- master 保持和官方同步, dev 分支进行 `composer i` 后进行代码测试

## 异同
* 相比于原版仓库，这里增加了 slack 日志频道配置
* 增加了 websocket 相关控制器
* Dockerfile 是基于 PHP7.4 版本的 hyperf 开发环境镜像
    - 构建镜像 `docker build -t e_hyperf:0.1.2 .`

## 注意事项
* `app/Controller` 目录下不允许建目录
