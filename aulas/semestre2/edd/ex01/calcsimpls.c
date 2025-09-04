#include <stdio.h>
#include <stdlib.h>

int main() {
  
  int a, b, c;
  char operador;
  printf("Digite dois valores INTEIROS?\n\n");
    scanf("%i%i", &a, &b);
  printf("Selecione um operador (+-*/): \n");
    scanf(" %c", &operador);
  switch(operador){
    case '+':
    c = a + b;
      printf("%i + %i = %i", a, b, c);
      break;
    case '-':
    c = a - b;
      printf("%i - %i = %i", a, b, c);
      break;
    case '*':
    c = a * b;
      printf("%i * %i = %i", a, b, c);
      break;
    case '/':
    c = a / b;
      printf("%i / %i = %i", a, b, c);
      break;
  }
  printf("\n");
}