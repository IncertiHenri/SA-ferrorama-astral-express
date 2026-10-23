# Relatório de IA

## API de Clima

**Ferramenta de IA utilizada:**  
Foi utilizado o ChatGPT para pesquisar APIs gratuitas de clima e auxiliar na integração ao sistema.

**Objetivo:**  
Pesquisar uma API gratuita de clima e integrá-la ao sistema para exibir a cidade de Joinville e a temperatura atual na barra de navegação.

## Principais instruções ou prompts fornecidos

- "Quais as melhores APIs de clima gratuitas?"
- "Como posso integrar a API Open-Meteo no projeto?"

## Trechos, arquivos ou funcionalidades produzidos com auxílio da IA

- `tela_inicial.php`: inclusão do elemento HTML para exibir a cidade e a temperatura.
- `script.js`: consulta à API com `fetch()`, leitura da resposta JSON e atualização da temperatura na página.

## Alterações realizadas

Adaptei a integração à estrutura existente do projeto e corrigi erros na URL da API e na sintaxe do JavaScript.

## Testes executados

Foi realizado um teste no navegador para verificar se a API retornava a temperatura e se o valor era exibido corretamente na barra de navegação.

## Problemas identificados e correções

A URL da API estava em um formato inadequado e havia um erro de digitação no método `.catch()`. Os problemas foram corrigidos, permitindo o funcionamento da consulta.

## Reflexão sobre as contribuições e limitações da ferramenta

A IA ajudou na pesquisa da API e na integração ao sistema. Foi necessário adaptar as sugestões ao projeto e testar a funcionalidade para verificar seu funcionamento.

## Link API

https://open-meteo.com/en/docs  