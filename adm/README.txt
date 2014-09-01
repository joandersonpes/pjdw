### Site de Aplicações de Redes

	Developers :Joanderson de melo
				Alison Fernandes 	
	
	Este site tem como principal fundamento auxiliar o gerenciamento das redes.Visto sua grande necessidade as empresas utilizam ferramentas como essas para dar suporte e monitoramento de suas redes.

 ---  Composição do site  ---

	O site é formado por 5 estruturas:

Início --> Contem a pagina inicial do projeto, com uma logo de redes.

Ping --> É feito um teste de conectividade com interface gráfica para um site digitado pelo cliente através do comando ping. Onde o usuário especifica o site a ser testado. Para isso usamos uma função chamada shell_exec que captura os dados do prompt de comando e os joga no site.

Rede --> É feita uma coleta dos dados da rede do computador em que o site está hospedado atraves do comando ipconfig (windows) ou ifcpnfig (Linux) e mostrado ao usuário atraves do site com uma interface grafica melhor elaborada. Para a captura dos dados do comando e exibição na pagina do site tambem foi usado o comando shell_exec.

Usuário --> Na aba usuários é possível realizar as seguintes opções: Cadastrar um usuário; Excluir Usuário e Pesquisar um usuário existente.

Passwd --> Exibe na pagina do site de maneira mais elaborada o arquivo do linux passwd, que contem as informações a respeito de todos os usuários do sistema. 


Utilizando a opção de administração de usuários, temos 2 opções procurar e exibir todos, caso não saiba o nome do usuario vá em exibir todos copie
e cole em procurar assim podendo executar as operações com o usuario.

#REQUISITOS NECESSÁRIOS:
	sistema operaciona linux
	instalação e configuração do sudo
	apache2
	php5
	phpmyadmin
	mysql-server

#configurando o sudo para debian
	apt-get install sudo
	visudo : abri o arquivo de configuração do sudo
=====================================================================

configure o sudo desta maneira: 


Defaults env_reset
root ALL = (ALL) ALL
User_Alias USREDES = www,www-data
Cmnd_Alias CMND = /usr/sbin/useradd, /usr/sbin/userdel
USREDES ALL=NOPASSWD: CMND

obs: adicione as linhas que não se encontram no arquivo