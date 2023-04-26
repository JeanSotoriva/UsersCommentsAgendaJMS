*** Settings ***
Resource        ../home/home.robot

Test Setup      Inicia sessão 
Test Teardown   Encerra sessão

*** Test Cases ***
Login com sucesso
    [tags]                          login_sucesso
    Go To                           ${url}
    Preencher Login                 rafael       123456

Login invalido
    Go To                           ${url}
    Preencher Login                 teste        102030

    Mensagem alerta Login           Falha ao fazer o login

    