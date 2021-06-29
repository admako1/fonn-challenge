# DevOps challenge

This repository contains a simple Docker-based application with three main components:

- Nginx
- MySQL
- PHP

## Task 1

Please pull the code and run:

`docker compose up`

to start up the app.

You will notice that the app is not starting properly, this is because it is miss-configured in few places. Your task is to find what is wrong and fix it. You can check this page:

`http://localhost/result.php`

to see the result. Once done and you are happy with the configuration, please put the fixed code to the git-repo of your choice and send us a link.

### Hint 1
```- Docker images are fine```
### Hint 2
```- Feel free to improve the configuration if you find something is not quite right```

## Task 2

Please create IaC (Infrastructure as code) proposal to run this sample app in the cloud. Azure and terraform is preferred (with Authenticating to Azure using the Azure CLI), however, any cloud/IaC software combination is welcome. Please put the ready-to-run code to the git-repo of your choice. If you are not fluent with IaC - don't worry - you can send us a diagram/proposal and description about particular cloud services that you would like to use to run this sample app.
