#!/usr/bin/python

header = open("pictures.template.header")
footer = open("pictures.template.footer")

header_lines = header.readlines();
footer_lines = footer.readlines();

for num in range(1,72):
    print num

    doc = open("%d.html" % num, 'w')

    for line in header_lines:
        doc.write(line)

    doc.write("<br>")
    if num > 1:
        doc.write("<a href=\"%d.html\" class=\"dark\"><-- Previous</a>&nbsp;&nbsp;" % (num - 1))

    doc.write("<a href=\"../pictures.html\" class=\"dark\">Up</a>&nbsp;&nbsp;")
    if num < 71:
        doc.write("<a href=\"%d.html\" class=\"dark\">Next--></a>" % (num + 1))
    doc.write("<br>\n")
    doc.write("<img alt=\"\" src=\"../Images/%d.jpg\"><p>" % num)


    for line in footer_lines:
        doc.write(line)
    doc.close()
