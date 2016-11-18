#!D:\\software\python\python.exe  
# -*- coding: UTF-8 -*-
#import cgi, cgitb   
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

'''
页面大标题
'''
print("<h1>")
print("制作表单")  
print("</h1>")

'''
表单
'''
print("<form action='/cgi-bin/insert1.py' method='post'>")
'''
表格
'''
print("<table>")
'''
行
'''  
print("<tr>") 
'''
列
''' 
print("<td>")
print("请添加用户名")  
print("</td>")

print("<td>")
print("<input type='text' name='username' />") # 输入用户名  
print("</td>")

print("</tr>")

print("<tr>") 
print("<td>")
print("")  
print("</td>")

print("<td>")
print("<input type='submit' value='提交' />") # 输入用户名  
print("</td>")

print("</tr>")

print("</table>")

print("</form>")

print("</center>")

print("</body>")

print("<html>")  