#include <stdio.h>

int main(){
	int opcao;
	float frequencia, nota;
	
	printf("Escolha umadas opcoes:\n 1.Verificar se o aluno foi aprovado\n 2.Sair\n");
	
	printf("=========================================\n");
	
	printf("Digite a opcao: ");
	scanf("%d", &opcao);
	
	switch (opcao){
		case 1:
            printf("Digite a nota final do aluno: ");
            scanf("%f", &nota);
            printf("Digite a %% de frequencia do aluno: ");
            scanf("%f", &frequencia);
            
            if(nota >= 7 && frequencia >= 75){
            	printf("\nAluno Aprovado\n");
			} else {
				printf("\nAluno Reprovado\n");
			}
			break;
			
		case 2:
			printf("Encerrando programa...");
			break;
		
		default:
			printf("Opção invalida!");
         }
         
         return 0;
         
     }
