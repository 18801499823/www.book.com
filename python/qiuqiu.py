#!D:\\software\python\python.exe 
# -*- coding: UTF-8 -*-
#print "Content-type:text/html"
print

from qiu import qiu

url = 'http://sina/dashixun/a.html'
user_agent = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0"
div = '(<div id="channel-all".*?)<div id="body" alog-alias="b">'
div1 = '<a href=("http://.*?/).*?>(.*?)</a>'
div2 = '<a href=("http://.*?/).*?>(.*?)</a>'
charset = 'GBK'
sql = 'insert into titles(url,title) values'
a = qiu( url, user_agent, div, div1, div2, charset, sql)
a.geturl()



#
#
#
#
#
#
#
#strr = q.geturl(url,user_agent ,div ,div1 ,div2 ,charset,str,sql)
#print strr
# 
# 
# headers = { 'User-Agent' : user_agent}
# request = urllib2.Request(url, headers = headers)
# response = urllib2.urlopen(request)
# content = response.read()
# print content
# navdiv = re.compile('(<div id="channel-all".*?)<div id="body" alog-alias="b">', re.S)
# item = re.search(navdiv,content)
# navCode = item.group(1)
# pattern = re.compile('<a href=("http://.*?/).*?>(.*?)</a>', re.S)
# navval = re.findall(pattern, navCode)
# patternFilter = re.compile('<div.*?</div>')
# str1=''
# val1=''
# for val in navval:
#     s=re.sub(patternFilter, '', val[1].decode('GBK').encode('utf-8'))
#     val1=val[0].decode('GBK').encode('utf-8')
#     nurl=val1[1:]
#     str='("'+nurl+'","'+s+'"),'
#     str1+=str
# navstr=str1[:-1]
# print navstr
# mysql=curd()
# mysql.getrows('insert into titles(url,title) values'+navstr)
