#!/bin/bash

for host in \
  192.168.33.11 \
  192.168.33.12 \
  192.168.33.21 \
  192.168.33.22 \
; do
  expect -c "
    set timeout 5
    spawn env LANG=C ssh-copy-id $host
    expect {
      \"(yes/no)?\" {
        send \"yes\n\"
        exp_continue
      }
      \"password:\" {
        send \"vagrant\n\"
      }
    }
    expect eof
  "
done
