Mr. Short
=========

Exemplo simples de plugin para WordPress, que adiciona Shortcodes.

Esta versão traz somente shortcodes de Redes Sociais.


## Specs
* Feito no SO: Mac OS X 10.6 (a.k.a. Snow Leopard)
* Testado no SO: Mac OS X
* Linguagem Utilizada: PHP
* Dependências: WordPress >=3.0


## HowTo
Para utilizar é simples, basta a ativação do plugin no painel de controle.

A sintaxe é bem similar a de um BBCode, vá até o post ou página e adicione um dos exemplos:

```
[facebook size='22']fadamiao[/facebook]
[facebook type='white' size='28']fadamiao[/facebook]
[facebook]fadamiao[/facebook]

[github size='22']fa-damiao[/github]
[github]fa-damiao[/github]

[linkedin type='transparent' size='16']fa_damiao[/linkedin]
[linkedin size='22']fadamiao[/linkedin]
[linkedin type='white' size='28']fadamiao[/linkedin]
[linkedin]fadamiao[/linkedin]

[rss type='transparent' size='16'][/rss]
[rss size='22'][/rss]
[rss type='white' size='28'][/rss]
[rss][/rss]

[twitter type='transparent' size='16']fa_damiao[/twitter]
[twitter size='22']fa_damiao[/twitter]
[twitter type='white' size='28']fa_damiao[/twitter]
[twitter]fa_damiao[/twitter]]
```

O parâmetro 'type' define o tipo, entre: normal, white e transparent.

O parâmetro 'size' define o tamanho, entre: 16, 22, 28 e 32.

### ShortCodes disponíveis e seus tipos:
* Facebook (22 normal, 28 white, 32 normal)
* GitHub (22 normal, 32 normal)
* Google Plus (16 transparent, 28 white, 32 normal)
* LinkedIn (16 transparent, 22 normal, 28 white, 32 normal)
* RSS (16 transparent, 22 normal, 28 white, 32 normal)
* Twitter (16 transparent, 22 normal, 28 white, 32 normal)
