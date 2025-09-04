#include <stdio.h>

int main() {
  float nota;
  int aprovados = 0;

  printf("Digite as notas dos alunos (digite -1 para encerrar):\n");
  while (1) {
    printf("Nota: ");
    if (scanf("%f", &nota) != 1) {
      printf("Entrada inválida.\n");
      // Limpa o buffer de entrada
      int c;
      while ((c = getchar()) != '\n' && c != EOF);
      continue;
    }
    if (nota == -1)
      break;
    if (nota >= 7.0)
      aprovados++;
  }

  printf("Total de alunos aprovados: %d\n", aprovados);
  return 0;
}