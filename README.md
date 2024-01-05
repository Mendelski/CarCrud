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


x. Criar um projeto com migrações que crie uma tabela de usuários e carros, onde usuários possuem muitos carros

x. O projeto deve seguir uma organização de Services e Repositories

x. Proibido a utilização de models diretamente no controller

x. Utilizar soft deletes em todas as models

x. O projeto deve ao máximo evitar repetição de código, seguindo princípios de programação DRY, onde códigos repetidos devem ser abstraidos em classes abstratas.


c. Uma rota no sistema que permita cadastrar um usuário na tabela criada
e. Uma rota no sistema que retorne um usuário com todos os seus carros por um id informado na rota
f. Uma rota no sistema que retorne todos os usuários com todos os carros relacionados do sistema
g. Uma rota no sistema que receba um id de um usuário e permita atualizar seu email e senha
d. Uma rota no sistema que permita deletar um usuário na tabela de usuários recebendo um id de usuário
x. Quando um usuário é deletado, todos os relacionamentos com carros também deve ser deletados

c. Uma rota no sistema que permita cadastrar um carro na tabela criada
e. Uma rota no sistema que retorne um carro por um id informado na rota
f. Uma rota no sistema que retorne todos os carros do sistema
g. Uma rota no sistema que receba um id de um carro e permita atualizar o carro
d. Uma rota no sistema que permita deletar um carro na tabela de carros recebendo um id de carro
x. Quando um carro é deletado do sistema, todos os seus relacionamentos com usuários também deve ser deletado

x. Uma rota no sistema que associa um usuário com um carro
x. Uma rota que desassocia um usuário de um carro


x. Criar um projeto com migrações que crie uma tabela de usuários e carros, onde usuários possuem muitos carros
x. O projeto deve seguir uma organização de Services e Repositories
x. Proibido a utilização de models diretamente no controller
x. Utilizar soft deletes em todas as models
x. O projeto deve ao máximo evitar repetição de código, seguindo princípios de programação DRY,
onde códigos repetidos devem ser abstraidos em classes abstratas.

x. Uma rota no sistema que permita cadastrar um usuário na tabela criada
x. Uma rota no sistema que retorne um usuário com todos os seus carros por um id informado na rota
x. Uma rota no sistema que retorne todos os usuários com todos os carros relacionados do sistema
x. Uma rota no sistema que receba um id de um usuário e permita atualizar seu email e senha
x. Uma rota no sistema que permita deletar um usuário na tabela de usuários recebendo um id de usuário
x. Quando um usuário é deletado, todos os relacionamentos com carros também deve ser deletados

c. Uma rota no sistema que permita cadastrar um carro na tabela criada
e. Uma rota no sistema que retorne um carro por um id informado na rota
f. Uma rota no sistema que retorne todos os carros do sistema
g. Uma rota no sistema que receba um id de um carro e permita atualizar o carro
d. Uma rota no sistema que permita deletar um carro na tabela de carros recebendo um id de carro
x. Quando um carro é deletado do sistema, todos os seus relacionamentos com usuários também deve ser deletado

x. Uma rota no sistema que associa um usuário com um carro
x. Uma rota que desassocia um usuário de um carro

