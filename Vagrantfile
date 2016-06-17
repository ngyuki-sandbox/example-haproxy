Vagrant.configure(2) do |config|

  config.vm.box = "bento/centos-7.2"
  config.ssh.insert_key = false

  config.vm.define "ha01" do |cfg|
    cfg.vm.hostname = "ha01"
    cfg.vm.network "private_network", ip: "192.168.33.11"
  end

  config.vm.define "ha02" do |cfg|
    cfg.vm.hostname = "ha02"
    cfg.vm.network "private_network", ip: "192.168.33.12"
  end

  config.vm.define "ha03" do |cfg|
    cfg.vm.hostname = "ha03"
    cfg.vm.network "private_network", ip: "192.168.33.13"
  end

  config.vm.define "ha04" do |cfg|
    cfg.vm.hostname = "ha04"
    cfg.vm.network "private_network", ip: "192.168.33.14"
  end

  config.vm.define "web01" do |cfg|
    cfg.vm.hostname = "web01"
    cfg.vm.network "private_network", ip: "192.168.33.21"
  end

  config.vm.define "web02" do |cfg|
    cfg.vm.hostname = "web02"
    cfg.vm.network "private_network", ip: "192.168.33.22"
  end

  config.vm.provision "shell", inline: <<-SHELL
    sudo yum install -y epel-release
    sudo yum install -y haproxy keepalived httpd php iptables-services ansible
    sudo cp -f -v /vagrant/inventory /etc/ansible/hosts
    sudo cp -f -v /vagrant/hosts /etc/hosts
  SHELL

end
