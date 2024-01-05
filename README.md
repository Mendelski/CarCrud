# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/lumen-framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/lumen)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

> **Note:** In the years since releasing Lumen, PHP has made a variety of wonderful performance improvements. For this reason, along with the availability of [Laravel Octane](https://laravel.com/docs/octane), we no longer recommend that you begin new projects with Lumen. Instead, we recommend always beginning new projects with [Laravel](https://laravel.com).

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Objetivo do projeto

1. Criar um projeto com migrações para criar tabelas de usuários e carros, onde usuários possuem muitos carros.
2. Organizar o projeto seguindo uma estrutura de Services e Repositories.
3. Proibir a utilização direta de models no controller.
4. Utilizar soft deletes em todas as models.
5. Evitar ao máximo a repetição de código, seguindo os princípios de programação DRY, onde códigos repetidos devem ser abstraídos em classes abstratas.

Tarefas relacionadas a Usuários:

a. Criar uma rota no sistema para cadastrar um usuário na tabela.

b. Criar uma rota no sistema que retorne um usuário com todos os seus carros, utilizando um ID informado na rota.

c. Criar uma rota no sistema que retorne todos os usuários com todos os carros relacionados do sistema.

d. Criar uma rota no sistema que receba um ID de um usuário e permita atualizar seu email e senha.

e. Criar uma rota no sistema que permita deletar um usuário na tabela de usuários, recebendo um ID de usuário.

f. Ao deletar um usuário, todos os relacionamentos com carros também devem ser deletados.

Tarefas relacionadas a Carros:

a. Criar uma rota no sistema para cadastrar um carro na tabela.

b. Criar uma rota no sistema que retorne um carro por um ID informado na rota.

c. Criar uma rota no sistema que retorne todos os carros do sistema.

d. Criar uma rota no sistema que receba um ID de um carro e permita atualizar as informações do carro.

e. Criar uma rota no sistema que permita deletar um carro na tabela de carros, recebendo um ID de carro.

f. Ao deletar um carro do sistema, todos os seus relacionamentos com usuários também devem ser deletados.


Tarefas Gerais:

1. Criar uma rota no sistema que associa um usuário com um carro.
2. Criar uma rota que desassocia um usuário de um carro.

