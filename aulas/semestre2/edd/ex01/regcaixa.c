#include <stdio.h>

int main() {
  float preco, total = 0.0;

  printf("Caixa Registradora Simples\n");
  printf("Digite o preço dos produtos (0 para finalizar):\n");

  while (1) {
    printf("Preço: R$ ");
    if (scanf("%f", &preco) != 1) {
      printf("Entrada inválida. Tente novamente.\n");
      // Limpa o buffer de entrada
      int c;
      while ((c = getchar()) != '\n' && c != EOF);
      continue;
    }
    if (preco == 0.0)
      break;
    if (preco < 0.0) {
      printf("Preço não pode ser negativo.\n");
      continue;
    }
    total += preco;
  }

  printf("Total da compra: R$ %.2f\n", total);

  return 0;
}