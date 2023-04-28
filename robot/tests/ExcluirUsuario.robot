# *** Settings ***
# Resource        ../home/home.robot

# Test Setup      Inicia sessão 
# Test Teardown   Encerra sessão

# *** Variables ***
# # --

# *** Keywords ***  
# # --

# *** Test Cases ***
# Editar usuário com sucesso
#     Go To                               ${url}
#     Set Selenium Speed                  0.3
#     Title Should Be                     Listagem do Usuário
#     Click Link                          id=detailUser
#     Title Should Be                     Detalhes do Usuário
#     Click Button                        name=deletar
#     Wait Until Element Is Visible       id=msg-succes
#     Wait Until Page Contains            Usuário deletado com sucesso!
