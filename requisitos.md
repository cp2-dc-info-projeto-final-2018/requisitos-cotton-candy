# Requisitos Não Funcionais
## RNF1
 * Caso o login seja inválido, enviar notificação de erro:
 Caso o usuário esqueça seu login ou senha ou tente fazer um login em uma conta inválida,
 o sistema deve notificar, impedindo o acesso e colocar a opção de recuperar a senha;

## RNF2
* Em caso de erro no servidor, reparar em 24hrs:
Se o servidor não estiver executando corretamente, seja por bugs ou impedindo que o
usuário;

## RNF3
* O programa não deve ser responsivo.


## RNF4
* O programa só estará disponível mediante ao acesso a internet
Se o usuário não estiver acesso a internet, o site não funcionará mediante ao erro de rede,
e somente voltará a poder ser executado caso a internet esteja conectada;

## RNF5
* O site não será sincronizavel
Caso o usuário não esteja conectado a internet porém queira modificar alguns dos dados, logo após
o retorno da rede, o sistema não deverá adicionar os novos comandos feitos quando o site não estava mediante
a internet;

## RNF6
* Quando o usuário realizar o login, o sistema deverá dar acesso a conta em poucos segundos;


## RNF7
* Cada usuário só poderá ter um plano de estudos por cadastro
Logo no início, o usuário deve escolher a opção de curso, e após, o sistema
só permitirá a entrada de um curso por email.
