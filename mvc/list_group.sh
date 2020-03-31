#!/bin/bash
rm group.txt
echo  "listando grupos"
sudo samba-tool group list > group.txt