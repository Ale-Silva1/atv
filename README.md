# 📦 Calculadora de Frete em PHP
 
Um script simples e eficiente em PHP para calcular o valor do frete de entregas com base no peso da mercadoria, distância do trajeto e tipo de envio escolhido.
 
Este projeto foi desenvolvido como uma atividade em grupo para exercitar lógica de programação, validação de dados e manipulação de arrays em PHP.
 
## 🚀 Funcionalidades e Regras de Negócio
 
A função `calculaFreteEntrega($p, $d, $tE)` processa o cálculo seguindo as seguintes regras:
 
* **Validação de Limites:** * O peso (`$p`) deve estar entre **0 e 50 kg**.
    * A distância (`$d`) deve estar entre **0 e 2000 km**.
* **Tipos de Envio e Multiplicadores:**
    * `economico`: Multiplicador de 1.0
    * `normal`: Multiplicador de 1.5
    * `expresso`: Multiplicador de 2.5
* **Cálculo Base:** `Peso * Distância * 0.01`
* **Taxa Mínima:** Independentemente do cálculo, o valor mínimo do frete é sempre fixado em **R$ 15,00**.
* **Retorno:** A função retorna o valor formatado com duas casas decimais ou uma string `"erro"` caso os dados inseridos sejam inválidos.
 
## 💻 Como usar
 
Basta incluir o arquivo no seu projeto PHP e chamar a função passando os parâmetros de Peso, Distância e Tipo de Envio.
 
```php
require_once 'caminho/para/o/arquivo.php';
 
// Exemplo 1: Cálculo com envio normal
$valorNormal = calculaFreteEntrega(5, 100, "normal");
echo "Frete Normal: R$ " . $valorNormal . "\n";
 
// Exemplo 2: Cálculo com envio expresso
$valorExpresso = calculaFreteEntrega(10, 200, "expresso");
echo "Frete Expresso: R$ " . $valorExpresso . "\n";
 
// Exemplo 3: Tratamento de erro (tipo de envio inválido)
$valorInvalido = calculaFreteEntrega(10, 100, "vip");
echo "Status: " . $valorInvalido . "\n"; // Retorna "erro"
