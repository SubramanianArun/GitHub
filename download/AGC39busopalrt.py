'''
Created on Sep 25, 2015
@author: CPS

This AGC function works based on OPC server, it's specifically designed for the RTDS IEEE 9-Bus model area 1.
Preset tie line flows and GOV model need to be checked for other application.   
'''


import OpenOPC
import time

opc=OpenOPC.open_client('localhost')
opc.connect('Kepware.KEPServerEX.V5','localhost')
OPAL_RT_tags=['OPAL_RT.OPAL_RT_device.OPAL_RT_tags.PL0201','OPAL_RT.OPAL_RT_device.OPAL_RT_tags.PL0304','OPAL_RT.OPAL_RT_device.OPAL_RT_tags.PL1716','OPAL_RT.OPAL_RT_device.OPAL_RT_tags.PL0809','OPAL_RT.OPAL_RT_device.OPAL_RT_tags.PL0403','OPAL_RT.OPAL_RT_device.OPAL_RT_tags.PL1415','OPAL_RT.OPAL_RT_device.OPAL_RT_tags.W1']

DeltaP1=0
DeltaP2=0

while 1:
    '''
    1. Measurements reading.
    '''
    f, quality6,time6=opc.read(OPAL_RT_tags[6])
    PL1415,quality5,time5=opc.read(OPAL_RT_tags[5])
    PL0403,quality4,time4=opc.read(OPAL_RT_tags[4])
    PL0809,quality3,time3=opc.read(OPAL_RT_tags[3])
    PL1716,quality2,time2=opc.read(OPAL_RT_tags[2])
    PL0304,quality1,time1=opc.read(OPAL_RT_tags[1])
    PL0201,quality0,time0=opc.read(OPAL_RT_tags[0])
    print f,PL1415,PL0403,PL0809,PL1716,PL0304,PL0201
    
    '''
    2. ACE calculation
    '''
    '''
    '''
    ACE1=((PL0201+1.167)+(PL0304-1.06)+(PL1716-3.8))/10+(f-60)*(0.05+1/0.088)/60
    print ACE1
    ACE2=((PL0809+0.327)+(PL0403-1.057)+(PL1415+0.78))/10+(f-60)*(0.05+1/0.088)/60
    print ACE2
    '''
    ACE1=-(f-60)*(0.05+(1/0.088))/60
    print ACE1
    ACE2=-(f-60)*(0.05+(1/0.088))/60
    print ACE2
    '''
    DeltaP1=DeltaP1-(ACE1*1000)
    print DeltaP1
    DeltaP2=DeltaP2-(ACE2*1000)
    print DeltaP2
    
    '''
    3. Before carrying out the AGC command, resiliency implementation.
    '''
    
    '''
    4. AGC command set. 
    '''
    opc.write(('OPAL_RT.OPAL_RT_device.OPAL_RT_tags.ACE1', DeltaP1))
    opc.write(('OPAL_RT.OPAL_RT_device.OPAL_RT_tags.ACE2', DeltaP2))
    time.sleep(4)
