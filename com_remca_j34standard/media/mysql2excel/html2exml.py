#!/usr/bin/python3
# -*- coding: utf-8 -*-
#
# Manolo Mondragon, caballeroantonio@hotmail.com
# mysql -h exporta en una sola linea, mysqlworkbench exporta con saltos de linea en los tags pero reemplazando los saltos por espacio en las celdas
debug_flag = 0

import cgi
import codecs
import sys
import re
from html.parser import HTMLParser

isaref = re.compile(r'^\d{32}$')
isanum = re.compile(r'^-?[\d.]+$')
isadot = re.compile(r'\.[^\d]')
ismdot = re.compile(r'\..*\.')
isanul = re.compile(r'^NULL$')

def do_error( mensaje ): 
    print (mensaje)
    sys.exit(0)
    return

class formHTMLParser(HTMLParser):

    def reset(self):
        HTMLParser.reset(self)
        self.in_table = False
        self.in_row = False
        self.has_content = False
        self.rows = 0
        self.columns = 0
        self.maxcolumns = 0
    def handle_starttag(self, tag, attrs):
        if debug_flag: print ("<TAG>:", tag)
        if tag == 'table':
            self.contents=['<Worksheet ss:Name="Sheet1"><Table ss:ExpandedColumnCount="24" ss:ExpandedRowCount="1000" x:FullColumns="1" x:FullRows="1">',]
        elif tag == 'tr':
            self.contents.append("<Row>")
            self.in_row = True
        elif tag == 'td' or tag == 'th':
            self.in_table = True
            self.has_content = False

    def handle_data(self, data):
        data = cgi.escape(data) #&<> => &amp; &lt; &gt;
        data = re.sub(r'\n','&#10;', data )
        if debug_flag: print ("<DA/>:", data)
        if self.in_table and self.in_row :
            tepestring = "String"
            data = data.strip(' \t\r\n')
            if isaref.match( data ):
                data = data[:11] + ' ' + data[11:24] + ' ' + data[24:]
            elif isadot.match( data ):
                pass
            elif ismdot.match( data ):
                pass
            elif len(data) < 10 and isanum.match( data ):
                tepestring = "Number"
            elif isanul.match( data ):
                data = ""
            self.contents.append( '<Cell><Data ss:Type="' + tepestring + '">' + data + '</Data></Cell>')
            self.columns += 1
            self.has_content = True
    def handle_endtag(self, tag):
        if debug_flag: print ("</TAG>:", tag)
        if tag == 'table':
            self.in_table = False
            self.in_row = False			
            self.contents.append("</Table></Worksheet>")
            self.contents[0] = self.contents[0].replace('24', str(self.maxcolumns))
            self.contents[0] = self.contents[0].replace('1000', str(self.rows))
			
        elif tag == 'td' or tag == 'th':
            self.in_table = False
            if not self.has_content:
                self.contents.append( '<Cell><Data ss:Type="String"></Data></Cell>')
            self.has_content = False
        elif tag == 'tr':
            self.in_row = False
            self.in_table = False
            self.contents.append("</Row>")
            if self.columns > self.maxcolumns:
                self.maxcolumns = self.columns
            self.rows += 1
            self.columns = 0

#export to excel
def main():    
    if(len(sys.argv)<2):
        do_error("elige un archivo")
    file = sys.argv[1]
        
    try:
        f = codecs.open(file, 'r', 'utf-8')
        html_contents = f.read()
        #aqui no se debe poner
        #html_contents = html_contents.encode('ascii', 'xmlcharrefreplace').decode("utf-8")
        f.close()
    except IOError:
        do_error ('cannot open ' + file)
    parser = formHTMLParser()
    parser.feed( html_contents ) 
        
    print ("\n".join(( '<?xml version="1.0" encoding="utf-8" ?>',
                        '<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"',
                        'xmlns:o="urn:schemas-microsoft-com:office:office"',
                        'xmlns:x="urn:schemas-microsoft-com:office:excel"',
                        'xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"',
                        'xmlns:html="http://www.w3.org/TR/REC-html40">',
                        '<Styles>',
                        '<Style ss:ID="Default" ss:Name="Normal">',
                        '<Alignment ss:Vertical="Bottom" ss:WrapText="1"/>',
                        '<Borders/>',
                        '<Font/>',
                        '<Interior/>',
                        '<NumberFormat/>',
                        '<Protection/>',
                        '</Style>',
                        '</Styles>',
    )))
    #replace by entyties ¡¢£¤¥¦§¨©ª«¬­®¯°±²³´µ¶·¸¹º»¼½¾¿ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõö÷øùúûüýþÿ
    print ("\n".join( parser.contents ).encode('ascii', 'xmlcharrefreplace').decode("utf-8"))
    print ("\n</Workbook>")
    
main()