#!/bin/bash
generate_key() {
  local prefix=$1
  local suffix=$2
  local middle_part=$(cat /dev/urandom | tr -dc 'a-zA-Z0-9' | fold -w 16 | head -n 1)
  echo "${prefix}${middle_part}${suffix}"
}

key1=$(generate_key "tqagehxF" "naTsjyql")
key2=$(generate_key "fjD2rfaD" "jI2gxUab")
key3=$(generate_key "5d26CrfD" "aiy4X4na")
key4=$(generate_key "hAshnZnq" "jiu62Dnb")
key5=$(generate_key "9kDk7sPp" "ndQw4xTr")
key6=$(generate_key "wU3r4zDf" "laCs8gKj")
key7=$(generate_key "mV8y6bNj" "qsFt3xHp")
key8=$(generate_key "eB1v9pLk" "tjPz7dMr")
key9=$(generate_key "cR5x3wQs" "voXy6nLp")
key10=$(generate_key "gT7z8vFm" "pbYw2kNd")
key11=$(generate_key "lQ2x5sWp" "riVt9jNz")

echo "KEY1: $key1" > web_page/src/admin/key1.txt
echo "KEY2: $key2" > web_page/src/login/key2.txt
echo "KEY3: $key3" > web_page/src/credentials/key3.txt
echo "Disallow: /ftp KEY4: $key4" > web_page/src/robots.txt
echo "KEY5: $key5" > ssh_machine/vm1/key5.txt
echo "KEY6: $key6" > ssh_machine/vm2/key6.txt
echo "KEY7: $key7" > ssh_machine/vm3/key7.txt
echo "KEY8: $key8" > ssh_machine/vm1/key8.txt
echo "KEY9: $key9" > ssh_machine/vm2/key9.txt
echo "KEY10: $key10" > ssh_machine/vm3/key10.txt
echo "KEY11: $key11" > ssh_machine/vm3/key11.txt

# Print the key to the console
docker-compose up --build -d
