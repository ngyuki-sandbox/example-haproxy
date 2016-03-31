Vagrant.configure(2) do |config|

  config.vm.box = "ngyuki/centos-7"

  config.vm.provision "shell", inline: <<-SHELL
    sudo yum install -y epel-release
    sudo yum install -y haproxy keepalived httpd php ansible iptables-services
    sudo cp -f -v /vagrant/inventory /etc/ansible/hosts
    sudo cp -f -v /vagrant/hosts /etc/hosts
  SHELL

  config.vm.define "ha01" do |cfg|
    cfg.vm.hostname = "ha01"
    cfg.vm.network "private_network", ip: "192.168.33.11"
  end

  config.vm.define "ha02" do |cfg|
    cfg.vm.hostname = "ha02"
    cfg.vm.network "private_network", ip: "192.168.33.12"
  end

  config.vm.define "web01" do |cfg|
    cfg.vm.hostname = "web01"
    cfg.vm.network "private_network", ip: "192.168.33.21"
  end

  config.vm.define "web02" do |cfg|
    cfg.vm.hostname = "web02"
    cfg.vm.network "private_network", ip: "192.168.33.22"
  end

end
