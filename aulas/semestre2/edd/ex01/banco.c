#include <stdio.h>

int main() {
  int opcao;
  float saldo = 1000.0f, valor;

  do {
    printf("\n=== Menu Banco ===\n");
    printf("1. Ver saldo\n");
    printf("2. Depositar\n");
    printf("3. Sacar\n");
    printf("0. Sair\n");
    printf("Escolha uma opção: ");
    scanf("%d", &opcao);

    switch (opcao) {
      case 1:
        printf("Saldo atual: R$ %.2f\n", saldo);
        break;
      case 2:
        printf("Digite o valor para depositar: R$ ");
        scanf("%f", &valor);
        if (valor > 0) {
          saldo += valor;
          printf("Depósito realizado. Novo saldo: R$ %.2f\n", saldo);
        } else {
          printf("Valor inválido!\n");
        }
        break;
      case 3:
        printf("Digite o valor para sacar: R$ ");
        scanf("%f", &valor);
        if (valor > 0 && valor <= saldo) {
          saldo -= valor;
          printf("Saque realizado. Novo saldo: R$ %.2f\n", saldo);
        } else {
          printf("Valor inválido ou saldo insuficiente!\n");
        }
        break;
      case 0:
        printf("Saindo...\n");
        break;
      default:
        printf("Opção inválida!\n");
    }
  } while (opcao != 0);

  return 0;
}