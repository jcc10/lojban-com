#!/usr/bin/python
"""This is the PythonHandler module for lojban-com. http://code.google.com/p/lojban-com/"""

from mod_python import apache

def handler(req):
    req.content_type = "text/html";
    req.write("Bar");
    return apache.OK;
