Backend REST para o sistema de atendimentos, feito para estudo com Laravel e MySQL.

DOCUMENTAÇÃO DO ACESSO
----------------------
Autenticação: JWT (JSON WebToken)

##Login
POST /autenticar com campos 'login' e 'senha'
Deverá receber:

Login correto: HTTP 200 + token no header 
"Authorization: Bearer {tokenaqui}"

Login incorreto: HTTP 401 + mensaegem de erro

 **Armazenar token em localstorage ou sessionstorage e reenvia-lo
 no header a cada requisição**
 
 **Sempre checar se um novo token foi enviado e trocá-lo**
 
 **Todos os requests devem ser em JSON**

 **Campos incorretos enviados em JSON retornarão 422 e o que está errado**
 
 **QUALQUER ACESSO NÃO AUTORIZADO A QUALQUER API RETORNARÁ HTTP 401**
 
##CRUD Usuários##
 **Necessário estar logado como administrador**

POST /usuario
Campos: nome, login, senha e id da empresa do usuário
Resposta: HTTP 201(ok) ou 422(erro)

GET /usuario
Resposta: HTTP 200 e JSON com todos os usuários ou 404

GET /usuario/{id_do_usuario}
Resposta: HTTP 200 e JSON com usuario ou 404 se o usuário não existir

PUT /usuario
Request: JSON do usuário a ser atualizado
Resposta HTTP 204 ou 422

DELETE /usuario/{id_do_usuario}
Respota: HTTP 204 ou 404


##CRUD Empresas##
**Tambêm só deverá ser acessado pelo administrador**

POST /empresa
Campos: nome e cnpj
Resposta: HTTP 204 ou 422

GET /empresa
Resposta: HTTP 200 e JSON com todas as empresas

GET /empresa/{id_da_empresa}
Resposta: HTTP 200 e empresa ou 404

PUT /empresa
Request: JSON com empresa a ser atualizada
Resposta: HTTP 204 ou 422

DELETE /empresa/{id_da_empresa}
Resposta: HTTP 204 ou 404




##CRUD Funcionários##

POST /funcionario
Campos: nome, identificacao
Resposta: HTTP 204 ou 422

GET /funcionario
Resposta: JSON com todos os funcionarios

GET /funcionario/{id_do_funcionario}
Resposta: HTTP 200 e atendimento ou 404

PUT /funcionario
Request: JSON do funcionario a ser modificado
Resposta: HTTP 204 ou 404

DELETE /funcionario/{id_do_funcionario}
Resposta: HTTP 204 ou 404


##CRUD Atendimentos##

POST /atendimento
Campos: 'data', 'pressao', 'pulso', 'temperatura', 'queixa', 'conduta'
Resposta: HTTP 204 ou 422

GET /atendimento
Resposta: JSON com todos os atendimentos

GET /atendimento/{id_do_atendimento}
Resposta: HTTP 200 e atendimento ou 404

PUT /atendimento
Request: JSON do atendimento a ser modificado
Resposta: HTTP 204 ou 422

DELETE /atendimento/{id_do_atendimento}
Resposta: HTTP 204 ou 404


##CRUD Atestados##

POST /atestado
Campos: 'data_atestado', 'nome_medico', 'crm', 'cid_id',
                'data_inicial', 'data_final', 'observacoes'
Resposta: HTTP 204 ou 422

GET /atestado
Resposta: JSON com todos os atestados

GET /atestado/{id_do_atestado}
Resposta: HTTP 200 e atestado ou 404

PUT /atestado
Request: JSON do atestado a ser modificado
Resposta: HTTP 204 ou 422

DELETE /atestado/{id_do_atestado}
Resposta: HTTP 204 ou 404









 
