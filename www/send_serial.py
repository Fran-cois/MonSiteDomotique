#!/usr/bin/env python

import serial,sys,time
ser = serial.Serial('/dev/ttyUSB0', 9600)
print ser.readline()
print ser.write(str(sys.argv[1]))
ser.close()
exit()
