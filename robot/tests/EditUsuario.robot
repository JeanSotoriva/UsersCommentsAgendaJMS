# *** Settings ***
# Resource        ../home/home.robot
# Resource        ./CriarUsuario.robot
# Library           FakerLibrary

# Test Setup      Inicia sessão 
# Test Teardown   Encerra sessão


# *** Variables ***
# ${nome2} =       Get Variable Value      ${name}
# ${email2} =      Get Variable Value      ${email}


# *** Keywords ***  
# # --

# *** Test Cases ***
# Editar usuário com sucesso
#     Go To                               ${url}
#     Set Selenium Speed                  0.3
#     Title Should Be                     Listagem do Usuário
#     Click Link                          id=editUser
#     ${NomeFake}                         FakerLibrary.Name
#     Input Text                          name=name               ${e-mail}
#     ${EmailFake}                        FakerLibrary.Email
#     Input Text                          name=email              ${nome}
#     ${PasswordFake}                     FakerLibrary.Password
#     Input Text                          name=password           ${PasswordFake}
#     Click Button                        name=enviar
#     Wait Until Element Is Visible       id=msg-succes
#     Wait Until Page Contains            Usuário editado com sucesso!


