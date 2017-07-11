#!/bin/bash
#1. EL PRIMER ARGUMENTO ES EL CSV
#2. EL SEGUNDO ARGUMENTO ES EL SEPARADOR
#3. EL TERCER ARGUMENTO ES LA COLUMNA DE GRUPO
#4. EL CUARTO ARGUMENTO ES LA SALIDA SQL
 
cp $1 csv_tmp.tmp
sed -i '1d' csv_tmp.tmp
echo "INSERT INTO grupo(nombre) VALUES " > $4
awk 'BEGIN { FS = "'$2'" }; { print "(\""$'$3'"\"),"}' csv_tmp.tmp | sort | uniq | sed '$s/.$//' >> $4
rm -f csv_tmp.tmp
