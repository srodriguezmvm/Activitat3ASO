#!/bin/bash
echo "Borrando el grupo "$1
sudo samba-tool group delete $1
sleep 2
echo "El grupo "$1" esta eliminado"