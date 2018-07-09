# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION="2"
Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  ###################################################
  # Section 1 : Common Settings
  ###################################################
  # For Vagrant Cachier
  if Vagrant.has_plugin?("vagrant-cachier")
    config.cache.scope = :box
  end

  ###################################################
  # Section 2 : VM Server Configurations
  ###################################################
  # DB Server
  config.vm.define :dbserver do |dbserver|
    dbserver.vm.box = "bento/centos-7.5"
    dbserver.vm.hostname = "dbserver.wordpressdevbase"
    dbserver.vm.network "private_network", ip: "192.168.33.10"
  end

  # Web Server
  config.vm.define :webserver do |webserver|
    webserver.vm.box = "bento/centos-7.5"
    webserver.vm.hostname = "webserver.wordpressdevbase"
    webserver.vm.network "private_network", ip: "192.168.33.20"
    webserver.vm.synced_folder "./app",
                              "/var/www/app",
                              id: 'vagrant-root',
                              nfs: false,
                              owner: 'vagrant',
                              group: 'vagrant',
                              mount_options: ['dmode=777', 'fmode=777']
  end

  ###################################################
  # Section 3 : Provisioning
  ###################################################
  config.vm.provision :ansible_local do |ansible|
    ansible.playbook = "provisioning/site.yml"
    ansible.groups = {
      "dbservers" => ["dbserver"],
      "webservers" => ["webserver"]
    }
  end

end
