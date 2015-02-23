#!/bin/sh
 
ssh app@blazedemo.com <<EOF
  cd /home/wordpress/public_html/blazemeter-demo-staging
  git pull
  exit
EOF