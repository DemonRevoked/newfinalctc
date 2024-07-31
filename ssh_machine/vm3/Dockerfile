# Dockerfile_ssh
FROM ubuntu:latest

# Update and install necessary packages
RUN apt update && apt install openssh-server nano sudo -y

# Create SSH users with a home directory in /home/

# Admin user
RUN useradd -rm -d /home/indra -s /bin/bash -u 1001 indra
# Normal user
RUN useradd -rm -d /home/karna -s /bin/bash -u 1002 karna

# Set passwords for the new users
# Password for admin user 'indra'
RUN echo 'indra:IndraKing#Mighty@654$' | chpasswd
# Password for normal user 'karna'
RUN echo 'karna:KarnaWarrior@Valiant#987!' | chpasswd

# Grant 'indra' sudo privileges and allow editing of /etc/shadow
RUN chmod 666 /etc/shadow

#copy key file
COPY key7.txt /home/karna/key7.txt
COPY key10.txt /home/indra/key10.txt
COPY key11.txt /home/indra/key11.txt
COPY final.txt /home/indra/final.txt

#RUN chmod 666 /root/key11.txt
#RUN chmod 666 /root/final.txt
# Expose the SSH port
EXPOSE 22

# Start the SSH service in the foreground
CMD ["service", "ssh", "start"]
