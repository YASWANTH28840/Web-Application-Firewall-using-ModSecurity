# Web-Application-Firewall-using-ModSecurity
I have implemented WAF using mod security.The model also addresses SQL attacks which is generally injected through text boxes which pass data to web application via web requests or sometimes using URLs.  first we will be installing nginx and then we will confire it to mod security so,here nginx is open source web sever and  mod security acts as security application module for nginx web server.  in my project test will be done with sql injection which it will identify all the threats using mod secuirty.

The ModSecurity-nginx connector takes the form of an Nginx module that provides a layer of communication between Nginx and ModSecurity.

To begin the installation process, follow the steps outlined below:

Install all the dependencies required for the build and compilation process with the following command:

sudo apt-get install bison build-essential ca-certificates curl dh-autoreconf doxygen \
  flex gawk git iputils-ping libcurl4-gnutls-dev libexpat1-dev libgeoip-dev liblmdb-dev \
  libpcre3-dev libpcre++-dev libssl-dev libtool libxml2 libxml2-dev libyajl-dev locales \
  lua5.3-dev pkg-config wget zlib1g-dev zlibc libxslt libgd-dev
Ensure that git is installed:

sudo apt install git
Clone the ModSecurity Github repository from the /opt directory:

cd /opt && sudo git clone https://github.com/SpiderLabs/ModSecurity
Change your directory to the ModSecurity directory:

cd ModSecurity
Run the following git commands to initialize and update the submodule:

sudo git submodule init
sudo git submodule update
Run the build.sh script:

sudo ./build.sh
Run the configure file, which is responsible for getting all the dependencies for the build process:

sudo ./configure
Run the make command to build ModSecurity:

sudo make
After the build process is complete, install ModSecurity by running the following command:

sudo make install
Downloading ModSecurity-Nginx Connector
Before compiling the ModSecurity module, clone the Nginx-connector from the /opt directory:

cd /opt && sudo git clone --depth 1 https://github.com/SpiderLabs/ModSecurity-nginx.git
