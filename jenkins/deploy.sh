#!/bin/sh
 
ssh app@blazedemo.com <<EOF
  cd /home/wordpress/public_html/blazemeter-demo
  git pull
  exit
EOF