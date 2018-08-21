# Requisitos
## Requisitos Não Funcionais

### RNF1
 * Caso o login seja inválido, enviar notificação de erro:
 Caso o aluno esqueça seu login ou senha ou tente fazer um login em uma conta inválida,
 o sistema deve notificar, impedindo o acesso e colocar a opção de recuperar a senha;

### RNF2
* Em caso de erro no servidor, reparar em 24hrs:
Se o servidor não estiver executando corretamente, seja por bugs ou impedindo que o
usuário;

### RNF3
* O programa so deve ser responsivo
O programa deve se adaptar a versão mobile, ajustando-se a qualquer dispositivo;

### RNF4
* O programa só estará disponivel mediante ao acesso a internet
Se o aluno não estiver acesso a internet, o site não funcionará mediante ao erro de rede,
e somente voltará a poder ser executado caso a internet esteja conectada;

### RNF5
* O site não será sincronizavel
Caso o aluno não esteja conectado a internet porém queira modificar alguns dos dados, logo após
o retorno da rede, o sistema não deverá adicionar os novos comandos feitos quando o site não estava mediante
a internet;

### RNF6
* Quando o aluno realizar o login, o sistema deverá dar acesso a conta em poucos segundos;

### RNF7
* Cada aluno só poderá ter um plano de estudos por cadastro
Logo no início, o aluno deve escolher a opção de curso, e após, o sistema
só permitirá a entrada de um curso por emai.



## Requisitos Funcionais

### RF 01
Armazenamento das informações pessoais do aluno durante o cadastro;
  * O Software deverá guardar todos os dados pessoais do usuários fornecidos durante o cadastro.

### RF 02
Armazenamento dos horários de atividades e eventos do aluno;
  * O Software deverá guardar todos os horários de atividades fornecidos pelo aluno, durante a atuali# Requisitos Não Funcionais

### RF 03
O aluno poderá selecionar a opção de curso;
  * O Software deverá armazenar a opção de curso escolhida pelo aluno no ato do cadastro, para dar inicio a utilização da aplicação.

### RF 04
O aluno deverá informar quais são as matérias abordadas no curso (ensino fundamental, médio ou superior) para que apareçam na tabela de planejamento;
  * Para dar inicio a utilização do Software, o aluno deverá fornecer quais matérias são contidas no seu curso escolar, para que apareçam na tabela de notas.

### RF 05
O aluno terá acesso à uma planilha de plano de estudos e um calendário mensal que poderão ser editados criando eventos;
  * O Software deverá fornecer para cada aluno uma planilha com suas atividades e horários livres, para que o aluno configure seus horários para estudo e lazer, uma planilha com suas notas e um calendário editável para eventos.

### RF 06
Configurar o design das tabelas e calendários
  * O aluno poderá editar os campos, as linhas e as colunas da tabela nas configurações para atender às suas necessidades da melhor maneira possível.

### RF 07
O software deverá mandar lembretes de eventos diários ou pendentes
  * Para cada evento criado, caso permitido o envio de notificações, o Software deverá enviar uma notificação de pendencia destes afazeres.

### RF 08
Calculo de médias:
  * O software deverá receber as notas do aluno sendo capaz de calcular automaticamente suas médias de acordo com os parâmetros da instituição de ensino.

### RF 09
Adicionar avaliações:
 * O aluno deve adicionar quantas avaliações terá e também de que forma sua média será calculada.
