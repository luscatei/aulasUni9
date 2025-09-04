#include <stdio.h>

int a;

int main(){

  printf("Insira um numero: \n");
  scanf("%i", &a);
  if(a % 2 == 0){
    printf("O número %i é par!\n", a);
  } else {
    printf("O número %i é impar!\n\n", a);
  }
  return 0;
}