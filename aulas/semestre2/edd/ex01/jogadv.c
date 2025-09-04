#include <stdio.h>

int main() {
  const int numero_secreto = 7;
  int palpite;

  printf("Jogo de Adivinhação!\n");
  printf("Tente adivinhar o número secreto.\n");

  do {
    printf("Digite seu palpite: ");
    scanf("%d", &palpite);

    if (palpite != numero_secreto) {
      printf("Errado! Tente novamente.\n");
    }
  } while (palpite != numero_secreto);

  printf("Parabéns! Você acertou o número.\n");

  return 0;
}