# Dockerfile_ssh
FROM ubuntu:latest

# Update and install necessary packages
RUN apt update && apt install openssh-server binutils sudo -y

# Create SSH users with a home directory in /home/

# Admin user
RUN useradd -rm -d /home/bhishma  -s /bin/bash -u 1001 bhishma
# Normal user
RUN useradd -rm -d /home/yudhishthira -s /bin/bash -u 1002 yudhishthira

# Set passwords for the new users
# Password for admin user 'bhishma'
RUN echo 'bhishma:BhishmaSecret#Unbreakable$789' | chpasswd
# Password for normal user 'yudhishthira'
RUN echo 'yudhishthira:YudhiPass@Strong#456!' | chpasswd

#copy usb image in first user
COPY usbimage /home/yudhishthira/usbimage
COPY key5.txt /home/yudhishthira/key5.txt
COPY key8.txt /home/bhishma/key8.txt

# Expose the SSH port
EXPOSE 22

# Start the SSH service in the foreground
CMD ["service" "ssh" "start"]
