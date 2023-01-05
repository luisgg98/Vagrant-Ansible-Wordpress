Vagrant.configure("2") do |config|

  config.vm.define "web" do |web|
    web.vm.box = "bento/ubuntu-20.04"
    web.vm.hostname = 'actividadWordpress'

    web.vm.network "private_network", ip: "192.168.33.10"

    web.vm.synced_folder "./backup", "/vagrant_data", create: true

    web.vm.provider "virtualbox" do |vb|
      vb.memory = "2048"
    end

    ####### Install Ansible #######
    web.vm.provision "ansible" do |ansible|
      ansible.playbook = "./provising/playbook.yml"
    end
  end


end