*** Settings ***
Library     SeleniumLibrary
# Library     OperatinSystem
Library     String

*** Variables ***
${url}              http://localhost:8989/users

*** Keywords ***
Inicia sessão
    Open Browser                    ${url}      chrome
    Maximize Browser Window
    
Encerra sessão
    Capture Page Screenshot
    Close Browser               
