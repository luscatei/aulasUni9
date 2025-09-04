#include <stdio.h>

int main() {
  int idade;

  printf("Digite a idade: ");
  if (scanf("%d", &idade) != 1) {
    printf("Entrada inválida.\n");
    return 1;
  }

  if (idade < 0) {
    printf("Idade inválida.\n");
  } else if (idade < 12) {
    printf("Criança\n");
  } else if (idade < 18) {
    printf("Adolescente\n");
  } else if (idade < 60) {
    printf("Adulta\n");
  } else {
    printf("Idosa\n");
  }

  return 0;
}