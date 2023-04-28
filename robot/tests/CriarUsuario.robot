*** Settings ***
Resource        ../home/home.robot
Library           FakerLibrary      locale=pt_BR
Test Setup      Inicia sessão 
Test Teardown   Encerra sessão


*** Variables ***
${input_name}=                          name=name 
${input_email}=                         name=email
${input_password}=                      name=password
${link_create_user}=                    name=createUser
${button_enviar}=                       name=enviar
${succes_msg}=                          id=msg-succes
${name}
${email}                 
${password}

*** Keywords ***  
acessar a aplicação
    Go To                               ${url}
    Set Selenium Speed                  0.2
    Title Should Be                     Listagem do Usuário

criar um novo usuario
    Click Link                          ${link_create_user}

inserir os dados do novo usuario
    Set Global Variable                 ${name} 
    ${name}                             FakerLibrary.Name
    Input Text                          ${input_name}                       ${name}

    Set Global Variable                 ${email}
    ${email}                            FakerLibrary.Email
    Input Text                          ${input_email}                      ${email}

    ${password}                         FakerLibrary.Password
    Input Text                          ${input_password}                   ${password} 
    Click Button                        ${button_enviar}
    
usuario criado com sucesso
    Wait Until Element Is Visible       ${succes_msg}
    Wait Until Page Contains            Usuário criado com sucesso!


*** Test Cases ***
Criar usuário com sucesso
    acessar a aplicação
    criar um novo usuario
    inserir os dados do novo usuario
    usuario criado com sucesso