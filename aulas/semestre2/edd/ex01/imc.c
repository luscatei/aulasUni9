#include <stdio.h>

int main() {
  float peso, altura, imc;

  printf("Digite o peso (kg): ");
  scanf("%f", &peso);

  printf("Digite a altura (m): ");
  scanf("%f", &altura);

  if (altura <= 0) {
    printf("Altura inválida.\n");
    return 1;
  }

  imc = peso / (altura * altura);

  printf("IMC: %.2f\n", imc);

  if (imc < 18.5) {
    printf("Categoria: Abaixo do peso\n");
  } else if (imc < 25.0) {
    printf("Categoria: Normal\n");
  } else if (imc < 30.0) {
    printf("Categoria: Sobrepeso\n");
  } else {
    printf("Categoria: Obeso\n");
  }

  return 0;
}