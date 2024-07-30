# Dockerfile_ssh
FROM demonrevoked/vuln:nmap-3.81

# Update and install necessary packages
RUN apt update && apt install openssh-server sudo -y

# Create SSH users with a home directory in /home/
# Admin user
RUN useradd -rm -d /home/krishna  -s /bin/bash -u 1001 krishna
# Normal user
RUN useradd -rm -d /home/arjun -s /bin/bash -u 1002 arjun

# Set passwords for the new users
# Password for admin user 'krishna'
RUN echo 'krishna:Krishna#Power@789$' | chpasswd
# Password for normal user 'arjun'
RUN echo 'arjun:Arjuna@Secure#123!' | chpasswd

# Set permissions on krishna's home directory to prevent other users from accessing it
COPY key6.txt /home/arjun/key6.txt
COPY key9.txt /home/krishna/key9.txt

# Allow arjun to run nmap as root without a password
RUN echo 'arjun ALL=(ALL) NOPASSWD: /usr/local/bin/nmap' >> /etc/sudoers

# Expose the SSH port
EXPOSE 22

# Start the SSH service in the foreground
CMD ["service" "ssh" "start"]
