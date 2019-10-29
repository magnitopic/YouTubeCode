import RPi.GPIO  
import time  
RPi.GPIO.setmode (RPi.GPIO.BCM)  
RPi.GPIO.setup (4,RPi.GPIO.OUT)  
while True:  
    RPi.GPIO.output (4, True)  
    time.sleep(1)  
    RPi.GPIO.output (4, False)  
    time.sleep(1)  
