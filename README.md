# myblog
build blog use nginx php mysql linux
环境：linux: ubuntu 16.04  php:5.5.38  mysql:5.6  nginx:1.54;
外网访问: http://liumeng.tunnel.qydev.com/myblog/index.php  （必须我这边得先连上网）
 
数据库表设计
用户表和文章表是一对多的关系，根据文章表的文章作者来关联
文章表和评论表是一对多关系，跟据评论表文章id关联
用户表和评论表是一对多的关系，根据评论人姓名关联
//用户表 user
id           用户id     int                  主键 自增
regname      用户名     varchar(30),         not null
regrealname  真实姓名   varchar(30),         not null
regpwd       密码       varchar(30)          not null,
regbirthday  生日        date                 not null,
regemail     邮箱        varchar(50)          not null,
regsex       性别        varchar(4),          0 男 1 女
regqq        qq         varchar(20), 
regsign      签名        varchar(200),
regintroduce 自我介绍    mediumtext,
fig          管理员标记     int(1)             default 0;

//文章表  article
id           文章  int            主键自增 , 
title        题目  varchar(100)   not null, 
content      内容  mediumtext, 
author       作者  varchar(30)    not null,
now          日期  datetime 

//评论  comment
id          评论    int           主键自增
fileid      文章id  int            not null, 
username    用户名  varchar(30)    not null, 
content     评论内容 text          not null,
datetime    日期    datetime      not null,

//公告信息，网站的一些信息public
id         公告id      int            主键自增 
title      题目        varchar(50)    not null, 
content    内容        varchar(200)   not null
pub_time   发布时间    date            not null
