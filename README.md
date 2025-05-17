Este é um site simples para **upload e download de arquivos**, construído utilizando PHP para o backend e um banco de dados MySQL para armazenar informações sobre os arquivos. O projeto é containerizado com Docker para facilitar a execução em diferentes ambientes.

## Visão Geral

O objetivo principal deste site é permitir que usuários façam upload de arquivos para o servidor e, posteriormente, possam realizar o download desses arquivos. A aplicação PHP lida com o recebimento dos arquivos, o armazenamento (no sistema de arquivos do container) e o registro das informações no banco de dados MySQL. O MySQL armazena metadados sobre os arquivos, como nome original, nome no servidor, data de upload, etc.

## Arquitetura Docker

O site é executado em uma arquitetura com dois containers Docker distintos que se comunicam entre si:

1.  **`php`**: Este container hospeda a aplicação PHP, responsável pela lógica de upload, download e interação com o banco de dados. Ele utiliza um servidor web (como Apache ou Nginx) com o interpretador PHP habilitado.
2.  **`mysql`**: Este container executa o servidor de banco de dados MySQL, onde as informações sobre os arquivos (metadados) são armazenadas. A aplicação PHP se conecta a este banco de dados para registrar e buscar informações dos arquivos.

## Pré-requisitos

Para executar este projeto localmente ou na AWS, você precisará ter o seguinte instalado:

* [Docker](https://docs.docker.com/get-docker/): Para a containerização da aplicação.
* [Docker Compose](https://docs.docker.com/compose/install/): Para orquestrar os múltiplos containers Docker.

## Como Rodar Localmente

Siga estas etapas para executar o site localmente utilizando Docker Compose:

1.  **Clonar o Repositório:**
2.  **Configurar Variáveis de Ambiente:**
3.  **Iniciar os Containers docker-compose:**
	Iniciará os containers `php` e `mysql` definidos no arquivo `docker-compose.yml` em segundo plano. O Docker Compose garantirá que o container `mysql` seja iniciado antes do `php` devido às dependências configuradas.

4.  **Acessar o Site:**
    O site estará acessível através do seu navegador web. A URL padrão é geralmente `http://localhost` ou `http://127.0.0.1`. (verifique a seção `ports` do serviço `php`).

## Status do Projeto (v1 - Em Construção)

Atualmente, este projeto está na sua primeira versão (v1) e a funcionalidade principal de **upload e download de arquivos** está em desenvolvimento.

**Funcionalidades Atuais:**
* [Upload básico de arquivos.]
* [Listagem dos arquivos disponíveis para download.]
