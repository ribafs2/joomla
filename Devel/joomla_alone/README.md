# joomla_alone
Somente parte do core do Joomla para ser usado em testes de bancos de dados e similares.

## Uma estrutura mínima do Joomla 3.8.1
O objetivo é ser útil para programadores que criam código para o Joomla, especialmente com bancos de dados.

Com a finalidade de ter uma resposta ágil para pequenos problemas e testes além de facilitar o debug.

Não se destina a testar extensões, para estas precisa ter o Joomla completo.

Para a criação desta estrutura precisei:

- /includes
- /libraries/cms
- /libraries/fof
- /libraries/joomla
- /libraries/legacy
- /libraries/src
- /libraries/vendor
- /libraries/classmap.php
- /libraries/cms.php
- /libraries/import.legacy.php
- /libraries/import.php
- /libraries/index.html
- /libraries/loader.php
- index.php
- configuration.php (mude os dados do banco para um que deseja estar)

- Crie o banco de dados vazio
- Não precisa de nenhuma tabela do banco de dados do Joomla. Apenas se quiser testar alguma tabela, crie o banco de acordo com o configuration.php
- Removi o final do index.php
- Adicionei um arquivo testes.php e o inclui ao index.php

Para testar uma tabela adicione a mesma para o banco do jalone e digite o código no testes.php

## Instalação
Apenas faça o download e descompacte em seu servidor web e chame pelo navegador.
https://github.com/ribafs/joomla_alone 

Seu código pode ficar todo no arquivo testes.php.

## Debug
Uma boa ideia é usar o xdebug para ajudar no debug. Lembre de deixar a exibição de erros ativa no php.ini como também o xdebug.

### Licença

MIT
