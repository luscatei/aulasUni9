#include <stdio.h>

int main() {
  int n, num, soma = 0;

  printf("Digite a quantidade de numeros a somar: ");
  scanf("%d", &n);

  for (int i = 0; i < n; i++) {
    printf("Digite o numero %d: ", i + 1);
    scanf("%d", &num);
    soma += num;
  }

  printf("A soma total dos %d numeros digitados eh: %d\n", n, soma);

  return 0;
}