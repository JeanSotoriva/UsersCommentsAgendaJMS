# *** Settings ***
# Resource        ../home/home.robot
# Library           FakerLibrary

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
#     Click Link                          id=editUser
#     ${NomeFake}                         FakerLibrary.Name
#     Input Text                          name=name               ${NomeFake}
#     ${EmailFake}                        FakerLibrary.Email
#     Input Text                          name=email              ${EmailFake}
#     ${PasswordFake}                     FakerLibrary.Password
#     Input Text                          name=password           ${PasswordFake}
#     Click Button                        name=enviar
#     Wait Until Element Is Visible       id=msg-succes
#     Wait Until Page Contains            Usuário editado com sucesso!


