
## despues de compilar
#Cambio de nombre de tablas para el componente jtca
TMP_JTCA="D:/www/htdocs/JPruebas/tmp/com_jtca_j34standard"
sed -i 's/#__jtca_/jt_/' $(find $TMP_JTCA -type f -not -name "*.png" | grep -v .git)