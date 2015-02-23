#!/bin/sh
 
ssh app@blazedemo.com <<EOF
  cd /home/wordpress/public_html/blazemeter-demo-qa
  git pull
  exit
EOF