### Site de Aplica��es de Redes

	Developers :Joanderson de melo
				Alison Fernandes 	
	
	Este site tem como principal fundamento auxiliar o gerenciamento das redes.Visto sua grande necessidade as empresas utilizam ferramentas como essas para dar suporte e monitoramento de suas redes.

 ---  Composi��o do site  ---

	O site � formado por 5 estruturas:

In�cio --> Contem a pagina inicial do projeto, com uma logo de redes.

Ping --> � feito um teste de conectividade com interface gr�fica para um site digitado pelo cliente atrav�s do comando ping. Onde o usu�rio especifica o site a ser testado. Para isso usamos uma fun��o chamada shell_exec que captura os dados do prompt de comando e os joga no site.

Rede --> � feita uma coleta dos dados da rede do computador em que o site est� hospedado atraves do comando ipconfig (windows) ou ifcpnfig (Linux) e mostrado ao usu�rio atraves do site com uma interface grafica melhor elaborada. Para a captura dos dados do comando e exibi��o na pagina do site tambem foi usado o comando shell_exec.

Usu�rio --> Na aba usu�rios � poss�vel realizar as seguintes op��es: Cadastrar um usu�rio; Excluir Usu�rio e Pesquisar um usu�rio existente.

Passwd --> Exibe na pagina do site de maneira mais elaborada o arquivo do linux passwd, que contem as informa��es a respeito de todos os usu�rios do sistema. 


Utilizando a op��o de administra��o de usu�rios, temos 2 op��es procurar e exibir todos, caso n�o saiba o nome do usuario v� em exibir todos copie
e cole em procurar assim podendo executar as opera��es com o usuario.

#REQUISITOS NECESS�RIOS:
	sistema operaciona linux
	instala��o e configura��o do sudo
	apache2
	php5
	phpmyadmin
	mysql-server

#configurando o sudo para debian
	apt-get install sudo
	visudo : abri o arquivo de configura��o do sudo
=====================================================================

configure o sudo desta maneira: 


Defaults env_reset
root ALL = (ALL) ALL
User_Alias USREDES = www,www-data
Cmnd_Alias CMND = /usr/sbin/useradd, /usr/sbin/userdel
USREDES ALL=NOPASSWD: CMND

obs: adicione as linhas que n�o se encontram no arquivo