# Import modules for CGI handling 
 import cgi, cgitb 
 
 # Create instance of FieldStorage 
 form = cgi.FieldStorage() 
 
 # Get data from field 'name' 
 name = form.getvalue('name')  
 
 # Get data from field 'email' 
 email = form.getvalue('email')
 
 print form["name"].value