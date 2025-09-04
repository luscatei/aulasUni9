#include <stdio.h>
#include <ctype.h>

int main() {
  char letra;

  printf("Digite uma letra: ");
  scanf(" %c", &letra);

  letra = tolower(letra);

  if (!isalpha(letra)) {
    printf("Caractere invalido. Digite uma letra do alfabeto.\n");
    return 1;
  }

  if (letra == 'a' || letra == 'e' || letra == 'i' || letra == 'o' || letra == 'u') {
    printf("'%c' eh uma vogal.\n", letra);
  } else {
    printf("'%c' eh uma consoante.\n", letra);
  }

  return 0;
}