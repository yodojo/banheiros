[![Build Status](https://travis-ci.org/yodojo/banheiros.png)](https://travis-ci.org/yodojo/banheiros)

### Retrospectiva Coding Dojo
#### Local: [USE Coworking](http://www.usecoworking.com.br)
#### Data: 13/07/2013

#### Prós 
- Finalmente aconteceu! o/
- Galera conseguiu resolver o problema!
- Gente nova que participou.
- Galera curtiu o estilo social do dojo.
- Bom pra galera exercitar suas habilidades de programação.
- Bacana pra reunir o pessoal!

#### Contras
- Galera perdida no inicio, faltando alguem que conhecia do coding dojo pra ajudar a galera.
- Nem todo mundo focou no problemo proposto.
- Faltou:
  - Alguem que entendesse totalmente o Dojo e que passasse as Regras e o funcionamento do Dojo aos novos integrantes.
  - Planejamento (Linguagem a ser trabalhar, Ambiente montado para o Linguagem escolhida).
  - Mais tempo no pair programming, os novos integrantes acham muito curto o tempo.

### Mictório
#### Problema Proposto (quem foi o coringa que deu esta ideia?)
  Você vai ao banheiro no **Shopping** e tem aqueles mictórios para urinar.
  
  __Exemplo 01__
  (contagem iniciado em 0)
  >| O | V | **V** | V | O |
  >>Legenda: Ocupado O, Vago V.
  
  Neste exemplo, o lugar mais seguro, seria na **posição 3**. Onde não lhe causará desconforto, *~~vai que o cara do lado~~* ... ahn ... Próximo caso.
  
  __Exemplo 02__
  (contagem iniciado em 0)
  >| O | V | **V** | **V** | **V** | V | O | V | **V** | V | 0 |
  >>Legenda: Ocupado O, Vago V.
  
  Com certeza, impensavelmente você iria utilizar o Mictório da **posição nº 3**, apesar de que na **posição nº 2, 4 e 8** tambem seriam seguros.
  
  A ideia é criar uma código onde ele escolha de uma forma dinâmica, independente do número de mictórios, a melhor mictório para você urinar tranquilamente.
