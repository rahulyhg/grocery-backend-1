# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = '2'

@script = <<SCRIPT
# Install dependencies
apt-get install -y software-properties-common
add-apt-repository -y ppa:ondrej/php
apt-get update
apt-get install -y apache2 git curl php7.1 php7.1-bcmath php7.1-bz2 php7.1-cli php7.1-curl php7.1-intl php7.1-json php7.1-mbstring php7.1-opcache php7.1-soap php7.1-sqlite3 php7.1-xml php7.1-xsl php7.1-zip libapache2-mod-php7.1

# Configure Apache
echo "<VirtualHost *:80>
	DocumentRoot /var/www/public
	AllowEncodedSlashes On

	<Directory /var/www/public>
		Options +Indexes +FollowSymLinks
		DirectoryIndex index.php index.html
		Order allow,deny
		Allow from all
		AllowOverride All
	</Directory>

	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>" > /etc/apache2/sites-available/000-default.conf
a2enmod rewrite
service apache2 restart

if [ -e /usr/local/bin/composer ]; then
    /usr/local/bin/composer self-update
else
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
fi

# Reset home directory of vagrant user
if ! grep -q "cd /var/www" /home/vagrant/.profile; then
    echo "cd /var/www" >> /home/vagrant/.profile
fi

echo "** [ZF] Run the following command to install dependencies, if you have not already:"
echo "    vagrant ssh -c 'composer install'"
echo "** [ZF] Visit http://localhost:8080 in your browser for to view the application **"
SCRIPT

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
#  config.vm.box = 'bento/ubuntu-16.04'
  config.vm.box = 'peru/ubuntu-16.04-server-amd64'
  config.vm.network "forwarded_port", guest: 80, host: 8080
  config.vm.synced_folder '.', '/var/www'
  config.vm.provision 'shell', inline: @script

  config.vm.provider "virtualbox" do |vb|
    vb.customize ["modifyvm", :id, "--memory", "1024"]
    vb.customize ["modifyvm", :id, "--name", "Apigility - Ubuntu 16.04"]
  end
end
