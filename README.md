# tadspeaking
Sistema de criação e compartilhamento de exercícios criado para professores. Feito para disciplina de Aplicações Web 1 e Implementação de Aplicação de Computadores do curso Análise e Desenvolvimento de Sistemas da UFPR.

# Como fazer o backend funcionar
## Requisitos
* Vagrant (usando o preset `precise32`)
* Apache2
* PHP5

## Como
### Inicie o vagrant
`vagrant up`  # liga a maquina
`vagrant ssh` # acessa a maquina
### Instale as dependências
`sudo apt-get update`
`sudo apt-get install apache2`
`sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt`


Mais detalhes podem ser vistos aqui: http://gitlab.tadsufpr.net.br/ti161-alexkutzke/ti161-material-2017-1/blob/master/aula_14_back_end.md
