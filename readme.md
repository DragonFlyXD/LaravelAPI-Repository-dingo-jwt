# LaravelApi-Repository-dingo-jwt  ![](https://avatars3.githubusercontent.com/u/22745316?v=3&s=30)

## 安装步骤(HOW TO USE)

- step1: 克隆该项目到本地。

  `git clone https://github.com/DragonFlyXD/LaravelAPI-Repository-dingo-jwt laraApi`

- step2: 切换到该项目根目录`cd laraApi`。

- step3: `composer install`

- step4: 赋予`storage`文件夹权限。

  `chmod -R 777 storage`

- step4: 将`.env.example`的内容复制到`.env`里,并配置里面的数据库信息与API信息。

  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=demo
  DB_USERNAME=dragonfly
  DB_PASSWORD=123456
  ```

  ```
  API_STANDARDS_TREE=vnd
  API_PREFIX=api
  API_VERSION=v1
  API_DEBUG=true
  ```

  ​

- `To be continued`

------

Laravel的API开发实例，含repository设计模式，dingoAPI与jwt-auth。

To be continued...