#!/bin/bash

clocks=$(date +'%H')
mintus=$(date +'%M')

# pin9=$(cat /sys/class/gpio/gpio9/value)
# pin10=$(cat /sys/class/gpio/gpio10/value)

# if [ $((clocks)) -ge 20 ]; then
if [[ $((clocks)) -ge 20 ]] || [[ $((clocks)) -lt 7 ]]; then

 # echo $clocks
 echo 9 > /sys/class/gpio/export
 echo 10 > /sys/class/gpio/export
 echo "out" > /sys/class/gpio/gpio9/direction
 echo "out" > /sys/class/gpio/gpio10/direction
 echo 0 > /sys/class/gpio/gpio9/value
 echo 0 > /sys/class/gpio/gpio10/value

# else
# echo $mintus
# echo 1 > /sys/class/gpio/gpio9/value
# echo 1 > /sys/class/gpio/gpio10/value

fi

# echo 9 > /sys/class/gpio/export
# echo "out" > /sys/class/gpio/gpio9/direction
# echo 0 > /sys/class/gpio/gpio9/value
