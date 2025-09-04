#include <stdio.h>

int main() {
  int idade;

  printf("Informe sua idade: ");
  if (scanf("%d", &idade) != 1) {
    printf("Entrada inválida.\n");
    return 1;
  }

  if (idade < 0) {
    printf("Idade inválida.\n");
  } else if (idade < 10) {
    printf("Classificação permitida: Livre\n");
  } else if (idade < 14) {
    printf("Classificação permitida: 10+\n");
  } else if (idade < 18) {
    printf("Classificação permitida: 14+\n");
  } else {
    printf("Classificação permitida: 18+\n");
  }

  return 0;
}