*** Settings ***
Library     SeleniumLibrary

*** Variables ***
${url}              http://localhost:8989/users

*** Keywords ***
Inicia sessão
    Open Browser                    ${url}      chrome

Encerra sessão
    Capture Page Screenshot
    Close Browser
