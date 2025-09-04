// // #include <stdio.h>

// // void mensage(){
// //   printf("Uninove - Universidade Nove de Julho\n");
// // }

// // void calculo1(int valor){
// //   printf("\nValor Recebido %i", valor);
// // }

// // int soma(int valor1, int valor2){
// //   return valor1 + valor2;
// // }

// // int main() {
// //   mensage(); // Chamada da funcao 
// //   calculo1(10); // Chamada a funcao enviando argumentos
// //   int resultado = soma(53,3); // Chamada a uma funcao com argumentos e retorno
// //   printf("\nResultado da soma: %i\n", resultado);
// //   return 0;
// // }

// #include <stdio.h>

// float inserirNotas(){
//     float nota1, nota2, nota3, nota4, media;

//     printf("Nota 1: ");
//     scanf("%f", &nota1);
    
//     printf("Nota 2: ");
//     scanf("%f", &nota2);
    
//     printf("Nota 3: ");
//     scanf("%f", &nota3);

//     printf("Nota 4: ");
//     scanf("%f", &nota4);

//     return (nota1 + nota2 + nota3 + nota4) / 4;
// }

// void exibirResultado(float media){
  
//   printf("Media: %.1f\n", media);
  
//   if (media >= 7.0 && media <= 10.0){
//     printf("Aprovado\n");
//   } else if (media >= 5.0 && media < 7.0){
//     printf("Recuperacao\n");
//   } else if (media >= 0.0 && media < 5.0){
//     printf("Reprovado\n");
//   } else {
//     printf("Nota invalida\n");
//   }
// }

// int main(){

//   float mediaDoAluno = inserirNotas();
//   exibirResultado(mediaDoAluno);
  
//   return 0;
// } 
// /* 
// Escopo de variavel - Ela existe na memoria em que momento?
// A variavel n fica pra sempre na memoria, ela e criada no momento da execucao de uma funcao, quando acaba a funcao a variavel desaparece da memoria logo depois
// O escopo e o tempo de vida de uma variavel

// Alterado o nome media para mediaDoAluno
// media so existe dentro da funcao MAIN, quando sai ela muda o nome para mediaDoAluno
// */

#include <stdio.h>

int main() {
  
  float valores[4];

  for(int i = 0; i < 4; i++) {
    printf("Nota %i: ", i + 1);
    scanf("%f", &valores[i]);
  }



  // int valores[4] = {10, 50, 8, 23};
  // valores[0] = 10;
  // valores[1] = 50;
  // valores[2] = 8;
  // valores[3] = 23;

  // for(int i = 0; i < 4; i++){
  //   printf("Valores [%d]: %d\n", i, valores[i]);
  // }
  //printf("Valores [0]: %d\n", valores[0]);
  // printf("Valores [1]: %d\n", valores[1]);
  // printf("Valores [2]: %d\n", valores[2]);
  // printf("Valores [3]: %d\n", valores[3]);
}