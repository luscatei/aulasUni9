#include <stdio.h>
#include <string.h>

#define SENHA_CORRETA "Aprovado"
#define MAX_TENTATIVAS 3

int main() {
  char senha[100];
  int tentativas = 0;

  while (tentativas < MAX_TENTATIVAS) {
    printf("Digite a senha: ");
    if (fgets(senha, sizeof(senha), stdin) == NULL) {
      printf("Erro na leitura.\n");
      return 1;
    }
    // Remove o '\n' do final
    senha[strcspn(senha, "\n")] = 0;

    if (strcmp(senha, SENHA_CORRETA) == 0) {
      printf("Aprovado\n");
      return 0;
    } else {
      tentativas++;
      printf("Senha incorreta. Tentativa %d de %d.\n", tentativas, MAX_TENTATIVAS);
    }
  }

  printf("Bloqueado\n");
  return 0;
}