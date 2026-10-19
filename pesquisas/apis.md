# APIs
## Oque são?
 API(Application Programming Interface) é um mecanismo que permite que softwares se comuniquem, acessando dados ou enviando dados para outros softwares. As APIs funcionam por meio de relação cliente e servidor, onde o cliente recebe as informações vindas do servidor, e o servidor manda informações quando os clientes pedem.

---
## Como funciona a comunicação?
 As integrações tradicionais de integração ponto a ponto, que são a conexão de sistemas ou aplicações diretamente por meio de programação, exigem uma quantidade substancial de trabalho de configuração e manutenção.

## O que é APIs REST?
 É uma API que possui condições de como uma API tem que funcionar, foi criada como diretriz de gerenciamento a comunicação de uma rede complexa, só que usam ele para projetar APIs com várias arquiteturas diferentes, sendo esse serviço web chamado de Web RESTful, alguns dos princípios do estilo da arquitetura são.
- Interface uniforme.
- Ausência de estados.
- Sistema em camadas.
- Capacidade de armazenamento.
- Código sob demanda.
- Hipermídia.

## HTTP
- GET:
O método GET solicita a representação de um recurso específico. Requisições utilizando o método GET devem retornar apenas dados.  
- POST: 
O método POST é utilizado para submeter uma entidade a um recurso específico, frequentemente causando uma mudança no estado do recurso ou efeitos colaterais no servidor.
- PUT:
O método PUT substitui todas as atuais representações do recurso de destino pela carga de dados da requisição. 
- PATCH: 
O método PATCH é utilizado para aplicar modificações parciais em um recurso 
- DELETE:  
O método DELETE remove um recurso específico. 

## Requisição de HTTP
 A primeira linha de uma requisição contém três de seus elementos:

GET / HTTP/1.1
GET significa o método HTTP utilizado, algumas vezes também chamado de verbo HTTP. Ele diz que ação o cliente espera que seja executada pelo servidor. Neste caso, que lhe traga algo.
Após GET vemos um que é o caminho para o recurso que estamos buscando no servidor. Por exemplo, se desejamos acessar a página de contatos de um site esse caminho poderia se parecer com algo como /contatos.html.
Logo após o caminho temos a versão do protocolo HTTP utilizada. Nesse caso estamos utilizando a versão 1.1, a mais comum atualmente.

## Resposta HTTP 
 Uma resposta contém a seguinte estrutura:

HTTP/1.1 200 OK Cache-Control: no-cache, must-revalidate Content-Type: text/html; charset=ISO-8859-1 ...
A primeira informação que identificamos na linha 1 contém a versão do protocolo HTTP, HTTP/1.1.
Após isso vemos seguido do código de retorno e seu significado. 200 significa que a requisição foi recebida e processada pelo servidor com sucesso.
Temos abaixo desta linha os headers da resposta, a exemplo de Cache-Control e Content-Type.

## O que são endpoints?

 Um endpoint de API é um local digital onde uma interface de programação de aplicativos (API) recebe chamadas de API, também conhecidas como solicitações de API, para recursos em seu servidor. Os endpoints de APIs são componentes de APIs e, geralmente, estão na forma de URLs ou localizadores de recursos uniformes. 

## Como funciona a troca de dados no formato JSON?
 Um dos usos mais comuns do JSON é na utilização de APIs, tanto em requisições quanto em respostas. Ele é muito mais compacto do que outros padrões e permite fácil consumo em navegadores web, já que o JavaScript consegue analisar strings JSON com facilidade, bastando apenas JSON.parse()começar a utilizá-lo.

## Diferenças entre uma API e um sistema web tradicional?