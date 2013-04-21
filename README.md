## phprpc php mysql

hello, phprpc + php + mysql 

### 创建数据库：
<pre>
create database phprpc_php_mysql default character set utf8;
</pre>

### 创建 user 表：
<pre>
use phprpc_php_mysql;

CREATE TABLE user (  
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    PRIMARY KEY (id)  
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO user(username, password) values('admin', 'admin');
</pre>