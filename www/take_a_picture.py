#!/usr/bin/env python

import picamera
import os
#os.chdir("code_python/")
#print os.getcwd()
camera = picamera.PiCamera()
camera.capture('image.jpg')
