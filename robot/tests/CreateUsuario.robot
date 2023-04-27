*** Settings ***
Resource        ../home/home.robot

Test Setup      Inicia sessão 
Test Teardown   Encerra sessão

*** Test Cases ***
Abrir aplicação na listagem de usuários
    Go To                   ${url}
    Set Selenium Speed      0.3
    Title Should Be         Listagem do Usuário
    Click Link              id=createUser
    Input Text              name=name                   Joao Marcos Silva
    Input Text              name=email                  joaomarcos@gmailcom
    Input Text              name=password               123456
    

*** Keywords ***  
