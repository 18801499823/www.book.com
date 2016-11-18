#!D:\\software\python\python.exe  
# -*- coding: UTF-8 -*-
#import cgi, cgitb

import MySQLdb
import sys
reload(sys)
sys.setdefaultencoding('utf-8')

# 打开数据库连接
db = MySQLdb.connect("localhost","root","12580","zm",charset='utf8')

# 使用cursor()方法获取操作游标 
cursor = db.cursor()

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
'''
页面居中
'''
print("<center>")

# SQL 查询语句
sql = "SELECT * FROM users"
try:
   # 执行SQL语句
   cursor.execute(sql)
   # 获取所有记录列表
   results = cursor.fetchall()
   for row in results:
      username = row[2].decode('utf-8')
      # 打印结果
      print "username=%s" % \
             (username)
      print "<br />"
except:
   print "Error: unable to fecth data"


print("</center>")

print("</body>")

print("<html>")  

# 关闭数据库连接
db.close()
