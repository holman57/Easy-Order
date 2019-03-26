# Restaurant Automation
## WINDOWS installation: Setup a server on localhost

Setting up Windows to run [MEAN Stack](https://en.wikipedia.org/wiki/MEAN_(software_bundle)) (which includes Angular) applications require a couple of things to be installed - `NodeJS` and `MongoDB`.
1. Install Node: https://nodejs.org/ any version. Once node is installed, from a command prompt or PowerShell `node -v` will display the version. The node command can run/execute `.js` javascript files and functions. 

2. Install Mongo: https://fastdl.mongodb.org/win32/mongodb-win32-x86_64-2008plus-ssl-4.0.6-signed.msi Do Complete install. Run service as network service. I made my `data directory` at `C:\data\db` install mongodb compass, but you can put it anywhere.

#### MongoDB Compass on a Node server is the equivalent of phpmyadmin on an xampp server.

3. Some packages are required. Open up a shell and use the node package manager, npm command, to download these packages.

+ `npm install`

## Runnning the App

+ `node server.js`

