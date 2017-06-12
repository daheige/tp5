    # tp5
    #desc:tp5 multi module 本框架采用tp5.0.9定做而成，支持分組模塊
    #author； git@daheige.com
    #apache配置：请看docs/hgtest.com.conf
    #nginx配置：
    在Nginx低版本中，是不支持PATHINFO的，但是可以通过在Nginx.conf中配置转发规则实现：
    location / { // …..省略部分代码
        if (!-e $request_filename) {
        rewrite ^(.*)$ /index.php?s=/$1 last;
        break;
        }
    }
