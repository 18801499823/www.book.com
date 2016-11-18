#!C:/Python27/python.exe
# -*- coding: UTF-8 -*-
print "Content-type:text/html;charset=utf8"
print
import urllib
import urllib2
import re
import MySQLdb as mdb 
import ConfigParser
import sys
reload(sys)
sys.setdefaultencoding('utf-8')	 
config = ConfigParser.ConfigParser()
config.read('db.conf')
dbhost = config.get("database", "dbhost")
dbname = config.get("database", "dbname")
dbuser = config.get("database", "dbuser")
dbpassword = config.get("database", "dbpassword")
dbcharset = config.get("database", "dbcharset")
class curd:  
  
    def __init__(self,host=dbhost,user=dbuser,pwd=dbpassword,database=dbname,autocommit=False):  
        try:  
            self.isConnect = False  
  
            self.conn = mdb.connect( host, user,  
                pwd, database,charset="utf8");  
  
            self.isConnect = True  
  
            self.cursor = self.conn.cursor(cursorclass = mdb.cursors.DictCursor)  
            self.cursor.execute("SELECT VERSION()")  
  
            data = self.cursor.fetchone()  
  
            if autocommit:  
                self.conn.autocommit(True)  
            else:  
                self.conn.autocommit(False)  
  
        except mdb.Error as e:  
            print ( "Connect Error %d: %s" % (e.args[0],e.args[1]) )  
   
  
    def close(self):  
        try:  
            self.cursor.close()  
            self.conn.close()  
        except mdb.Error as e:  
            print ( "Close Error %d: %s" % (e.args[0],e.args[1]) )  
  
    def excute(self,sql=""):  
        try:  
            self.cursor.execute(sql)  
        except mdb.Error as e:  
            print ( "Excute Error %d: %s" % (e.args[0],e.args[1]) )  
            print ( "Excute sql= %s" % sql )  
  
    def getrows(self,sql):  
        try:  
            self.excute(sql)
            rows = self.cursor.fetchall()
            return rows 
        except mdb.Error as e:  
            print ( "getrows Error %d: %s" % (e.args[0],e.args[1]) )

    def getdel(self,table,id):  
        try:
            sql="DELETE FROM "+table+" WHERE id="+id
            self.excute(sql)
            return 'true'
        except mdb.Error as e:  
            print ( "getdel Error %d: %s" % (e.args[0],e.args[1]) )

    def getdelall(self,table,id):  
        try:
            sql="DELETE FROM "+table+" WHERE id in ("+id+")"
            self.excute(sql)
            return 'true'
        except mdb.Error as e:  
            print ( "getdel Error %d: %s" % (e.args[0],e.args[1]) )
            
    def getupdate(self,table,num,id):  
        try:
            sql="UPDATE "+table+" SET "+num+" WHERE id="+id
            self.excute(sql)
            return 'true'
        except mdb.Error as e:  
            print ( "getupdate Error %d: %s" % (e.args[0],e.args[1]) )
    
    def selectDB(self,dbName):  
        self.conn.select_db(dbName)  
  
    def commit(self):  
        self.conn.commit()  
  
    def rollback(self):  
        self.conn.rollback()  
  
    def setautocommit(self,auto=False):  
        self.conn.autocommit(auto)  
  
    def isConnected(self):  
        return self.isConnect
		
class qiu(curd):
    """docstring for qiu"""
    def __init__(self, url, user_agent, div, div1, div2, charset,sql):
        self.url = url
        self.user_agent = user_agent
        self.div = div
        self.div1 = div1
        self.div2 = div2
        self.charset = charset
        self.sql = sql

    def geturl(self):
        headers = { 'User-Agent' : self.user_agent}
        request = urllib2.Request(self.url, headers = headers)
        response = urllib2.urlopen(request)
        content = response.read()
        # print content
        navdiv = re.compile(self.div, re.S)
        item = re.search(navdiv,content)
        navCode = item.group(1)
        pattern = re.compile(self.div1, re.S)
        navval = re.findall(pattern, navCode)
        patternFilter = re.compile(self.div2)
        str1=''
        val1=''
        for val in navval:
            s=re.sub(patternFilter, '', val[1].decode('GBK').encode('utf-8'))
            val1=val[0].decode(self.charset).encode('utf-8')
            nurl=val1[1:]
            str='("'+nurl+'","'+s+'"),'
            str1+=str
        navstr=str1[:-1]
        print navstr 
#下面是测试代码  
#db = curd()   
#rows = db.getrows("select * from two")
#print rows
#for index,val in enumerate(rows):
#    id=val['id']
#	name=val['name'].encode('utf8')
#	address=val['address'].encode('utf8')
#db.close()  
