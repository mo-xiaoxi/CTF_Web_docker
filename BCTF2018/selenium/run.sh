#!/bin/bash
echo 'Move files...'
sudo mv /tmp/selenium/Th3_MosT_S3cR3T_fLag /Th3_MosT_S3cR3T_fLag

echo 'Check authority...'
sudo chown seluser:seluser /Th3_MosT_S3cR3T_fLag
sudo chmod 444 /Th3_MosT_S3cR3T_fLag 
sudo chown root:root /tmp/selenium
sudo chmod 620 /tmp/selenium

sudo sh -c "echo '172.20.0.3      ctf.momomoxiaoxi.com'>>/etc/hosts"





