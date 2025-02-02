
![increazy_light](https://github.com/user-attachments/assets/7a1f50e5-bfbe-40f6-9440-2a5831f57f58)

# Teste - Desenvolvedor Backend

## Descrição

Este projeto tem como objetivo criar uma API para consultar e retornar dados de múltiplos CEPs usando a API do [ViaCEP](https://viacep.com.br/). A API deve organizar e apresentar os dados no formato especificado.

Link do teste:<br>
[https://increazy.notion.site/Teste-Desenvolvedor-backend-62b7e24e6218412cbf1ab36aef46f603](https://increazy.notion.site/Teste-Desenvolvedor-backend-62b7e24e6218412cbf1ab36aef46f603)


O projeto foi desenvolvido em [Laravel](https://laravel.com/).


## Configuração do Projeto

1. **Clonando o Repositório:**
   - Clone o repositório usando o comando:
     ```bash
     git clone git@github.com:pedroinbezerra/teste-increazy.git
     ```
   - Navegue até o diretório do projeto:
     ```bash
     cd teste-increazy
     ```

2. **Instalação das Dependências:**
   - Instale as dependências do projeto com:
     ```bash
     composer install
     ```

3. **Configuração do Ambiente:**
   - Copie o arquivo `.env.example` para `.env`:
     ```bash
     cp .env.example .env
     ```
   - Gere a chave de aplicação:
     ```bash
     php artisan key:generate
     ```

4. **Definindo Variáveis de Ambiente:**
   - Crie o arquivo `.env` e defina a URL da API do ViaCEP.:
     ```env
     VIA_CEP_URL=https://viacep.com.br/ws
     ```

5. **Rodando o Servidor:**
   - Inicie o servidor localmente:
     ```bash
     php artisan serve
     ```

## Testes

- O teste pode ser realizado via Postman enviando uma requisição HTTP GET para a seguinte URL:
  ```bash
  http://localhost:8000/search/local/01001000,17560-246
  ```
