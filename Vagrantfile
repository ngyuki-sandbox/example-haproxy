Vagrant.configure(2) do |config|

  config.vm.box = "ngyuki/centos-7"

  config.vm.provision "shell", inline: <<-SHELL
    sudo yum install -y epel-release
    sudo yum install -y haproxy keepalived httpd ansible iptables-services
    sudo cp -f -v /vagrant/hosts.ini /etc/ansible/hosts
  SHELL

  config.vm.define "ha1" do |cfg|
    cfg.vm.hostname = "ha1"
    cfg.vm.network "forwarded_port", guest: 80, host: 8081
    cfg.vm.network "private_network", ip: "192.168.33.11"
  end

  config.vm.define "ha2" do |cfg|
    cfg.vm.hostname = "ha2"
    cfg.vm.network "forwarded_port", guest: 80, host: 8082
    cfg.vm.network "private_network", ip: "192.168.33.12"
  end

  config.vm.define "sv1" do |cfg|
    cfg.vm.hostname = "sv1"
    cfg.vm.network "private_network", ip: "192.168.33.21"
  end

  config.vm.define "sv2" do |cfg|
    cfg.vm.hostname = "sv2"
    cfg.vm.network "private_network", ip: "192.168.33.22"
  end

end
