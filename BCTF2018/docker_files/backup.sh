#!/bin/bash
# web 路径
webpath=/var/www/html/
# web 备份路径
webbackdir=/tmp/backupweb/
# sql备份路径
mysqlbackdir=/tmp/backupsql/
# ps back
psbackup=/tmp/othersbackup/
# apache log
apache_log=/var/log/apache2/access.log
# checker log
checkerlog1=/home/moxiaoxi/checker/checker.log
checkerlog2=/home/moxiaoxi/checker/ghostdriver.log

# 用户名和密码
username=root
password=Bctf2o18123$%^

#要备份的数据库数组
databases=(bctf2018)

# 时间
time=`date +%d_%H_%M`

if [ ! -d $webbackdir ]; then
  mkdir $webbackdir
fi

if [ ! -d $mysqlbackdir ]; then
  mkdir $mysqlbackdir
fi

if [ ! -d $psbackup ]; then
  mkdir $psbackup
fi


# 备份web
cd $webpath
tar -zcvf $webbackdir$time.tar.gz ./
echo 'back web'$webbackdir$time.tar.gz

# 备份数据库
for database in ${databases[@]}
  do
    mysqldump  -u$username -p$password --single-transaction $database > $mysqlbackdir$database-$time.sql	#单个
    echo 'backup sql'$mysqlbackdir$database-$time.sql
  done

cd $psbackup
ps -ef|more > $psbackup$time.ps.txt
cp $apache_log $psbackup$time.apache2.log
cp $checkerlog1 $psbackup$time.checker.log
cp $checkerlog2 $psbackup$time.ghostdriver.log
echo 'backup others'

# backup selenium-firefox