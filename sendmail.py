import sys
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

msg = MIMEMultipart('alternative')




e = sys.argv[1]
code = sys.argv[2]
ec=sys.argv[3]
tosend = "<p>Votre mail de connection est : "+ec+"<br><br></p>"+'<a style="text-decoration:none" href="http://localhost/project/registration.php?code='+str(code)+'"'+'>Activer votre compte</a>'

msg.attach(MIMEText(tosend, 'html'))



msg['Subject'] ="Email verfication"
msg['From'] = ""
msg['To'] = e


s = smtplib.SMTP('smtp.gmail.com' , 587)
s.starttls()
s.login(" , "")
s.sendmail("",e,msg.as_string())

