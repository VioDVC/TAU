#!/usr/bin/env bash

DB_CMD=mysql
DB_SERVER="${MYSQL_HOST:-localhost}"
DB_USER="${MYSQL_USER:-root}"
DB_PASS="${MYSQL_PASSWORD:-test}"
# set DB_DATABASE=

echo -- TAUv1.sql
$DB_CMD --line-numbers -v -v -v -h $DB_SERVER -u $DB_USER -p$DB_PASS < TAUv1.sql

for i in 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27
do
 echo -- TAUv1.$i.sql
 $DB_CMD --line-numbers -v -v -v -h $DB_SERVER -u $DB_USER -p$DB_PASS < TAUv1.$i.sql
done