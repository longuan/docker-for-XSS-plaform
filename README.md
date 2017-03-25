# docker-for-XSS-plaform
用docker 迅速部署自己的xss平台

## 安装使用

- clone 项目到本地
> git clone https://github.com/solei1/docker-for-XSS-plaform

- 修改配置文件

    + 进入到XSS目录
    + 修改config.php文件 `$config['urlroot']      ='http://ip:port';` 后面的网址改为自己域名或者ip
    + 修改setup.php文件倒数第二行，将 `http://ip:port`改为自己的域名或者ip（与上一步一致）
    + 修改setup.php文件最后一行， 设置管理员帐号， 默认是admin:admin123

- 退回到Dockerfile所在目录， 执行
> docker build -t xssplatform/solei1:1.0 .

- 启动docker (自己选择映射的端口代替port,与前面一致)
> docker run -d -p port:80 xssplatform/solei1

- 首先访问http://ip:port/setup.php，进行数据库初始化
> http://ip:port/setup.php

- 之后就可以用你修改的管理员帐号登陆到xssplatform了