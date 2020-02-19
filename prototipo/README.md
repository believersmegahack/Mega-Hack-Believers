# **MegaHack - Loft - Equipe Believers**


<!-- Descrever um resumo sobre o trabalho. -->

### Resumo
O objetivo deste documento é descrever o protótipo desenvolvido parcialmente para o desafio Loft.

<!-- Apresentar o tema. -->
### 1. Tema

  A proposta do protótipo consiste na melhoria e/ou implementação de funcionalidades ausentes na ferramenta já desenvolvida pela Loft.



## 2. Dependências para executar o projeto

- VirtualBox 5.2 || VMWare || Parallels || Hyper-V  
- Vagrant
- Composer
- PHP7

## 3. Execução

Instale as dependencias do projeto utilizado o [composer](https://getcomposer.org/download/ "Composer download"): `$ composer install`


Após instalar as dependências, execute o comando abaixo para gerar o Vagrantfile e o arquivo de configuração Homestead.yaml :

( **Linux**) php vendor/bin/homestead make

( **Windows**) vendor\\bin\\homestead make

Execute o comando **vagrant up** para  subir o ambiente. Acesse a vm com o comando **vagrant ssh**.
Navegue ao diretório **/vagrant** e execute os passos:
 - Gere as chaves do projeto com o comando **php artisan key:generate**
 
Em seguida execute as migrations e crie o banco de dados com o comando **php artisan migrate**
 
Acesse no navegador através do endereço  http://localhost:8000
