#!D:\\software\python\python.exe  
# -*- coding: UTF-8 -*-

#cgi 的处理
import cgi, cgitb

#创建 FieldStorage 实例化
form = cgi.FieldStorage()

#获取数据
username = form.getvalue('username') #接收用户名

import MySQLdb

# 打开数据库连接
db = MySQLdb.connect("localhost","root","12580","zm",charset='utf8' )

# 使用cursor()方法获取操作游标 
cursor = db.cursor()

# SQL 插入语句
sql = "INSERT INTO users(username) \
       VALUES ('%s')" % \
       (username)
try:
   # 执行sql语句
   cursor.execute(sql)
   # 提交到数据库执行
   db.commit()
except:
   # 发生错误时回滚
   db.rollback()

# 关闭数据库连接
db.close()
print("Content-type:text/html\r\n\r\n")  
print                               # 空行，告诉服务器结束头部
print("<html>") 
'''
头部 
''' 
print("<head>") 
'''
语言声明
'''
print '<meta charset="utf-8">'
'''
导航标题
'''  
print("<title>")  
print("Hello,python")  
print("</title>")

print("</head>")  

'''
主体
''' 
print("<body>")
print("</body>")
print("<html>")  
